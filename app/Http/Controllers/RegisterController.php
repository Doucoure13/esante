<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create(){
    	return view('registration.create');
    }

    public function store(){
    	//validation
    	$this->validate(request(),[
    		'nom' => 'required',
    		'email' => 'required',
    		'password' => 'required|confirmed'
    	]);

    	//creation et enregistrement user
    	$user=User::create([
    		'nom'  => request('nom'),
    		'email'  => request('email'),
    		'password'  => bcrypt(request('password'))
    	]);

    	//sign
    	auth()->login($user);

    	//redirection
    	return redirect('/');
    }
}
