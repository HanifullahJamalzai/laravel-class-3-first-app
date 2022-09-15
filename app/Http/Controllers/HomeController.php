<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // return 'controller home controller ';
        return view('home');
    }
    
    public function service()
    {
        // return 'service controller';
        // $data = ['First Service', 'Second Service', 'Third Service'];

        
        // return view('service', ['data' => $data]);
        // return view('service', compact('data'));
        return view('service')->with('data', $data);
    }
}
