<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Mpasi;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function displayList()
    {
    }

    public function index()
    {
        $check = Schedule::count();
        $schedule = DB::table('schedule')->where('user_id', Auth::id())->get();
        $menuPagi = DB::table('schedule')->select('id', 'tanggal', 'nama', 'waktu_pagi', 'gambar', 'deskripsi', 'menu_pagi_id as idmpasi')->join('mpasi', 'mpasi.idmpasi', '=', 'schedule.menu_pagi_id')->where('user_id', Auth::id())->latest('tanggal')->first();
        $menuSiang = DB::table('schedule')->select('id', 'tanggal', 'nama', 'waktu_siang', 'gambar', 'deskripsi', 'menu_siang_id as idmpasi')->join('mpasi', 'mpasi.idmpasi', '=', 'schedule.menu_siang_id')->where('user_id', Auth::id())->latest('tanggal')->first();
        $menuMalam = DB::table('schedule')->select('id', 'tanggal', 'nama', 'waktu_malam', 'gambar', 'deskripsi', 'menu_malam_id as idmpasi')->join('mpasi', 'mpasi.idmpasi', '=', 'schedule.menu_malam_id')->where('user_id', Auth::id())->latest('tanggal')->first();
        return view('jadwal.report-jadwal', [
            'title' => 'Jadwal',
            'check' => $check,
            'schedules' => $schedule,
            'menuPagi' => $menuPagi,
            'menuSiang' => $menuSiang,
            'menuMalam' => $menuMalam
        ]);
    }

    public function reportJadwal(Request $request)
    {
        $check = Schedule::count();
        $schedule = DB::table('schedule')->where('user_id', Auth::id())->get();
        $menuPagi = DB::table('schedule')->select('id', 'tanggal', 'nama', 'waktu_pagi', 'gambar', 'deskripsi', 'menu_pagi_id as idmpasi')->join('mpasi', 'mpasi.idmpasi', '=', 'schedule.menu_pagi_id')->where('user_id', Auth::id())->where('id', $request->tanggalJadwal)->first();
        $menuSiang = DB::table('schedule')->select('id', 'tanggal', 'nama', 'waktu_siang', 'gambar', 'deskripsi', 'menu_siang_id as idmpasi')->join('mpasi', 'mpasi.idmpasi', '=', 'schedule.menu_siang_id')->where('user_id', Auth::id())->where('id', $request->tanggalJadwal)->first();
        $menuMalam = DB::table('schedule')->select('id', 'tanggal', 'nama', 'waktu_malam', 'gambar', 'deskripsi', 'menu_malam_id as idmpasi')->join('mpasi', 'mpasi.idmpasi', '=', 'schedule.menu_malam_id')->where('user_id', Auth::id())->where('id', $request->tanggalJadwal)->first();
        return view('jadwal.report-jadwal', [
            'title' => 'Jadwal',
            'check' => $check,
            'schedules' => $schedule,
            'menuPagi' => $menuPagi,
            'menuSiang' => $menuSiang,
            'menuMalam' => $menuMalam
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
    }

    public function hapusJadwal($scheduleId)
    {
        $schedule = Schedule::find($scheduleId)->delete();

        return redirect()->back();
    }

    public function editjadwal($scheduleId)
    {
        $menus = Mpasi::all();
        $menuPagi = Mpasi::where('waktu', 'breakfast')->get();
        $menuSiang = Mpasi::where('waktu', 'lunch')->get();
        $menuMalam = Mpasi::where('waktu', 'dinner')->get();
        $schedule = Schedule::where('id', $scheduleId)->get();

        return view('jadwal.edit-jadwal', [
            'title' => 'Jadwal',
            'schedule' => $schedule,
            'menus' => $menus,
            'menusPagi' => $menuPagi,
            'menusSiang' => $menuSiang,
            'menusMalam' => $menuMalam
        ]);
    }

    public function updatejadwal($scheduleId, Request $request)
    {
        $updatedDate = new DateTime();
        $schedule = Schedule::find($scheduleId);
        $schedule->tanggal = $request->tanggal;
        $schedule->menu_pagi_id = $request->menu_pagi_id;
        $schedule->menu_siang_id = $request->menu_siang_id;
        $schedule->menu_malam_id = $request->menu_malam_id;
        $schedule->waktu_pagi = $request->waktu_pagi;
        $schedule->waktu_siang = $request->waktu_siang;
        $schedule->waktu_malam = $request->waktu_malam;
        $schedule->updated_at = $updatedDate;
        $schedule->save();

        return redirect()->back()->with('status', 'Jadwal Updated Successfully');
    }
}
