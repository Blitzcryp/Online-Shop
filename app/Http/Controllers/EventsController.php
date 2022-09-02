<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    public function __construct()
    {
    }

    public function __invoke(): ?Authenticatable
    {
        return Auth::user();
    }
}
