<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\About;

class DashboardController extends Controller
{
	public function index(){
	return view('backend.dashboard');
	    
}

    
}
