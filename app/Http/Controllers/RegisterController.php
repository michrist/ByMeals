<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => "Register",
            'active' => 'register'
        ]);
   }
   public function show($id){
    if(Auth::check() && auth()->user()->id=$id){
        return view('profile', [
            'title' => "Profile",
            'user' => User::find($id)
        ]);
    } else{
        return abort('403');
    }
}
   public function store(Request $request){
    $validatedData=  $request->validate([
         'name' => 'required|max:25',
         'username'=>'required|unique:users',
         'email' => 'required|email:dns|unique:users',
         'password' => 'required|min:8|max:20'
     ]);
     $validatedData['password'] = Hash::make($validatedData['password']);
     User::create($validatedData);
     $request->session()->flash('success', 'Registration was successful! Please Login to your account');
     return redirect('/login');
    }
    public function update($id, Request $request){
        // $validatedData=  $request->validate([
        //      'name' => 'required|max:25',
        //      'namebayi' => 'required',
        //      'tinggi' => 'required',
        //      'berat'=>'required',
        //      'gender'=>'required'
        //  ]);
        $user = User::find($id);

        if(!$request->file('image')){
            $validatedData = $request->validate([
                'name'=>'required'
            ]);

            $user->name = $request->name;
            $user->namebayi = $request->namebayi;
            $user->date1 = $request->date1;
            $user->date = $request->date;
            $user->berat = $request->berat;
            $user->tinggi = $request->tinggi;
            $user->gender = $request->gender;
            $user->pekerjaan = $request->pekerjaan;
            $user->alamat = $request->alamat;
            $user->save();

            $request->session()->flash('success', 'Your profile has been updated');
        }else{
            $validatedData = $request->validate([
                'image'=>'image|file|max:1024'
            ]);

            $file = $request->file('image');

            $nama_file = time()."_".$file->getClientOriginalName();

            $tujuan_upload = 'data_file';

            $file->move($tujuan_upload,$nama_file);

            $user->update([
                'image' => $nama_file
            ]);

            $request->session()->flash('success', 'Your image has been updated');
        }
         return redirect()->back();
        }
}
