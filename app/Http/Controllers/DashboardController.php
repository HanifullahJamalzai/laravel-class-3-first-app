<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // return 'Hello I am in controller';
        return view('dashboard');asdfasdf
    }


    public function about(){
        return view('about', ['data' =>  ['item One', 'item Two', 'item Three']]);
    }
}
