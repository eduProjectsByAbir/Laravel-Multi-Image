<?php

namespace App\Http\Controllers;

use App\Models\MultiImage;
use App\Http\Requests\StoreMultiImageRequest;
use App\Http\Requests\UpdateMultiImageRequest;

class MultiImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMultiImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMultiImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MultiImage  $multiImage
     * @return \Illuminate\Http\Response
     */
    public function show(MultiImage $multiImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MultiImage  $multiImage
     * @return \Illuminate\Http\Response
     */
    public function edit(MultiImage $multiImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMultiImageRequest  $request
     * @param  \App\Models\MultiImage  $multiImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMultiImageRequest $request, MultiImage $multiImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MultiImage  $multiImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MultiImage $multiImage)
    {
        //
    }
}
