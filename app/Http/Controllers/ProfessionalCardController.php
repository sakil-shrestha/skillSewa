<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\JobInfo;
use App\Models\Portfolio;
use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalCardController extends Controller
{
    public function card_detail($id)
    {

        $professional = Professional::find($id);
        $education = $professional->educations;
        $portfolio =  $professional->portfolio;
        $jobInfo = JobInfo::where('professional_id', $id)->first();
        // $jobInfo =  $professional->jobInfo;

        return view('professionalDetail', compact('professional', 'education', 'portfolio', 'jobInfo'));
        if(! $professional || ! $jobInfo || !$education || ! $portfolio)
        {
            return view('404');
        }
    }
}
