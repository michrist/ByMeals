<?php

namespace App\Http\Controllers;

use App\Models\Mpasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MpasiController extends Controller
{
    public function show(){
        $mpasis = Mpasi::all();
        $breakfast = Mpasi::where('waktu','breakfast')->get();
        $lunch = Mpasi::where('waktu','lunch')->get();
        $dinner = Mpasi::where('waktu','dinner')->get();
        $category1 = Mpasi::where('kategorirentang',1)->get();
        $category2 = Mpasi::where('kategorirentang',2)->get();
        $category3 = Mpasi::where('kategorirentang',3)->get();
        $category4 = Mpasi::where('kategorirentang',4)->get();
        $category5 = Mpasi::where('kategorirentang',5)->get();
        $title = 'Menu';
        return view('menu', compact(['mpasis', 'title', 'breakfast', 'lunch', 'dinner', 'category1', 'category2', 'category3', 'category4', 'category5']));
    }
    public function cari(Request $request){
        $cari = $request->cari;
        $mpasi = DB::table('mpasi')
		->where('nama','like',"%".$cari."%")
		->get();
        return view('carimenu', [
            'mpasi'=>$mpasi,
            'title'=>'Menu',
            'cari'=>$cari
        ]);

    }
}
