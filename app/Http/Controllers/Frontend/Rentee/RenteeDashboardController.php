<?php

namespace App\Http\Controllers\Frontend\Rentee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RenteeDashboardController extends Controller
{
    //
    public function index() : View
    {
        return view('frontend.rentee-dashboard.dashboard');
    }
}
