<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function create(){
    	return view('admin/users/create');
    }

    public function store(Request $request){
    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();
    	// Flash is a package that sends a beauty message to the view, works with bootstrap
		flash('Se ha registrado ' . $user->name . ' de forma existosa')->success();
		return redirect()->route('users.index');

    }

    public function index(){
    	$users = User::orderBy('name','ASC')->paginate(2);

    	return view('admin/users/index')->with('users', $users);
    }
}
