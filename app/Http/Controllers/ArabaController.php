<?php

namespace App\Http\Controllers;

use App\Models\Araba;
use Illuminate\Http\Request;

class ArabaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $arabalar=Araba::all();
        return view('arabalar.index',compact('arabalar'));
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

        $araba = new Araba;
        $araba->name=$request->name;
        $araba->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Araba  $araba
     * @return \Illuminate\Http\Response
     */
    public function show(Araba $araba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Araba  $araba
     * @return \Illuminate\Http\Response
     */
    public function edit(Araba $araba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Araba  $araba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Araba $araba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Araba  $araba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Araba $araba)
    {
        //
    }
}
