<?php

namespace App\Http\Controllers;

class UserInterfaceController extends Controller
{

    public function index()
    {
        return view('userinterface');
    }

    public function display()
    {
        return request()->all();
    }

}
