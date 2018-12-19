<?php

namespace App\Http\Controllers;

use App\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function all()
    {
        $laptop = Laptop::all();
        return view('laptop.all', compact('laptop'));
    }

    public function index()
    {
        $laptop = Laptop::all();
        return view('laptop.index', compact('laptop'));
    }
}
