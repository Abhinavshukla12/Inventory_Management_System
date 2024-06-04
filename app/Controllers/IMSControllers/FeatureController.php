<?php 

namespace App\Controllers\IMSControllers;

use App\Controllers\BaseController;

class FeatureController extends BaseController
{
    public function index()
    {
        return view('IMSViews/Feature/feature');
    }
    public function product_information()
    {
        return view('IMSViews/Feature/product_information');
    }
    public function order()
    {
        return view('IMSViews/Feature/order');
    }
    public function supplier()
    {
        return view('IMSViews/Feature/supplier');
    }
    public function purchase_order()
    {
        return view('IMSViews/Feature/purchase_order');
    }
    public function sales_order()
    {
        return view('IMSViews/Feature/sales_order');
    }
    public function warehouse()
    {
        return view('IMSViews/Feature/warehouse');
    }
    public function return_and_refund()
    {
        return view('IMSViews/Feature/return_and_refund');
    }
}
