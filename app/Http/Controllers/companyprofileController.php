<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class companyprofileController extends Controller
{
    public function show($id)
    {
        $company=Company::find($id);
        return view('companydashbord', ['company' => $company]);
    }

}
