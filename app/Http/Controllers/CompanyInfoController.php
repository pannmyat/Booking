<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class CompanyInfoController extends Controller
{   
    public function index()
    {       
        return view('Admin.companyProfile');     
    }

}
