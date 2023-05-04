<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function showApplications()
    {
        // Get the authenticated company_id
        $company_id = auth()->guard('company')->user()->id;

        // Get all job offers for the authenticated company
        $jobOffers = \App\Models\JobOffer::where('company_id', $company_id)->pluck('id');

        // Get all applications for the job offers
        $applications = \App\Models\Application::whereIn('job_id', $jobOffers)
                        ->join('job_offers', 'job_offers.id', '=', 'applications.job_id')
                        ->select('applications.*', 'job_offers.title')
                        ->with('user')
                        ->get();

        return view('applications', compact('applications'));
    }







}
