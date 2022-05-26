<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mpasi;
use App\Models\PostModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function viewMenu()
    {
        $menu = Mpasi::all()->take(2);
        $artikel = PostModel::all()->take(2);
        return view('home', ['menu' => $menu,'artikel' => $artikel,'title' => 'Home']);
    }
}
