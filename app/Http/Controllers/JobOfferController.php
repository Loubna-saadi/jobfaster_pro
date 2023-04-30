<?php

namespace App\Http\Controllers;
use App\Models\JobOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    

    public function index()
{
    $company = auth()->guard('company')->user();
    $jobOffers = JobOffer::where('company_id', $company->id)->get();
    return view('joboffers', compact('jobOffers'));
}
public function showall()
    {
        $jobs = JobOffer::all();
        return view('jobs', compact('jobs'));
    }

    public function store(Request $request)
    {
        $company = auth()->guard('company')->user();

        $jobOffer = new JobOffer;
        $jobOffer->title = $request->input('title');
        $jobOffer->description = $request->input('description');
        $jobOffer->requirements = $request->input('requirements');
        $jobOffer->salary = $request->input('salary');
        $jobOffer->company_id = $company->id;
        $jobOffer->save();

        return redirect()->route('joboffers');
    }

    public function destroy($id)
    {
        $jobOffer = JobOffer::find($id);
        $jobOffer->delete();

        return redirect('/joboffers');
    }



}
