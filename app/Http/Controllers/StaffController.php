<?php

namespace App\Http\Controllers;

use App\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'current', 'past']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    public function current()
    {
        return view ('staff.current');
    }

    public function past()
    {
        return view ('staff.past');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //requires all form fields be filled in
        $this->validate(request(), [
            'name' => 'required',
            'position' => 'required',
            'email' => 'required|email',
            'current/past' => 'required'
        ]);

        //creates new paper in database
        Staff::create([
            'name' => request('name'), 
            'position' => request('position'), 
            'email' => request('email'),
            'current/past' => request('current/past'),
        ]);

        //redirect to papers index
        return redirect('/staff/current');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        //
    }
}
