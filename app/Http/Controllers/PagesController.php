<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view ('pages.home');
    }

    public function research()
    {
    	return view ('pages.research');
    }

    public function people()
    {
    	return view ('pages.people');
    }

    public function contact()
    {
    	return view ('pages.contact');
    }
}
