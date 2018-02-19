<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\Category;
use App\ItemGroup;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $items= Item::all();
        $items = Item::paginate(10);
        return view('backend.item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $itemGroups = ItemGroup::all();
        return view('backend.item.create', compact('items','category', 'itemGroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $items = new Item(); 
        $items->name=$request->name;
        $items->price=$request->price;
        $items->category_id=$request->category_id;
        $items->item_group_id  = $request->group_id;

        if($items->save() ){
             $request->session()->flash('alert-success','Item added sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }

        return redirect()->route('admin.item.index',compact('items'));
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
        $categories = Category::all();
        $itemGroups = ItemGroup::all();

        $items = Item::find($id);
        return view('backend.item.edit',compact('items','categories', 'itemGroups'));

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

        $items = Item::find($id);
        $items->name=$request->name;
        $items->price=$request->price;
        $items->category_id=$request->category_id;
        $items->item_group_id  = $request->group_id;
        
        if($items->save() ){
            $request->session()->flash('alert-success','Item Update sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
        return redirect()->route('admin.item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
         if (!$items = Item::find($id)) {
            $request->session()->flash('alert-danger', 'Invalid request made.');
            return redirect()->route('admin.item.index');
        }

         $items->delete();
        $request->session()->flash('alert-danger', 'Items deleted successfully.');
        return redirect()->route('admin.item.index');

    
    }


    
}
