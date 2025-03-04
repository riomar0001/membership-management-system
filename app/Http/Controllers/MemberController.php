<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //all roles can manage members
    public function index()
    {
        $user = Auth::user();

        $members = DB::table('members')
            ->leftJoin('membership_status', 'members.id', '=', 'membership_status.members_id')
            ->select([
                'members.student_id',
                DB::raw("CONCAT(members.first_name, ' ', members.last_name) AS student_name"),
                'membership_status.status as membership_status',
                'membership_status.approved_by as reviewed_by',
                DB::raw("DATE_FORMAT(CONVERT_TZ(members.created_at, '+00:00', '+08:00'), '%m-%d-%Y %I:%i %p') as registered_at")
            ])
            ->get();

        return view('pages.admin.members.members-list', compact('user', 'members'));
    }
}