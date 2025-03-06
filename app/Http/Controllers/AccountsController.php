<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AccountsController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
            ->select('id', 'first_name','last_name', 'umindanao_email', 'role', 'program','created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.admin.accounts.accounts-list', ['users' => $users]);
    }

    public function create()
    {
        return view('pages.admin.accounts.accounts-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'student_id' => ['required', 'integer', 'unique:users'],
            'umindanao_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'department' => ['required', 'string', 'max:255'],
            'program' => ['required', 'string', 'max:255'],
            'year_level' => ['required', 'integer'],
            'position' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'in:admin,president,officer'],
        ]);

        $userId = DB::table('users')->insertGetId([
            'id' => \Illuminate\Support\Str::uuid(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'student_id' => $request->student_id,
            'department' => $request->department,
            'program' => $request->program,
            'year_level' => $request->year_level,
            'position' => $request->position,
            'umindanao_email' => $request->umindanao_email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('accounts.index')->with('success', 'User added successfully');
    }

    public function show($id)
    {
        $user = DB::table('users')->find($id);
        
        if (!$user) {
            return redirect()->route('accounts.index')->with('error', 'User not found');
        }

        return view('pages.admin.accounts.accounts-show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = DB::table('users')->find($id);
        
        if (!$user) {
            return redirect()->route('accounts.index')->with('error', 'User not found');
        }

        return view('pages.admin.accounts.accounts-edit', ['user' => $user]);
    }

    
    public function update(Request $request, $id)
    {
        $user = DB::table('users')->find($id);
        
        if (!$user) {
            return redirect()->route('accounts.index')->with('error', 'User not found');
        }
    
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'student_id' => ['required', 'integer', 'unique:users,student_id,' . $id],
            'umindanao_email' => ['required', 'string', 'email', 'max:255', 'unique:users,umindanao_email,' . $id],
            'department' => ['required', 'string', 'max:255'],
            'program' => ['required', 'string', 'max:255'],
            'year_level' => ['required', 'integer'],
            'position' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:admin,president,officer'],
        ]);
    
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'student_id' => $request->student_id,
            'umindanao_email' => $request->umindanao_email,
            'department' => $request->department,
            'program' => $request->program,
            'year_level' => $request->year_level,
            'position' => $request->position,
            'role' => $request->role,
            'updated_at' => now(),
        ];
    
        // Only update password if provided
        if ($request->filled('password')) {
            $request->validate([
                'password' => ['confirmed', Rules\Password::defaults()],
            ]);
            $data['password'] = Hash::make($request->password);
        }
    
        DB::table('users')->where('id', $id)->update($data);
    
        return redirect()->route('accounts.index')->with('success', 'User updated successfully');
    }
    public function destroy($id)
    {
        $user = DB::table('users')->find($id);
        
        if (!$user) {
            return redirect()->route('accounts.index')->with('error', 'User not found');
        }

        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('accounts.index')->with('success', 'User deleted successfully');
    }
}