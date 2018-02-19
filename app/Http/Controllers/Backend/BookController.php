<?php

namespace App\Http\Controllers\Backend;

use App\BookingItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hall;
use App\CategoryGroup;
use App\ItemGroup;
use App\Menu;
use App\Category;
use App\Booking;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $data['bookings'] = Booking::paginate(10);

        return view('backend.book.index', compact('data'));
    }


    public function show(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Booking::find($id)) {
            $request->session()->flash('alert-error', 'Invalid request made.');
            return redirect()->route('admin.book.view');
        }

        $data['items'] = BookingItem::where('booking_id', $data['row']->id)->get();


        return view('backend.book.view', compact('data'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Booking::find($id)) {
            $request->session()->flash('alert-danger', 'Invalid request made.');
            return redirect()->route('admin.book.index');
        }


        $data['row']->delete();
        $request->session()->flash('alert-danger', 'Booking deleted successfully.');
        return redirect()->route('admin.book.index');
    }


}
