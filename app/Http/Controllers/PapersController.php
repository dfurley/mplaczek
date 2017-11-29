<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paper;

class PapersController extends Controller
{
    public function index()
    {
    	return view('papers.index');
    }

    public function create()
    {
    	return view('papers.create');
    }

    public function store()
    {
    	Paper::create(request(['authors', 'title', 'publication']));


    	//redirect to papers
    	return redirect('/papers');
    }
}
