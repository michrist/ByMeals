<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoritController extends Controller
{
    public function favorit()
    {
        $favorit='';
        if (auth()->user() != null) {
            $favorit = DB::table('favoritS')
            ->join('mpasi','mpasi.idmpasi','=','favorits.idmpasi')
            ->where('favorits.id','=',auth()->user()->id)
            ->paginate(12);
        }
        return view ('favorituser', [
            'favorit'=>$favorit,
            'title'=>'Menu'
        ] );

    }

    public function hapusfavorit($idfavorit)
    {
 DB::table('favorits')->where('idfavorit',$idfavorit)->delete();

 return back()->with('info','MPASI Favorit Telah Dihapus');
    }
}