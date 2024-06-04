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
    public function feature()
    {
        $data = [];
        return view('IMSViews/Dashboard/feature', $data);
    }
    public function pricing()
    {
        $data = [];
        return view('IMSViews/Dashboard/pricing', $data);
    }
    public function about()
    {
        $data = [];
        return view('IMSViews/Dashboard/about', $data);
    }
    public function profile()
    {
        $data = [];
        return view('IMSViews/Dashboard/profile', $data);
    }
    public function login()
    {
        $data = [];
        return view('IMSViews/Dashboard/login', $data);
    }
    public function change_password()
    {
        $data = [];
        return view('IMSViews/Dashboard/change_password', $data);
    }
    public function logout()
    {
        $data = [];
        return view('IMSViews/Dashboard/logout', $data);
    }
}
