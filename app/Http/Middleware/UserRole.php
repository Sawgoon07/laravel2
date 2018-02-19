<?php namespace App\Http\Middleware;

use Closure;
use App\User;

class UserRole{
	/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
           
        $role = array('admin','manager','editor');

        if( User::hasRole( $role ) ){

            return $next($request);
        
        }else{

            return response()->view('errors.401');
        }
    }
}