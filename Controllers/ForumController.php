<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
    	return view('diskusi.index');
    }

        public function view()
    {
    	 return view('diskusi.view');
    }
}
