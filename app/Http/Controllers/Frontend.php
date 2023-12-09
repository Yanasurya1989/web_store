<?php

namespace App\Http\Controllers;

use App\Models\Frontends;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontends  $frontends
     * @return \Illuminate\Http\Response
     */
    public function show(Frontends $frontends)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontends  $frontends
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontends $frontends)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontends  $frontends
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frontends $frontends)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontends  $frontends
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontends $frontends)
    {
        //
    }
}
