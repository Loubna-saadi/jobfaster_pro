<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{

    public function store(Request $request)
    {
        // validate the input data
        $validatedData = $request->validate([
            'company_name' => 'required|string',
            'speciality' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email|unique:companies',
            'phone' => 'required',
            'password' => 'required',
            'photo' => 'required',
        ]);

        // create a new company instance with the input data
        $company = new Company([
            'company_name' => $validatedData['company_name'],
            'speciality' => $validatedData['speciality'],
            'address' => $validatedData['address'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => Hash::make($validatedData['password']),
            'photo' => $validatedData['photo'],
        ]);

        // save the company instance to the database
        $company->save();

        return redirect()->route("companyprofile");
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('company')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->route("companyprofile");
        }

        return back()->withInput($request->only('email', 'remember'));
    }
    
    public function Logout(){
        auth()->guard("company")->logout();
        return redirect()->route("homme");
    }
}
