<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\companyprofile;


class CompanyInfoController extends Controller
{   
    public function index()
    {       
        return view('Admin.companyProfile');     
    }

    public function store(Request $request)
    {    	
        $validate = $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'address' => 'required',
            'contactno' => 'required|min:11|numeric',
            'email' => 'required|email',
        ]);

        $input = $request->all();              
        companyprofile::create($input);
        return back()->with('success', 'Company Profile added successfully.');
        
    }    

}
