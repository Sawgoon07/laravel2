<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->name=$request->name;
         if($categories->save() ){
             $request->session()->flash('alert-success','Category added sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
         return redirect()->route('admin.category.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return redirect()->route('admin.category.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
         $categories = Category::find($id);
        return view('backend.category.edit', compact('categories'));
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
        
        $categories = Category::find($id);
        $categories->name=$request->name;
         if($categories->save() ){
             $request->session()->flash('alert-success','Category Update sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
         return redirect()->route('admin.category.index');
    }

    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (!$category = Category::find($id)) {
            $request->session()->flash('alert-danger', 'Invalid request made.');
            return redirect()->route('admin.category.index');
        }

        $category->delete();
        $request->session()->flash('alert-danger', 'Category deleted successfully.');
        return redirect()->route('admin.category.index');

    }
    
}
