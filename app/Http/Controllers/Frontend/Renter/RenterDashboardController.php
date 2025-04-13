<?php

namespace App\Http\Controllers\Frontend\Renter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RenterDashboardController extends Controller
{
    //
    public function index() : View
    {
        return view('frontend.renter-dashboard.dashboard');
    }
}
