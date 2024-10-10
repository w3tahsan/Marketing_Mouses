<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $banners = Banner::first();
        return view('frontend.index', [
            'banners' => $banners,
        ]);
    }
    function about()
    {
        return view('frontend.about');
    }
    function service()
    {
        return view('frontend.service');
    }
    function project()
    {
        return view('frontend.project');
    }
    function team()
    {
        return view('frontend.team');
    }
    function contact()
    {
        return view('frontend.contact');
    }
    function service_details()
    {
        return view('frontend.service_details');
    }
}
