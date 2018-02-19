<?php

namespace App\Http\Controllers\Frontend;

use App\BookingItem;
use App\Category;
use App\CategoryGroup;
use App\Hall;
use App\Item;
use App\ItemGroup;
use App\Menu;
use App\Shift;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Booking;
use App\Http\Requests\Frontend\BookingFormValidation;
use PDF;



class BookingController extends Controller
{

    public function bookings()
    {
        $data = [];
        $data['bookings'] = Booking::where('user_id', auth()->user()->id)
            ->paginate(10);

        return view('header.profile', compact('data'));
    }

    public function view(Request $request, $id)
    {
        $dat = [];
        if (!$data['row'] = Booking::find($id)) {
            $request->session()->flash('message', 'Invalid request made.');
            return redirect()->route('header.booking.index');
           
        }

        $data['items'] = BookingItem::where('booking_id', $data['row']->id)->get();

        return view('header.booking.view', compact('data'));
    }

    public function downloadBill(Request $request, $id)
    {
        if (!$data['row'] = Booking::find($id)) {
            $request->session()->flash('message', 'Invalid request made.');
            return redirect()->route('header.booking.index');

        }

        $data['items'] = BookingItem::where('booking_id', $data['row']->id)->get();
        $pdf = PDF::loadView('header.booking.bill-pdf', compact('data'));
        return $pdf->download('bill-'.$id.'.pdf');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        
        $data['shifts'] = Shift::all();
        $data['category_group'] = CategoryGroup::all();

       return view('header.booking.index',compact('data'));
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingFormValidation $request)
    {
        if ($request->has('item')) {
            
            $booking = new Booking();
            $booking->name = $request->get('name');
            $booking->address = $request->get('address');
            $booking->occassion = $request->get('occassion');
            $booking->event = $request->get('event');
            $booking->total = $request->get('total');
            $booking->shift_id   = $request->get('shift');
            $booking->hall_id = $request->get('hall');
            $booking->category_id = $request->get('category');
            $booking->menu_id = $request->get('menu');
            $booking->user_id = auth()->user()->id;
            $booking->save();

            foreach ($request->get('item') as $item) {
                $booking_item = new BookingItem();
                $booking_item->booking_id = $booking->id;
                $booking_item->item_id = $item;
                $booking_item->save();
            }

            $request->session()->flash('alert-success','Booking done sucessfully' );

             return redirect()->route('header.profile');


        }  else {

            $request->session()->flash('alert-success','Please, choose items before booking.' );
            return redirect()->route('header.profile');
        }
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Booking::find($id)) {
            $request->session()->flash('alert-error', 'Invalid request made.');
           return redirect()->route('header.profile');
        }
        
        $data['shifts'] = Shift::all();
        $data['category_group'] = CategoryGroup::all();

        
        return view('header.booking.edit',compact('data'));
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Booking::find($id)) {
            $request->session()->flash('alert-danger', 'Invalid request made.');
            return redirect()->route('header.profile');
        }


        $data['row']->delete();
        $request->session()->flash('alert-danger', 'Booking deleted successfully.');
        return redirect()->route('header.profile');
    }




 
    public function getMenuByCategoryGroup(Request $request)
    {
        $response = [];
        $response['error'] = true;

        if ($request->has('category_group_id')) {

            if ($categoryGroup = CategoryGroup::find($request->get('category_group_id'))) {

                $response['error'] = false;

                $menus = Menu::whereIN('id', json_decode($categoryGroup->menu_ids))->get();
                $menu_options = [];
                foreach ($menus as $menu) {
                    $menu_options[$menu->id] = $menu->name;
                }

                $response['menu_ids'] = $menu_options;

            } else {
                $response['message'] = 'Invalid request.';
            }

        } else {
            $response['message'] = 'Invalid request.';
        }
        
        
        return response()->json(json_encode($response));
    }

    public function getItemsByMenu(Request $request)
    {

        $response = [];
        $response['error'] = true;

        if ($request->has('menu_id')) {

            if ($menu = Menu::find($request->get('menu_id'))) {

                $response['error'] = false;

                $categories = $menu->category;
                $items = [];
                foreach ($categories as $category) {

                    foreach ($category->item as $item) {
                        $items[] = $item;
                    }

                }

                $item_groups = [];
                foreach ($items as $item) {

                    $item_groups[$item->item_group_id]['item_group'] = ItemGroup::find($item->item_group_id);
                    $item_groups[$item->item_group_id]['items'][] = $item;

                }

                $response['html'] = view('header.booking._item_html', [
                    'item_groups' => $item_groups
                ])->render();


            } else {
                $response['message'] = 'Invalid request.';
            }

        } else {
            $response['message'] = 'Invalid request.';
        }


        return response()->json(json_encode($response));

    }

    public function getHallByShift(Request $request)
    {
        $response = [];
        $response['error'] = true;

        if ($request->has('shift_id')) {

            if ($shift = Shift::find($request->get('shift_id'))) {

                $response['error'] = false;

                $halls = Hall::whereNotIn('id', Booking::select('hall_id')->where('shift_id', $shift->id)->get()->pluck('hall_id')->toArray())->get();
                $options = [];
                foreach ($halls as $hall) {
                    $options[$hall->id] = $hall->name;
                }

                $response['hall_ids'] = $options;

            } else {
                $response['message'] = 'Invalid request.';
            }

        } else {
            $response['message'] = 'Invalid request.';
        }


        return response()->json(json_encode($response));
    }
    
}
