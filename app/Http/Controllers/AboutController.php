<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about($name){
        return 'Nama saya '.$name;
    }

    public function aboutme($name = 'John'){
        return 'Nama saya '.$name;
    }
}
