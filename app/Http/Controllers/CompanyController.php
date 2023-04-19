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
            'photo' => 'required|image',
        ]);

        if($request->hasFile('photo')){
            $request->validate([
                'image'=>'mimes:png,jpg,jpeg,bmp'
            ]);

            $file=$request->photo;
            $imageName="images/companies/".time()."_".$file->getClientOriginalName();
            $file->move(public_path("images/companies"),$imageName);


            $company = new Company([
                'company_name' => $validatedData['company_name'],
                'speciality' => $validatedData['speciality'],
                'address' => $validatedData['address'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'password' => Hash::make($validatedData['password']),
                'photo' => $imageName,
            ]);
            $company->save();
        }


        return redirect()->route("companyprofile");
    }

    public function login(Request $request)
    {
        // validate the input data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check if the company is authenticated
        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if authenticated, redirect to the company profile page with the company id
            return redirect()->route('companyprof', ['id' => Auth::guard('company')->user()->id]);
        }

        // if not authenticated, redirect back with an error message
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }


    public function Logout(){
        auth()->guard("company")->logout();
        return redirect()->route("homme");
    }
}
