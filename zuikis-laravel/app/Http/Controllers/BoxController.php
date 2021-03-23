<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // kreipemes i duomenu baze ir paimame visas dezes
        $boxes = Box::all();
        //objektas-kolekcija

        $boxes = $boxes->sortByDesc('bananas'); // kolekcijos metodas sortinimui
        return view('box.index', ['boxes' => $boxes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('box.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $box = new Box; // sukuriame bananu deze Modelis, abstraktus kodas/objektas
        $box->bananas = $request->bananas_in_box; // iraseme bananus i deze
        // BD bananas             formos name
        $box->save(); // irasem i duomenu baze Modelis irasomas i DB
        return redirect()->route('box.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function show(Box $box)
    {
        // atskirai parodyti pilna info 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function edit(Box $box)
    {
        // kai boaksas iskvieciamas, laravelis is db paima butent ta boksa
        return view('box.edit', ['box' => $box]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Box $box)
    {
        $box->bananas = $request->bananas_in_box; // iraseme naujus bananus i deze
        $box->save(); // irasem i duomenu baze Modelis irasomas i DB
        return redirect()->route('box.index');
    }

    public function add(Box $box)
    {
        return view('box.add', ['box' => $box]);
    }

    public function addToBox(Request $request, Box $box)
    {
        $box->bananas = $box->bananas + $request->add; // iraseme naujus bananus i deze
        $box->save(); // irasem i duomenu baze Modelis irasomas i DB
        return redirect()->route('box.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function destroy(Box $box)
    {
        $box->delete();
        return redirect()->route('box.index');
    }
}
