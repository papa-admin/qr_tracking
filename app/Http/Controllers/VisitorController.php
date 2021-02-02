<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
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
    public function create(Request $request)
    {
        //
        $visitor = new Visitor;
        $visitor->lname = $request->lname;
        $visitor->fname = $request->fname;
        $visitor->mname = $request->mname;
        $visitor->num_h = $request->num_h;
        $visitor->st = $request->st;
        $visitor->brgy = $request->brgy;
        $visitor->city = $request->city;
        $visitor->p_num = $request->p_num;
        $visitor->email = $request->email;
        $visitor->save();

        $i_email = $request->email;

        // \QrCode::size(500)
        //       ->format('png')
        //       ->generate($visitor->lname.' '.$visitor->fname, public_path('images/qrcode.png'));
        \QrCode::email($i_email,'Sample Email','Sample body');

        return view('qrCode',['lname' => $visitor->lname, 'fname' => $visitor->fname, 'st' => $visitor->st]);
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
        $visitor = new Visitor;

        $visitor->create($request->all());
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
