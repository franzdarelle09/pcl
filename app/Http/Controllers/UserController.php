<?php

namespace App\Http\Controllers;

use App\Town;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function index(){
		$users = User::where('town_id','!=',NULL)->orderBy('name')->get();
		return view('admin.user_list',compact('users'));
	}

    public function signup()
    {
    	$towns = Town::orderBy('name')->get();
    	return view('admin.signup',compact('towns'));
    }

    public function store(Request $request)
    {
       
        $user = ($request->input('user_id') !== NULL)  ? User::findOrFail($request->user_id) : new User;
        $user->id = $request->input('user_id');
        $user->name = $request->input('name');
        if ($request->input('password') == $request->input('password2')){
        	$password = $request->input('password');
        	$save_status = 1;
        }else{
        	$password = "";
        	$save_status = 0;
        }

        $user->email = $request->input('email');

        if($save_status == 1){
        	$user->password = Hash::make($password);
        	$user->town_id = $request->input('town_id');
	        if($user->save()){
	            return redirect('admin/users');
	        }
    	}
    }
}
