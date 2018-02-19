<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\shift;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shifts = shift::all();
        return view('backend.shift.index', compact('shifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shift.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shifts = shift::all();
        $shifts = new shift();
        $shifts->name=$request->name;
        $shifts->starttime=$request->starttime;
        $shifts->endtime=$request->endtime;

         if($shifts->save() ){
             $request->session()->flash('alert-success','Shift added sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
         return redirect()->route('admin.shift.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $shifts = shift::find($id);
        return view('backend.shift.edit',compact('shifts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shifts =  shift::find($id);
        $shifts->name=$request->name;
        $shifts->starttime=$request->starttime;
        $shifts->endtime=$request->endtime;

         if($shifts->save() ){
            $request->session()->flash('alert-success','Shift Update sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
        return redirect()->route('admin.shift.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (!$shifts = shift::find($id)) {
            $request->session()->flash('alert-danger', 'Invalid request made.');
            return redirect()->route('admin.shift.index');
        }

        $shifts->delete();
        $request->session()->flash('alert-danger', 'Shift deleted successfully.');
        return redirect()->route('admin.shift.index');

    }
    
}
