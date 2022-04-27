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
            $favorit = DB::table('favorits')
            ->join('mpasi','mpasi.id','=','favorits.idmpasi')
            ->where('favorits.id','=',auth()->user()->id)
            ->get();
        }
        return view ('favorituser',compact(['favorit']) );
    }

}
