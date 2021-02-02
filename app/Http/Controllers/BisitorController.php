<?php

namespace App\Http\Controllers;

use App\Models\Bisitor;
use Illuminate\Http\Request;

class BisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $bisitor = new Bisitor;
        $bisitor->create($request->all());
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bisitor  $bisitor
     * @return \Illuminate\Http\Response
     */
    public function show(Bisitor $bisitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bisitor  $bisitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Bisitor $bisitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bisitor  $bisitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bisitor $bisitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bisitor  $bisitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bisitor $bisitor)
    {
        //
    }
}
