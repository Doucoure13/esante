<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy(){
    	auth()->logout();
    	return redirect('/login');
    }
    public function create(){
    	return view('sessions.create');
    }

    public function store(){
    	//validation
    	if(! auth()->attempt(request(['email','password']))){
    		return redirect('/login')->withInput()->withErrors([
    			'email' => 'Vos idéntifiants sont incorrects.',
    		]);
    	}
    	return redirect('/index');
    }
}
