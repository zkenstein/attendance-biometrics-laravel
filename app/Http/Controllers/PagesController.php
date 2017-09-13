<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        /**
        * Create a new controller instance.
        *
        * @return void
        */
        public function __construct()
        {
                $this->middleware('auth')->except(['public']);
        }

        public function dashboard()
        {
                return view('home');
        }

        public function public()
        {
                return view('public');
        }
}
