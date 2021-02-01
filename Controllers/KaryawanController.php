<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class KaryawanController extends Controller
{
      public function signup()
    {
      return view('daftar.signup');
    }
   
      public function  signin()
    {
      return view('login/sign');
    }

    public function index()
    {
    	 return view('karyawan.index');
    }

    public function edit()
    {
    	 return view('karyawan.edit');
    }

      public function profile()
    {
    	 return view('karyawan.profile');
    }
    
    public function logout()
    {
      return view('login/sign');
    }
    
}
