<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function RegistrationPage(){
        return view('Registration');
    }
}
