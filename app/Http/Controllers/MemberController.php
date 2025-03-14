<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\MembershipStatus;
use App\Models\MembershipType;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use App\Http\Controllers\Mail;

class MemberController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $members = DB::table('members')
            ->leftJoin('membership_status', 'members.id', '=', 'membership_status.members_id')
            ->select([
                'members.*',
                'membership_status.status as membership_status',
                'membership_status.approved_by as reviewed_by',
                DB::raw("DATE_FORMAT(CONVERT_TZ(members.created_at, '+00:00', '+08:00'), '%m-%d-%Y %I:%i %p') as registered_at"),
            ])
            ->orderBy('members.created_at', 'desc')
            ->lazyById();

        return view('pages.admin.members.index', compact('user', 'members'));
    }

    public function create()
    {
        return view('pages.admin.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:members',
            'first_name' => 'required',
            'last_name' => 'required',
            'umindanao_email' => 'required|email|regex:/^[a-z]+\.[a-z]+\.[0-9]{6}@umindanao\.edu\.ph$/i|unique:members',
            'program' => 'required',
            'year_level' => 'required',
            'proof_of_membership' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'accept_terms_and_conditions' => 'required', // Fixed typo
        ], [
            'student_id.required' => 'Student ID is required',
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'umindanao_email.required' => 'University email is required and must be a valid email',
            'umindanao_email.regex' => 'University email must be in the format firstname.lastname.123456@umindanao.edu.ph',
            'umindanao_email.unique' => 'University email is already taken',
            'student_id.unique' => 'Student ID is already taken',
            'program.required' => 'Program is required',
            'year_level.required' => 'Year level is required',
            'proof_of_membership.required' => 'Proof of membership is required',
            'accept_terms_and_conditions.required' => 'You must accept the terms and conditions'
        ]);

        $uuid = Str::uuid();

        $member = new Member();
        $membership_status = new MembershipStatus();
        $membership_type = new MembershipType();
        $member->id = $uuid;
        $member->student_id = $request->student_id;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->umindanao_email = $request->umindanao_email;
        $member->program = $request->program;
        $member->year_level = $request->year_level;

        if ($request->hasFile('proof_of_membership')) {
            $file = $request->file('proof_of_membership');
            $extension = $file->getClientOriginalExtension();
            $filename = 'proof_of_membership_' . $uuid . '.' . $extension;

            $this->compressAndStoreImage($file, $filename);

            // Store only the filename instead of the full path
            $member->proof_of_membership = $filename;
        }


        $member->agree_to_terms_and_conditions = $request->has('accept_terms_and_conditions') ? true : false;

        $membership_status->id = Str::uuid();
        $membership_status->members_id = $uuid;
        $membership_status->status = "Pending";

        $membership_type->type = "New";
        $membership_type->members_id = $uuid;

        $member->save();
        $membership_type->save();
        $membership_status->save();


        return redirect()->route('members.index')->with('success', 'Member Succesfully Added');
    }

    public function show($id)
    {

        $member = Member::findOrFail($id);

        $membershipStatus = MembershipStatus::where('members_id', $member->id)->first();
        $membershipType = MembershipType::where('members_id', $member->id)->first();

        return view('pages.admin.members.show', [
            'member' => $member,
            'membershipStatus' => $membershipStatus,
            'membershipType' => $membershipType
        ]);
    }

    public function edit($id)
    {
        $id = (string) $id;

        $member = Member::findOrFail($id);
        $membershipStatus = MembershipStatus::where('members_id', $member->id)->first();
        $membershipType = MembershipType::where('members_id', $member->id)->first();

        return view('pages.admin.members.edit', [
            'member' => $member,
            'membershipStatus' => $membershipStatus,
            'membershipType' => $membershipType
        ]);
    }

    public function update(Request $request, $id)
    {
        $memberId = $request->input('member_id', $id);
        $member = Member::findOrFail($memberId);
        $member = Member::findOrFail($id);

        $request->validate([
            'student_id' => 'required|unique:members,student_id,' . $member->id,
            'first_name' => 'required',
            'last_name' => 'required',
            'umindanao_email' => 'required|email|regex:/^[a-z]+\.[a-z]+\.[0-9]{6}@umindanao\.edu\.ph$/i|unique:members,umindanao_email,' . $member->id,
            'program' => 'required',
            'year_level' => 'required',
            'proof_of_membership' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'accept_terms_and_conditions' => 'required',
        ], [
            'student_id.required' => 'Student ID is required',
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'umindanao_email.required' => 'University email is required and must be a valid email',
            'umindanao_email.regex' => 'University email must be in the format firstname.lastname.123456@umindanao.edu.ph',
            'umindanao_email.unique' => 'University email is already taken',
            'student_id.unique' => 'Student ID is already taken',
            'program.required' => 'Program is required',
            'year_level.required' => 'Year level is required',
            'accept_terms_and_conditions.required' => 'You must accept the terms and conditions'
        ]);

        $member->student_id = $request->student_id;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->umindanao_email = $request->umindanao_email;
        $member->program = $request->program;
        $member->year_level = $request->year_level;

        if ($request->hasFile('proof_of_membership')) {
            if ($member->proof_of_membership && Storage::disk('private')->exists('receipts/' . $member->proof_of_membership)) {
                Storage::disk('private')->delete('receipts/' . $member->proof_of_membership);
            }

            $file = $request->file('proof_of_membership');
            $extension = $file->getClientOriginalExtension();
            $filename = 'proof_of_membership_' . $member->id . '.' . $extension;

            $this->compressAndStoreImage($file, $filename);

            $member->proof_of_membership = $filename;
        }

        $member->agree_to_terms_and_conditions = $request->has('accept_terms_and_conditions') ? true : false;

        $member->save();

        if ($request->has('status')) {
            $membership_status = MembershipStatus::where('members_id', $member->id)->first();
            if ($membership_status) {
                $membership_status->status = $request->status;
                $membership_status->save();
            }
        }

        if ($request->has('membership_type')) {
            $membership_type = MembershipType::where('members_id', $member->id)->first();
            if ($membership_type) {
                $membership_type->type = $request->membership_type;
                $membership_type->save();
            }
        }

        return redirect()->route('members.index')->with('success', 'Member Successfully Updated');
    }

    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin' && Auth::user()->role !== 'president') {
            return redirect()->route('members.index')->with('error', 'You are not authorized to delete members');
        }
        try {
            $member = Member::findOrFail($id);
            MembershipStatus::where('members_id', $id)->delete();
            MembershipType::where('members_id', $id)->delete();

            if ($member->proof_of_membership && Storage::disk('private')->exists('receipts/' . $member->proof_of_membership)) {
                Storage::disk('private')->delete('receipts/' . $member->proof_of_membership);
            }
            $member->delete();
            return redirect()->route('members.index')->with('success', 'Member Successfully Deleted');
        } catch (\Exception $e) {
            return redirect()->route('members.index')->with('error', 'Member not found or could not be deleted');
        }
    }

    public function approveMembership($id)
    {

        $membershipStatus = MembershipStatus::where('members_id', $id)->firstOrFail();

        $user = Auth::user();
        $staffName = $user->first_name . ' ' . $user->last_name;

        $membershipStatus->status = 'Approved';
        $membershipStatus->approved_by = $staffName;
        $membershipStatus->rejected_by = null;

        $membershipStatus->save();


        return redirect()->route('members.show', $id)
            ->with('success', 'Membership has been approved successfully.');
    }

    public function rejectMembership($id)
    {

        $membershipStatus = MembershipStatus::where('members_id', $id)->firstOrFail();

        $user = Auth::user();
        $staffName = $user->first_name . ' ' . $user->last_name;

        $membershipStatus->status = 'Rejected';
        $membershipStatus->rejected_by = $staffName;
        $membershipStatus->approved_by = null;

        $membershipStatus->save();

        return redirect()->route('members.show', $id)
            ->with('success', 'Membership has been rejected successfully.');
    }

    public function getProofOfMembership($filename)
    {
        if (empty($filename)) {
            return response()->json(['error' => 'No filename provided'], 400);
        }

        $path = 'receipts/' . $filename;

        if (!Storage::disk('private')->exists($path)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        $file = Storage::disk('private')->get($path);
        $mimeType = Storage::disk('private')->mimeType($path);

        return response($file, 200)->header('Content-Type', $mimeType);
    }

    private function compressAndStoreImage($file, $filename)
    {
        $extension = $file->getClientOriginalExtension();

        if ($extension == 'png') {
            $image = imagecreatefrompng($file->getRealPath());
        } else {
            $image = imagecreatefromjpeg($file->getRealPath());
        }

        $tempPath = storage_path('app/temp');
        if (!file_exists($tempPath)) {
            mkdir($tempPath, 0755, true);
        }

        $tempFilePath = $tempPath . '/' . $filename;

        if ($extension == 'png') {
            $compressionLevel = 8;
            imagepng($image, $tempFilePath, $compressionLevel);
        } else {
            $compressionQuality = 75;
            imagejpeg($image, $tempFilePath, $compressionQuality);
        }

        imagedestroy($image);

        $fileContent = file_get_contents($tempFilePath);
        $path = 'receipts/' . $filename;
        Storage::disk('private')->put($path, $fileContent);

        unlink($tempFilePath);

        return $path;
    }

    public function showRegistrationForm()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        // Decode FAQs if they exist
        $faqs = null;
        if (isset($organizationSettings->faqs) && $organizationSettings->faqs) {
            $faqs = json_decode($organizationSettings->faqs);
        }

        // dd($organizationSettings);

        // Pass variables to view
        return view('pages.landing.registration', [
            'name' => $organizationSettings->name ?? null,
            'email' => $organizationSettings->email ?? null,
            'mobile' => $organizationSettings->contact_number ?? null,
            'address' => $organizationSettings->address ?? null,
            'facebook' => $organizationSettings->facebook ?? null,
            'twitter' => $organizationSettings->twitter ?? null,
            'instagram' => $organizationSettings->instagram ?? null,
            'linkedin' => $organizationSettings->linkedin ?? null,
            'discord' => $organizationSettings->discord ?? null,
            'logo' => $organizationSettings->logo ?? null,
            'mission' => $organizationSettings->mission ?? null,
            'vision' => $organizationSettings->vision ?? null,
            'faqs' => $faqs,
            'membership_fee' => $organizationSettings->membership_fee ?? null,
            'registration_start_date' => $organizationSettings->registration_start_date ?? null,
            'registration_end_date' => $organizationSettings->registration_end_date ?? null,
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:members',
            'first_name' => 'required',
            'last_name' => 'required',
            'umindanao_email' => 'required|email|regex:/^[a-z]+\.[a-z]+\.[0-9]{6}@umindanao\.edu\.ph$/i|unique:members',
            'program' => 'required',
            'year_level' => 'required',
            'membership_type' => 'required|in:New,Old,Volunteer',
            'proof_of_membership' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'accept_terms_and_conditions' => 'required',
        ], [
            'student_id.required' => 'Student ID is required',
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'umindanao_email.required' => 'University email is required and must be a valid email',
            'umindanao_email.regex' => 'University email must be in the format firstname.lastname.123456@umindanao.edu.ph',
            'umindanao_email.unique' => 'University email is already registered',
            'student_id.unique' => 'Student ID is already registered',
            'program.required' => 'Program is required',
            'year_level.required' => 'Year level is required',
            'membership_type.required' => 'Membership type is required',
            'proof_of_membership.required' => 'Proof of membership is required',
            'accept_terms_and_conditions.required' => 'You must accept the terms and conditions'
        ]);

        try {
            DB::beginTransaction();

            $uuid = Str::uuid();

            $member = new Member();
            $membership_status = new MembershipStatus();
            $membership_type = new MembershipType();

            $member->id = $uuid;
            $member->student_id = $request->student_id;
            $member->first_name = $request->first_name;
            $member->last_name = $request->last_name;
            $member->umindanao_email = $request->umindanao_email;
            $member->program = $request->program;
            $member->year_level = $request->year_level;

            if ($request->hasFile('proof_of_membership')) {
                $file = $request->file('proof_of_membership');
                $extension = $file->getClientOriginalExtension();
                $filename = 'proof_of_membership_' . $uuid . '.' . $extension;

                $this->compressAndStoreImage($file, $filename);

                $member->proof_of_membership = $filename;
            }

            $member->agree_to_terms_and_conditions = $request->has('accept_terms_and_conditions') ? true : false;

            $membership_status->id = Str::uuid();
            $membership_status->members_id = $uuid;
            $membership_status->status = "Pending";

            $membership_type->id = Str::uuid();
            $membership_type->members_id = $uuid;
            $membership_type->type = $request->membership_type;

            $member->save();
            $membership_status->save();
            $membership_type->save();

            DB::commit();

            return redirect()->route('landing')->with('success', 'Your membership registration has been submitted successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'There was a problem with your registration. Please try again later.')->withInput();
        }
    }
}
