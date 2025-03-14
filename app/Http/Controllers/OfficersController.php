<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfficersController extends Controller
{
    // Only admin and president can manage officers

    public function viewOfficers()
    {
        // Fetch all members who are officers from the database
        $officers = DB::table('officers')
            ->join('members', 'officers.member_id', '=', 'members.id')
            ->select('members.student_id', 'members.first_name', 'members.last_name', 'members.program', 'members.year_level', 'officers.position', 'officers.id')
            ->get();

        // Fetch all approved members who are not officers
        $approvedMembers = DB::table('members')
            ->join('membership_status', 'members.id', '=', 'membership_status.members_id')
            ->where('membership_status.status', 'Approved')
            ->whereNotIn('members.id', function ($query) {
                $query->select('member_id')->from('officers');
            })
            ->select('members.id', 'members.first_name', 'members.last_name', 'members.student_id')
            ->get();

        // Pass the officers and approved members data to the view
        return view('pages.admin.officers.officers-view', [
            'officers' => $officers,
            'approvedMembers' => $approvedMembers,
        ]);
    }

    public function storeOfficer(Request $request)
    {
        $request->validate([
            'student_id' => 'required|integer|min:0', // Added integer|min:0 to prevent negative values
            'position' => 'required|string|max:255',
        ], [
            'student_id.required' => 'Student ID is required',
            'student_id.integer' => 'Student ID must be a number',
            'student_id.min' => 'Student ID cannot be negative',
            'position.required' => 'Position is required',
        ]);

        $member = DB::table('members')
            ->where('student_id', $request->input('student_id'))
            ->first();

        if (!$member) {
            return redirect()->route('officers.view')->with('error', 'Member not found.');
        }

        DB::table('membership_types')
            ->where('members_id', $member->id)
            ->update(['type' => 'Officer']);

        DB::table('officers')->insert([
            'id' => \Illuminate\Support\Str::uuid(),
            'member_id' => $member->id,
            'position' => $request->input('position'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('officers.view')->with('success', 'Officer added successfully.');
    }

    public function updateOfficer(Request $request)
    {
        $request->validate([
            'id' => 'required|uuid',
            'position' => 'required|string|max:255',
        ]);

        DB::table('officers')
            ->where('id', $request->input('id'))
            ->update([
                'position' => $request->input('position'),
                'updated_at' => now(),
            ]);

        return redirect()->route('officers.view')->with('success', 'Officer details updated successfully.');
    }

    public function removeOfficer(Request $request)
    {
        $request->validate([
            'officer_id' => 'required|uuid',
        ]);
    
        $officer = DB::table('officers')->where('id', $request->officer_id)->first();
        
        if (!$officer) {
            return redirect()->route('officers.view')->with('error', 'Officer not found.');
        }
    
        DB::beginTransaction();
        
        try {
            DB::table('membership_types')
                ->where('members_id', $officer->member_id)
                ->update([
                    'type' => 'Old',
                    'updated_at' => now()
                ]);
    
            // Remove from officers table
            DB::table('officers')
                ->where('id', $request->officer_id)
                ->delete();
    
            DB::commit();
            return redirect()->route('officers.view')->with('success', 'Officer removed successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('officers.view')->with('error', 'An error occurred while removing the officer.');
        }
    }
}
