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
        $data = request()->all();
        return view('userinterface', $data)->with(compact('data'));

    }

}
