<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function create() {
        return view("sessions.create");
    }

    public function store(Request $request) {
        //validate the request
        request()->validate([ 
            'email' => 'required|exists:users,email',
            'password'=> 'required|exists:users,password',
        ]);

        // attempt to authenticate and log in the user
        // based on the provided credentials

        //redirect with success flash message
        
    }


    public function destroy() {
        auth()->logout();
        return redirect("/")->with('success', 'Goodbye!');
    }
}
