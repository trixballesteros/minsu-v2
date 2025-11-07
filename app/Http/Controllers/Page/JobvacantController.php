<?php

namespace App\Http\Controllers\Page;

use function view;

class JobvacantController
{
    public function index(){
        return view('pages.services.jobvacants');
    }
}
