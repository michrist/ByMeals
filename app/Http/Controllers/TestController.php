<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mpasi;

class TestController extends Controller
{
    public function index(){
        $mpasi = Mpasi::all();

        return view('test', ['mpasi'=>$mpasi, 'title'=>'Blog']);
    }
}
