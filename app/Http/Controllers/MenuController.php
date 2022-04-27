<?php

namespace App\Http\Controllers;

use App\Models\Mpasi;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('menu', [ 'title'=>'Menu']);
    }
    public function detail($id){
        $mpasi = Mpasi::find($id);
        $menu = Mpasi::all()->take(3);
        return view('menudetail', [
            'title'=>'Menu',
            'mpasi'=>$mpasi,
            'menu'=>$menu
        ]);
    }
}
