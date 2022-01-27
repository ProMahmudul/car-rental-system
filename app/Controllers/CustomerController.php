<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "customer") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("customer/dashboard");
    }
}
