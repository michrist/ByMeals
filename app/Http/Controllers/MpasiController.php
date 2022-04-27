<?php

namespace App\Http\Controllers;

use App\Models\Mpasi;
use Illuminate\Http\Request;

class MpasiController extends Controller
{
    public function show(){
        $mpasis = Mpasi::all();
        $title = 'Menu';
        return view('menu', compact(['mpasis', 'title']));
    }
}
