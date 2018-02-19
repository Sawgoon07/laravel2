<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Menu;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus= Menu::all();
        return view('backend.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.menu.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->name = $request->get('name');
        $menu->status = 1;

        if($menu->save()){

            $menu->category()->sync($request->get('categories'));

             $request->session()->flash('alert-success','Menu added sucessfully' );
       }else{
            $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }

        return redirect()->route('admin.menu.index');
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
    public function edit(Request $request, $id)
    {
        if (!$menu = Menu::find($id)) {
            $request->session()->flash('alert-error','Error. Please try again' );
            return redirect()->route('admin.menu.index');
        }

        $menu_categories = $menu->category()->pluck('categories.id')->toArray();
        $categories = Category::all();
        
        return view('backend.menu.edit',compact('menu', 'menu_categories', 'categories'));
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
        if (!$menu = Menu::find($id)) {
            $request->session()->flash('alert-error','Error. Please try again' );
            return redirect()->route('admin.menu.index');
        }

        $menu->name = $request->get('name');
        
        if($menu->save() ){

            $menu->category()->sync($request->get('categories'));

            $request->session()->flash('alert-success','Menu Update sucessfully' );

       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
        return redirect()->route('admin.menu.index');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (!$menu = Menu::find($id)) {
            $request->session()->flash('alert-danger','Error. Please try again' );
            return redirect()->route('admin.menu.index');
        }

        $menu->category()->sync([]);
        $menu->delete();

        $request->session()->flash('alert-danger','Menu deleted sucessfully' );
        return redirect()->route('admin.menu.index');

    }
}
