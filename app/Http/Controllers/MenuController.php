<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Mpasi;
use DateTime;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function tambahmenu(){
        return view('tambahmenu', [
            'title' => 'Menu'
        ]);
    }

    public function storemenu(Request $request){
        $this->validate($request, [
            'namaMenu' => 'required',
            'deskripsi' => 'required|max:255',
            'umurBayi' => 'required|numeric',
            'bahan' => 'required|max:255',
            'langkah' => 'required|max:255',
        ]);

        if(Mpasi::where('nama', $request->namaMenu)->count() !== 0){
            $today = new DateTime();
            $input = new Input();
            $input->user_id = Auth::id();
            $input->status = 0;
            $input->nama_menu = $request->namaMenu;
            $input->deskripsi_menu = $request->deskripsi;
            $input->umur_bayi = $request->umurBayi;
            $input->bahan_menu = $request->bahan;
            $input->langkah_memasak = $request->langkah;
            $input->created_at = $today;
            $input->updated_at = $today;
            $input->save();

            return redirect()->back()->with('success', 'Menu Added Successfully');
        }else{
            return redirect()->back()->with('fail', 'Fail to Add Menu');
        };
    }
}
