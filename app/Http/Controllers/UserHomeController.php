<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;

class UserHomeController extends Controller
{
    
    /**
     * Show the user home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutes = Institute::take(3)->get();
        return view('user.index', ['institutes' => $institutes]);
    }
}
