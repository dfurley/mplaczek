<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paper;

class PapersController extends Controller
{
    public function index()
    {
    	$papers = Paper::latest()->get();

        return view('papers.index', compact('papers'));
    }

    public function create()
    {
    	return view('papers.create');
    }

    public function store()
    {
    	$this->validate(request(), [
            'authors' => 'required',
            'title' => 'required',
            'publication' => 'required'
        ]);

        Paper::create(request(['authors', 'title', 'publication']));

    	//redirect to papers
    	return redirect('/papers');
    }
}
