<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class companyprofileController extends Controller
{
    public function show()
    {
        $company = Company::first(); // Replace this with code to retrieve the correct company information

        return view('companydashbord', ['company' => $company]);
    }

}
