<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    //all roles can manage members
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
            ->get();

        return view('pages.admin.members.index', compact('user', 'members'));
    }


    public function create()
    {
        return view('pages.admin.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:members',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'country' => 'required'
        ]);

        $member = Member::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'notes' => $request->notes,
        ]);

        return redirect()->route('members.index')->with('success', 'Member Succesfully Added');
    }

    public function show($id)
    {
        $member = Member::find($id);
        return view('pages.admin.members.show', compact('member'));
    }
    public function edit($id)
    {
        $member = Member::find($id);
        return view('pages.admin.members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
    }

}
