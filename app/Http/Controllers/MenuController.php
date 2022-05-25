<?php

namespace App\Http\Controllers;

use App\Models\Mpasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index(){
        return view('menu', [ 'title'=>'Menu']);
    }
    public function detail($idmpasi){
        $mpasi = DB::table('mpasi')->where('idmpasi', $idmpasi)->first();
        $menu = Mpasi::all()->take(3);
        return view('menudetail', [
            'title'=>'Menu',
            'mpasi'=>$mpasi,
            'menu'=>$menu,
            'idmpasi'=>$idmpasi
        ]);
    }
}
