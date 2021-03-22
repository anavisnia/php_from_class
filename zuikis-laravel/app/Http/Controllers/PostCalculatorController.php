<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PostCalculatorController extends Controller
{
    public function show()
    {
        // po kalblialio default reiksme
        //nuskaitome is sessijos
        $rez = Session::get('suma', 'not found');
        // perrasome, kaip unset()
        Session::put('suma', null);
        return view('pc.show', ['r' => $rez]);
    }

    public function calc(Request $request)
    {
        // is input name="x" ir name="y" 
        $suma = $request->x + $request->y;
        // irasome i sessija
        Session::put('suma', $suma);

        return redirect()->back();
    }
}
