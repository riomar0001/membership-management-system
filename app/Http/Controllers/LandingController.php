<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class LandingController extends Controller
{

    /**
     * Display the landing page with organization settings.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch organization settings from the database
        $data = \DB::table('organizations_setting')->first();

        // If settings exist, decode the JSON field
        if ($data && isset($data->faqs) && !empty($data->faqs)) {
            $data->faqs = json_decode($data->faqs);
            // Add a debug to check what's being decoded
            // dd($data->faqs);
        }

        // Return the view with the settings data
        return view('pages.landing.index', compact('data'));
    }



    public function getOrgLogo($filename)
    {
        if (empty($filename)) {
            return response()->json(['error' => 'No filename provided'], 400);
        }

        $path = 'logos/' . $filename;

        if (!Storage::disk('public')->exists($path)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        $file = Storage::disk('public')->get($path);
        $mimeType = Storage::disk('public')->mimeType($path);

        return response($file, 200)->header('Content-Type', $mimeType);
    }
}
