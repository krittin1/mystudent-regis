<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function _construct() {
        $this.$this->middleware('auth');
    }

    
    public function index() {

        return view('about', [
            'name' => 'Teety Krittin',
            'year' => '3',
            'faculty' => 'Science',
            'major' => 'Computer Science',
            'address' => "Kasetsart University",
            'id' => '5910450012',
            'advicer' => 'Alan Turing',
            'status' => 'studying'
        ]);
    }


}


