<?php

namespace App\Http\Controllers\Jobs;
use App\Models\Job\Job;
use App\Models\Applications;
use App\Models\Job\savedJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category\Category;

class JobController extends Controller
{
    public function single($id){
        $job = Job::find($id);

        // getting related jobs
        $relatedJobs = Job::where('category', $job->category)
        -> where('id', '!=', $id)
        -> take(5)
        -> get();

        // getting related jobs
        $relatedJobsCount = Job::where('category', $job->category)
        -> where('id', '!=', $id)
        -> take(5)
        -> count();

        $savedJob = savedJob::where('user_id', Auth::user()->id)->where('job_id', $id)->count();

        $appliedJob = Applications::where('user_id', Auth::user()->id)->where('job_id', $id)->count();

        $categories = Category::all();

        return view('jobs.single', compact('job', 'relatedJobs', 'relatedJobsCount', 'savedJob', 'appliedJob', 'categories'));
    }

    public function saveJob(Request $request){
        $savedJob = savedJob::create([
            'user_id' => $request->user_id,
            'job_id' => $request->job_id,
            'job_title' => $request->job_title,
            'job_type' => $request->job_type,
        ]);

        if($savedJob)
            return redirect('/jobs/single/'.$request->job_id)->with('save', 'Job Saved Successfully !');
        else
            echo "Some error occured";
    }

    public function applyJob(Request $request){
        if($request->cv == 'NULL'){
            return redirect('/jobs/single/'.$request->job_id)->with('error', 'Upload your CV from the profile page');
        }
        else{
            $applyJob = Applications::create([
                'cv' => Auth::user()->cv,
                'user_id' => Auth::user()->id,
                'job_id' => $request->job_id,
                'job_image' => $request->job_image,
                'job_title' => $request->job_title,
                'job_type' => $request->job_type,
                'job_region' => $request->job_region,
                'company' => $request->company,
            ]);

            if($applyJob)
                return redirect('/jobs/single/'.$request->job_id)->with('apply', 'Job Applied Successfully !');
            else
                echo "Some error occured";
        }
    }

    public function searchJob(Request $request){
        $title = $request->job_title;
        $region = $request->job_region;
        $type = $request->job_type;

        $jobs = Job::select()->where('job_title', 'like', "%$title%")
        ->where('job_region', 'like', "%$region%")
        ->where('job_type', 'like', "%$type%")
        ->get();

        $totalJobs = Job::select()->where('job_title', 'like', "%$title%")
        ->where('job_region', 'like', "%$region%")
        ->where('job_type', 'like', "%$type%")
        ->count();

        if($totalJobs == 0){
            $jobs = Job::select()->where('job_region', 'like', "%$region%")
            ->get();

            $totalJobs = Job::select()->where('job_region', 'like', "%$region%")
            ->count();
        }

        return view('jobs.search', compact('jobs', 'totalJobs'));

    }
}
