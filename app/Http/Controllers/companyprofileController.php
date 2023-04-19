<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class companyprofileController extends Controller
{
    public function show($id)
    {
        // retrieve the company record based on the id
        $company = Company::find($id);

        // pass the company record to the profile view
        return view('companyprof', ['company' => $company]);
    }

}
