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
        $staff = Staff::latest()->where('current/past', '=', 'current')->get();

        return view ('staff.current', compact('staff'));
    }

    public function past()
    {
        $staff = Staff::latest()->where('current/past', '=', 'past')->get();

        return view ('staff.past', compact('staff'));
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

        //creates new staff object in database
        Staff::create([
            'name' => request('name'), 
            'position' => request('position'), 
            'email' => request('email'),
            'current/past' => request('current/past'),
        ]);

        //redirect to current staff 
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
    public function edit($id)
    {
        $staff = staff::findOrFail($id);
        return view('staff.edit') -> with('staff', $staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'position' => 'required',
            'email' => 'required|email',
            'current/past' => 'required'
        ]);

        //update staff object in database
        Staff::where('id', $id)->update($request->except(['_token', '_method']));

        //redirect to current staff
        return redirect('staff/current');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        staff::find($id)->delete();

        return redirect('staff/current');
    }
}
