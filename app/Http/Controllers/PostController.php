<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $name;

    public function index(){
        return view('welcome');
    }
}
