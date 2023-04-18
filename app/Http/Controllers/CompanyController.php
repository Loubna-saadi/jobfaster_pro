<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
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

        return redirect()->route("company");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('/');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
