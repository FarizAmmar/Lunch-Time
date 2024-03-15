<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // Dashboard Index
    public function dashboardView()
    {
        $title = 'Dashboard';
        return view('pages.admin.dashboard', compact('title'));
    }
}
