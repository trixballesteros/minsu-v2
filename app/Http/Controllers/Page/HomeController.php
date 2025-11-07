<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function admin_dashboard()
    {
        return Inertia::render('Admin/Dashboard');
    }
}
