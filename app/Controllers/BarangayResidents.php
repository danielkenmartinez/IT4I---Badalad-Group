<?php

namespace App\Controllers;

class BarangayResidents extends BaseController
{
    public function index()
    {
        return view('brgy_residents_view');
    }
}
