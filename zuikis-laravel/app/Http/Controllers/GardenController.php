<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GardenController extends Controller
{
    public function index($vaisius, $id)
    {
        // return 'Vartai - '.$vaisius.' - '.$id;

        // return view('garden.gates',['pirms' => $vaisius, 'id' => $id]);
        $id = 5 * $id;
        return view('garden.gates',compact('vaisius', 'id'));
    }
}
