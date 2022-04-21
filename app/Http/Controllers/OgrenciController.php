<?php

namespace App\Http\Controllers;

use App\Models\ogrenci;
use Illuminate\Http\Request;

class OgrenciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $ogrenci=Ogrenci::all();
        return view('ogrenci',compact('ogrenci'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'no'=>'integer|unique:App\Models\Ogrenci,no',
                'name'=>'required',
            ]
        );
//       dd($request->name);
        $ogrenci = Ogrenci::create([
           'no'=>$request->no,
           'name'=>$request->name
        ]);

//        $ogrenci->no=$request->no;
//        $ogrenci->name=$request->name;
//        $ogrenci->save();


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function show(ogrenci $ogrenci)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function edit(ogrenci $ogrenci)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ogrenci $ogrenci)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function destroy(ogrenci $ogrenci)
    {
        //
    }
}
