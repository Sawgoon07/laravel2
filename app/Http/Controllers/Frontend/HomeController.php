<?php namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Index;
use App\About;
use App\Contact;
use App\Booking;

class HomeController extends Controller
{
     public function index(){
     	
    	return view('frontend.index');
    }

      public function about(){
        
        return view('frontend.about');
      }
   
    public function contact(){

      $contact= Contact::all();
       return view('frontend.contact',compact('contact'));
    }

    public function savecontact(Request $request){

        $contact = new Contact; 
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        if($contact->save() ){
             $request->session()->flash('alert-success','Contact Send sucessfully' );
       }else{
        $request->session()->flash('alert-error','Error on insertion. Please try again' );
       }
         return redirect()->route('frontend.contact');
    }


      
 public function Bookingbylist()
  {
      $data = [];

      $data['bookings'] = Booking::all();

      return view('frontend.booking-list', compact('data'));
  }



  public function menubylist()
  {
    return view('frontend.mennu-list');
  }

     public function menulist()
  {
    return view('frontend.menu1');
  }
  
   public function menu()
  {
    return view('frontend.menuA');
  }

   public function menumenu()
  {
    return view('frontend.menuB');
  }
  
}


