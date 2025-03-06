<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentManagementController extends Controller
{
    public function showContact()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        // Pass the data to the view
        return view('pages.admin.content-management.contacts', [
            'name' => $organizationSettings->name ?? null,
            'email' => $organizationSettings->email ?? null,
            'contact_number' => $organizationSettings->contact_number ?? null,
            'address' => $organizationSettings->address ?? null,
        ]);
    }
    public function showCreateContact()
    {
        return view('pages.admin.content-management.create-contact');
    }

    public function showEditContact()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.edit-contact', [
            'id' => $organizationSettings->id,
            'name' => $organizationSettings->name,
            'email' => $organizationSettings->email,
            'contact_number' => $organizationSettings->contact_number,
            'address' => $organizationSettings->address,
        ]);
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        $organizationSettings = DB::table('organizations_setting')->first();

        if ($organizationSettings) {
            DB::table('organizations_setting')
                ->where('id', $organizationSettings->id)
                ->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'contact_number' => $request->input('contact_number'),
                    'address' => $request->input('address'),
                ]);
        } else {
            DB::table('organizations_setting')->insert([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'contact_number' => $request->input('contact_number'),
                'address' => $request->input('address'),
            ]);
        }

        return redirect()->route('contacts')->with('success', 'Contact information saved successfully.');
    }


    public function showSocials()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.socials', [
            'facebook' => $organizationSettings->facebook ?? null,
            'twitter' => $organizationSettings->twitter ?? null,
            'instagram' => $organizationSettings->instagram ?? null,
            'linkedin' => $organizationSettings->linkedin ?? null,
            'discord' => $organizationSettings->discord ?? null,
        ]);
    }   

    public function showCreateSocials()
    {
        $organizationSettings = DB::table('organizations_setting')->first();    

        return view('pages.admin.content-management.create-socials', [
            'id' => $organizationSettings->id ?? null,
        ]);
    }

    public function showEditSocials()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.edit-socials', [
            'id' => $organizationSettings->id,
            'facebook' => $organizationSettings->facebook,
            'twitter' => $organizationSettings->twitter,
            'instagram' => $organizationSettings->instagram,
            'linkedin' => $organizationSettings->linkedin,
            'discord' => $organizationSettings->discord,

        ]);
    }

    public function storeSocials(Request $request)
    {
        $request->validate([
            'facebook' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'discord' => 'required|string|max:255',
        ]);

        $organizationSettings = DB::table('organizations_setting')->first();

        if ($organizationSettings) {
            DB::table('organizations_setting')
                ->where('id', $organizationSettings->id)
                ->update([
                    'facebook' => $request->input('facebook'),
                    'twitter' => $request->input('twitter'),
                    'instagram' => $request->input('instagram'),
                    'linkedin' => $request->input('linkedin'),
                    'discord' => $request->input('discord'),
                ]);
        } else {
            DB::table('organizations_setting')->insert([
                'facebook' => $request->input('facebook'),
                'twitter' => $request->input('twitter'),
                'instagram' => $request->input('instagram'),
                'linkedin' => $request->input('linkedin'),
                'discord' => $request->input('discord'),
            ]);
        }

        return redirect()->route('socials')->with('success', 'Socials information added successfully.');
    }




    public function showOrgDetails()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.org-details', [
            'logo' => $organizationSettings->logo ?? null,
            'mission' => $organizationSettings->mission ?? null,
            'vision' => $organizationSettings->vision ?? null,
            'faqs' => $organizationSettings->faqs ?? null,
            
        ]);
    }
    public function showCreateOrgDetails()
    {
        $organizationSettings = DB::table('organizations_setting')->first();    

        return view('pages.admin.content-management.create-org-details', [
            'id' => $organizationSettings->id ?? null,
        ]);
    }

    public function showEditOrgDetails()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.edit-org-details', [
            'id' => $organizationSettings->id,
            'logo' => $organizationSettings->logo,
            'mission' => $organizationSettings->mission,
            'vision' => $organizationSettings->vision,
            'faqs' => json_encode($organizationSettings->faqs),


        ]);
    }

    public function storeOrgDetails(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mission' => 'required|string|max:255',
            'vision' => 'required|string|max:255',
            'faqs' => 'required|json',
        ]);

        $logoPath = $request->file('logo')->store('logos', 'public');

        $organizationSettings = DB::table('organizations_setting')->first();

        if ($organizationSettings) {
            DB::table('organizations_setting')
                ->where('id', $organizationSettings->id)
                ->update([
                    'logo' => $logoPath,
                    'mission' => $request->input('mission'),
                    'vision' => $request->input('vision'),
                    'faqs' => $request->input('faqs'),
                ]);
        } else {
            DB::table('organizations_setting')->insert([
                'logo' => $logoPath,
                'mission' => $request->input('mission'),
                'vision' => $request->input('vision'),
                'faqs' => $request->input('faqs'),
            ]);
        }

        return redirect()->route('org-details')->with('success', 'Organization details added successfully.');
    }

    public function updateOrgDetails(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mission' => 'required|string|max:255',
            'vision' => 'required|string|max:255',
            'faqs' => 'required|json',
        ]);

        $organizationSettings = DB::table('organizations_setting')->first();

        $data = [
            'mission' => $request->input('mission'),
            'vision' => $request->input('vision'),
            'faqs' => $request->input('faqs'),
        ];

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $logoPath;
        }

        DB::table('organizations_setting')
            ->where('id', $organizationSettings->id)
            ->update($data);

        return redirect()->route('org-details')->with('success', 'Organization details updated successfully.');
    }


    public function showRegisDetails()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.regis-details', [
            'membership_fee' => $organizationSettings->membership_fee ?? null,
            'registration_start_date' => $organizationSettings->registration_start_date ?? null,
            'registration_end_date' => $organizationSettings->registration_end_date ?? null,

        ]);
    }

    public function showCreateRegisDetails()
    {
        $organizationSettings = DB::table('organizations_setting')->first();    

        return view('pages.admin.content-management.create-regis-details', [
            'id' => $organizationSettings->id ?? null,
        ]);
    }

    public function showEditRegisDetails()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.edit-regis-details', [
            'id' => $organizationSettings->id,
            'membership_fee' => $organizationSettings->membership_fee,
            'registration_start_date' => $organizationSettings->registration_start_date,
            'registration_end_date' => $organizationSettings->registration_end_date,
           

        ]);
    }

    public function storeRegisDetails(Request $request)
    {
        $request->validate([
            'membership_fee' => 'required|numeric',
            'registration_start_date' => 'required|date',
            'registration_end_date' => 'required|date',
        ]);

        $organizationSettings = DB::table('organizations_setting')->first();

        if ($organizationSettings) {
            DB::table('organizations_setting')
                ->where('id', $organizationSettings->id)
                ->update([
                    'membership_fee' => $request->input('membership_fee'),
                    'registration_start_date' => $request->input('registration_start_date'),
                    'registration_end_date' => $request->input('registration_end_date'),
                ]);
        } else {
            DB::table('organizations_setting')->insert([
                    'membership_fee' => $request->input('membership_fee'),
                    'registration_start_date' => $request->input('registration_start_date'),
                    'registration_end_date' => $request->input('registration_end_date'),
            ]);
        }

        return redirect()->route('regis-details')->with('success', 'Org Details added successfully.');
    }

}