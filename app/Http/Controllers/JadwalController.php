<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Mpasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function displayList()
    {
    }
    public function index()
    {

        $check = Schedule::count();
        $menus = Mpasi::all();
        $schedule = DB::table('schedule')->where('user_id', Auth::id())->get();
        return view('jadwal.report-jadwal', [
            'title' => 'Jadwal',
            'check' => $check,
            'schedules' => $schedule,
            'menus' => $menus
        ]);
    }

    public function addJadwal()
    {
        $menus = Mpasi::all();
        $menuPagi = Mpasi::where('waktu', 'breakfast')->get();
        $menuSiang = Mpasi::where('waktu', 'lunch')->get();
        $menuMalam = Mpasi::where('waktu', 'dinner')->get();

        return view('jadwal.add-jadwal', [
            'title' => 'Jadwal',
            'menus' => $menus,
            'menusPagi' => $menuPagi,
            'menusSiang' => $menuSiang,
            'menusMalam' => $menuMalam
        ]);
    }
    public function storeJadwal(Request $request)
    {
        $jadwal = new Schedule();
        $jadwal->user_id = auth()->user()->id;
        $jadwal->tanggal = $request->input('tanggal');
        $jadwal->menu_pagi_id = $request->input('menu_pagi_id');
        $jadwal->waktu_pagi = $request->input('waktu_pagi');
        $jadwal->menu_siang_id = $request->input('menu_siang_id');
        $jadwal->waktu_siang = $request->input('waktu_siang');
        $jadwal->menu_malam_id = $request->input('menu_malam_id');
        $jadwal->waktu_malam = $request->input('waktu_malam');

        $jadwal->save();
        return redirect()->back()->with('status', 'Jadwal Added Successfully');
        // $validatedData = $request->validate([
        //     'tanggal' => 'required|date',
        //     'menu_pagi_id' => 'required',
        //     'waktu_pagi' => 'required',
        //     'menu_siang_id' => 'required',
        //     'waktu_siang' => 'required',
        //     'menu_malam_id' => 'required',
        //     'waktu_malam' => 'required'
        // ]);
        // $validatedData['user_id'] = auth()->user()->id;
        // Schedule::create($validatedData);
        // return redirect('/report-jadwal')->with('success', 'New post has been added');
    }
}
