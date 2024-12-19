<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        return view('dashboard.index');
    }

    public function underMaintenance()
    {
        return view('comingsoon-page.index');
    }
}
