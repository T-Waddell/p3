<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        #return view('welcome');
        #return 'Show the instructions and the form.';
        return view('welcome');
    }
    public function calculate()
    {
        return 'Calculate the results and redirect user back to form with the results.';
    }
}
