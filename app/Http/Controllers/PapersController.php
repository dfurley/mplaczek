<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paper;

class PapersController extends Controller
{
    //allows only logged in users, except for index
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    //displays listing of papers
    public function index()
    {
    	$papers = Paper::latest()->get();

        return view('papers.index', compact('papers'));
    }

    //show form for creating new paper
    public function create()
    {
    	// load create form (resources/views/papers/create.blade.php)
        return view('papers.create');
    }

    //stores newly created paper in database
    public function store()
    {
    	//requires all form fields be filled in
        $this->validate(request(), [
            'authors' => 'required',
            'title' => 'required',
            'publication' => 'required'
        ]);

        //creates new paper in database
        Paper::create([
            'authors' => request('authors'), 
            'title' => request('title'), 
            'publication' => request('publication'),
        ]);

    	//redirect to papers index
    	return redirect('/papers');
    }

    //displays form for editing current paper
    public function edit($id)
    {
        $paper = paper::findOrFail($id);

        //returns the form with the selected paper -> allows the current values to be present in the form fields
        return view('papers.edit') -> with('paper', $paper);
    }

    //saves updated paper to database
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'authors' => 'required',
            'title' => 'required',
            'publication' => 'required'
        ]);
        
        //updates paper in database
        Paper::where('id', $id)->update($request->except(['_token', '_method']));

        //redirect to papers index
        return redirect('/papers');
    }

    //delets paper from the database
    public function destroy($id)
    {
        paper::find($id)->delete();

        return redirect('/papers');
    }
}
