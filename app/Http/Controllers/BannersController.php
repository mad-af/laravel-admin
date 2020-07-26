<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('content.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        Banner::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image
        ]);

        return redirect('/banner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        return view('content.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banner $banner)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        Banner::where('id', $banner->id)
                ->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'image' => $request->image
                ]);
        return redirect('/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(banner $banner)
    {
        Banner::destroy($banner->id);
        return redirect('/banner');
    }
}
