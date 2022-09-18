<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Test;

class HomeController extends Controller
{
    public function home()
    {
        // return 'controller home controller ';
        $data = Test::all();
        return view('home', compact('data'));
    }
    
    public function service()
    {
        // return 'service controller';
        // $data = ['First Service', 'Second Service', 'Third Service'];
        $data = Todo::all();

        
        // return view('service', ['data' => $data]);
        // return view('service', compact('data'));
        return view('service')->with('data', $data);
    }
}
