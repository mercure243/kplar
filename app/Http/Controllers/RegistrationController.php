<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration/create');
    } 

    public function store(RegistrationForm $form)
    {
        $form->persist();
    	/*
        $this->validate(request(),[
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    	]);
        */

    	//$user = User::create(request(['name','email','password']));

        //session('message','Here is a default message');
        session()->flash('message','Thanks so much for signing up');
    	
        /*
    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => \Hash::make(request('password'))
    	]);
    	

    	//\Auth::login($user);
    	auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));
        */

    	//return redirect('/');
    	return redirect()->home();
    }
}
