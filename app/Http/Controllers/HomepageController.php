<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function __construct()
    {
    }

    public function __invoke()
    {
        return view('welcome');
    }
}
