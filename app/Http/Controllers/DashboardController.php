<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use App\Models\MembershipStatus;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
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
            ->orderBy('members.created_at', 'desc')
            ->lazy();

        $yearLevels = DB::table('members')
            ->select(DB::raw('year_level, COUNT(*) as count'))
            ->groupBy('year_level')
            ->pluck('count', 'year_level')->all();


        $monthlyRegistrations = DB::table('members')
            ->select(DB::raw('MONTH(created_at) as month, COUNT(*) as count'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->pluck('count', 'month')->all();

        return view('pages.admin.index', compact('user', 'members', 'yearLevels', 'monthlyRegistrations'));
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
