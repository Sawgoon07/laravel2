<?php

namespace App\Http\Controllers\Frontend;

use App\Booking;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Feedback;



class HeaderController extends Controller
{
   

    public function feedback()
    {
    	$feedbacks= Feedback::all();
       return view('header.feedback',compact('feedbacks'));
    }
    
     public function savefeedback(Request $request){
        $feedbacks = new Feedback;  //model(class)
        /*$user = Auth::user();
        $feedbacks->user_id = $user->id;*/
        $feedbacks->message = $request->message;

        $image = $request->file('image');
    	 $filename='';
    	 if($image){
    	 	if($image->isValid()){
    	 		$ext = $image->getClientOriginalExtension();
    	 		$filename = time().'.'.$ext;
    	 		$path = public_path().'/uploads/';
    	 		$image->move($path,$filename);
    	 		$feedbacks->image = $filename;
    	 	}
    	 }

    	$feedbacks->save();
        return redirect()->route('header.profile');

    }


    public function bill()
    {
        
       return view('header.bill',compact('bill'));
    }



}


