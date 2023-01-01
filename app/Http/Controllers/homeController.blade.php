<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'Admin') { // Role Guru
            return view('tampil');
        } elseif (Auth::user()->role == 'murid') { // Role Murid
            return view('murid.dahsboard');
        } 
               
    }
}