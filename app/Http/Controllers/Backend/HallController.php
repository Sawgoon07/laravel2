<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hall;
use App\shift;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halls= Hall::all();
        return view('backend.hall.index', compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $shifts = shift::all();

         return view('backend.hall.create',compact('shifts'));
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

            $halls = new Hall();
            $halls->name=$request->name;
            $halls->shifts_id=$request->shifts_id;
            $halls->status=$request->status;
            if($halls->save() ){
                 $request->session()->flash('alert-success','Hall added sucessfully' );
           }else{
            $request->session()->flash('alert-error','Error on insertion. Please try again' );
           }

            return redirect()->route('admin.hall.index',compact('shifts'));
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
        $shifts = shift::all();

         $halls= Hall::find($id);
         return view('backend.hall.edit',compact('shifts','halls'));
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
        $shifts = shift::all();

            $halls =  Hall::find($id);
            $halls->name=$request->name;
            $halls->shifts_id=$request->shifts_id;
            $halls->status=$request->status;


             if($halls->save() ){
                $request->session()->flash('alert-success','Hall Update sucessfully' );
           }else{
            $request->session()->flash('alert-error','Error on insertion. Please try again' );
           }
            return redirect()->route('admin.hall.index',compact('shifts','hall'));
        }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
         if (!$halls = Hall::find($id)) {
            $request->session()->flash('alert-danger', 'Invalid request made.');
          return redirect()->route('admin.hall.index');
        }

        $halls->delete();
        $request->session()->flash('alert-danger', 'Hall deleted successfully.');
       return redirect()->route('admin.hall.index');

    }
    
}
