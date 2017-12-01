<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paper;

class PapersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

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

        Paper::create([
            'authors' => request('authors'), 
            'title' => request('title'), 
            'publication' => request('publication'),
        ]);

    	//redirect to papers
    	return redirect('/papers');
    }
}
