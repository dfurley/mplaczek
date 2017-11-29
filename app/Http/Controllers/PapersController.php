<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	//create new paper using form request data
    	$paper = new \App\Paper;

    	$paper->authors = request('authors');
    	$paper->title = request('title');
    	$paper->publication = request('publication');

    	//save to database
    	$paper->save();

    	//redirect to papers
    	return redirect('/papers');
    }
}
