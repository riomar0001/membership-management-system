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

        // Find receipt files for each member
        foreach ($members as $member) {
            // Define the directory pattern to look for
            $receiptDirectory = "private/receipts/member_{$member->id}";

            // Check if directory exists for this member
            if (Storage::exists($receiptDirectory)) {
                // Get all files from the directory
                $member->receipt_files = Storage::files($receiptDirectory);
            } else {
                // Look for files directly in the receipts folder with member ID in the name
                $allReceipts = Storage::files('private/receipts');
                $member->receipt_files = array_filter($allReceipts, function($file) use ($member) {
                    return strpos($file, "member_{$member->id}") !== false ||
                           strpos($file, "{$member->id}_") !== false ||
                           strpos($file, "_{$member->id}.") !== false;
                });
            }
        }

        return view('pages.admin.members.members-list', compact('user', 'members'));
    }

    // Add method to serve receipt files securely
    public function viewReceipt(Request $request)
    {
        // Sanitize the path
        $path = str_replace('../', '', $request->path);

        // Ensure the path starts with private/receipts to prevent unauthorized access
        if (!str_starts_with($path, 'private/receipts')) {
            abort(403, 'Unauthorized access');
        }

        // Check if the file exists
        if (Storage::exists($path)) {
            // Get the file mime type
            $mimeType = Storage::mimeType($path);

            return response()->file(storage_path("app/{$path}"), [
                'Content-Type' => $mimeType,
            ]);
        }

        abort(404, 'Receipt not found');
    }
}
