<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banners = Banner::first();
        return view('backend.banner.edit', [
            'banners' => $banners,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        if ($request->image == '') {
            Banner::find($id)->update([
                'headline' => $request->headline,
                'desp' => $request->desp,
            ]);
            return back()->with('update', 'Banner Content Updated');
        } else {
            $delete_from = public_path('uploads/banner/' . $banner->image);
            unlink($delete_from);

            $image = $request->image;
            $extension = $image->extension();
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());

            // read image from file system
            $image = $manager->read($image);

            // Store image
            $file_name = uniqid() . '.' . $extension;

            // save modified image in new format
            $image->save(public_path('uploads/banner/' . $file_name));

            Banner::find($id)->update([
                'headline' => $request->headline,
                'desp' => $request->desp,
                'image' => $file_name,
            ]);
            return back()->with('update', 'Banner Content Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
