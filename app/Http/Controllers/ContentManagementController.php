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
            'name' => $organizationSettings->name,
            'email' => $organizationSettings->email,
            'contact_number' => $organizationSettings->contact_number,
            'address' => $organizationSettings->address,
        ]);
    }

    public function showSocials()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.socials', [
            'facebook' => $organizationSettings->facebook,
            'twitter' => $organizationSettings->twitter,
            'instagram' => $organizationSettings->instagram,
            'linkedin' => $organizationSettings->linkedin,
            'discord' => $organizationSettings->discord,
        ]);
    }   

    public function showOrgDetails()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.org-details', [
            'logo' => $organizationSettings->logo,
            'mission' => $organizationSettings->mission,
            'vision' => $organizationSettings->vision,
            'faqs' => $organizationSettings->faqs,
            
        ]);
    }

    public function showRegisDetails()
    {
        $organizationSettings = DB::table('organizations_setting')->first();

        return view('pages.admin.content-management.regis-details', [
            'membership_fee' => $organizationSettings->membership_fee,
            'registration_start_date' => $organizationSettings->registration_start_date,
            'registration_end_date' => $organizationSettings->registration_end_date,

        ]);
    }
}