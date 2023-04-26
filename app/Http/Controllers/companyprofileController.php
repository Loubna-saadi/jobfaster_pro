<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class companyprofileController extends Controller
{
    public function show()
    {
        $company = auth()->guard('company')->user();
        return view('companydashbord', ['company' => $company]);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email,' . Auth::guard('company')->user()->id,
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'photo' => 'nullable|image|max:1024'
        ]);

        $company = Auth::guard('company')->user();
        $company->company_name = $request->input('company_name');
        $company->email = $request->input('email');
        $company->phone = $request->input('phone');
        $company->address = $request->input('address');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $path = Storage::putFileAs('public/company_photos', $file, $filename);
            $company->photo = str_replace('public/', '', $path);
        }

        $company->save();

        return redirect()->route('companyprof')->with('success', 'Profile updated successfully.');
    }
}

