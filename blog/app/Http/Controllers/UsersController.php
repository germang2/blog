<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function create(){
    	return view('admin/users/create');
    }

    public function store(UserRequest $request){
    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();
    	// Flash is a package that sends a beauty message to the view, works with bootstrap
		flash('Se ha registrado ' . $user->name . ' de forma existosa')->success();
		return redirect()->route('users.index');

    }

    public function index(){
    	$users = User::orderBy('id','ASC')->paginate(5);

    	return view('admin/users/index')->with('users', $users);
    }

    public function destroy($id){
    	$user = User::find($id);
    	$user->delete();

    	flash('El usuario ' . $user->name . ' ha sido borrado exitosamente')->error()->important();

    	return redirect()->route('users.index');
    }

    public function edit($id){
    	$user = User::find($id);

    	return view('admin/users/edit')->with('user', $user);
    }

    public function update(UserRequest $request, $id){
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->type = $request->type;
    	$user->update();

    	flash('El usuario ' . $user->name . ' ha sido editado con exito')->success();

    	return redirect()->route('users.index');
    }
}
