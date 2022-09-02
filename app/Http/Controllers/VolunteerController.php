<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    public function __construct()
    {
    }

    public function __invoke(): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        return Auth::user();
    }
}
