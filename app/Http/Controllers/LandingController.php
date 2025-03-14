<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $content = DB::table('organizations_setting')->first();

        $faqs = null;
        if ($content && $content->faqs) {
            $faqs = json_decode($content->faqs);
        }
        return view('pages.landing.index', [
            'content' => $content,
            'name' => $content->name,
            'logo' => $content->logo,
            'email' => $content->email,
            'address' => $content->address,
            'faqs' => $faqs,
        ]);
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
