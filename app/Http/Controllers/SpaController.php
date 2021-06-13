<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index()
    {
        return view('spa');
    }
    public function getUser(){
        return [
            'name' => auth()->user()->name,
            'email' => auth()->user()->email
        ];
    }
}