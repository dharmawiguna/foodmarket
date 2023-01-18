<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['menu'] = 'home';

        return view('dashboard.pages.index')->with($data);
        // return view('dashboard');
    }
}
