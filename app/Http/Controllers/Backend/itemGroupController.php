<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ItemGroup;

class itemGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item_groups= ItemGroup::all();
        return view('backend.group.index',compact('item_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.group.create',compact('item_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $item_groups = new ItemGroup();
        $item_groups->name=$request->name;
         if($item_groups->save() ){
             $request->session()->flash('alert-success','ItemGroups added sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
         return redirect()->route('admin.group.index');
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
        $item_groups =ItemGroup::find($id);
        
        return view('backend.group.edit',compact('item_groups'));
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
        $item_groups = ItemGroup::find($id);
        $item_groups->name=$request->name;
        
        if($item_groups->save() ){
            $request->session()->flash('alert-success','ItemGroup Update sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
        return redirect()->route('admin.group.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (!$itemGroup = ItemGroup::find($id)) {
            $request->session()->flash('alert-danger', 'Invalid request made.');
            return redirect()->route('admin.category.index');
        }

        $itemGroup->delete();
        $request->session()->flash('alert-danger', 'Item group deleted successfully.');
        return redirect()->route('admin.group.index');

    }

}
