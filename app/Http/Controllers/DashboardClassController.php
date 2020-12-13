<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardClassController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-class');
    }
    public function details()
    {
        return view('pages.dashboard-class-details');
    }
}