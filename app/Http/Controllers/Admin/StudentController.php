<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($x)
    {
        echo $x;
        //return view('welcome');
    }
    public function create()
    {
        echo "welcome to create";
        //return view('welcome');
    }
}
