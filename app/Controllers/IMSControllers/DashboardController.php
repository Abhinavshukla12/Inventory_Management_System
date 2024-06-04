<?php

namespace App\Controllers\IMSControllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [];
        return view('IMSViews/Dashboard/index', $data);
    }
}
