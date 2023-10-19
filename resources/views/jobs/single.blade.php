@extends('layouts.app')
<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('assets/images/hero_1.jpg')}});" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">{{ $job->job_title }}</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <a href="#">Job</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>{{ $job->job_title }}</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    @if (\Session::has('save'))
        <div class="alert alert-success">
            <p>{{ \Session::get('save') }}</p>
        </div>
    @elseif(\Session::has('apply'))
        <div class="alert alert-success">
            <p>{{ \Session::get('apply') }}</p>
        </div>
    @elseif(\Session::has('error'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('error') }}</p>
        </div>
    @endif
  </div>
  <section class="site-section">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <div class="border p-2 d-inline-block mr-3 rounded">
              <img src="{{asset('assets/images/'.$job->image)}}" alt="Image">
            </div>
            <div>
              <h2>{{ $job->job_title }}</h2>
              <div>
                <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{ $job->company }}</span>
                <span class="m-2"><span class="icon-room mr-2"></span>{{ $job->job_region }}</span>
                <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{ $job->job_type }}</span></span>
              </div>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-lg-8">
          <div class="mb-5">
            <figure class="mb-5"><img src="{{asset('assets/images/job_single_img_1.jpg')}}" alt="Image" class="img-fluid rounded"></figure>
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.</p>
            <p>Velit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!</p>
          </div>
          <div class="mb-5">
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
            <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
            </ul>
          </div>

          <div class="mb-5">
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
            <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
            </ul>
          </div>

          <div class="mb-5">
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
            <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
            </ul>
          </div>

          <div class="row mb-5">
            <div class="col-6">
                <form action="{{ route('job.save') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="job_id" value="{{ $job->id }}">
                    <input type="hidden" name="job_title" value="{{ $job->job_title }}">
                    <input type="hidden" name="job_type" value="{{ $job->job_type }}">
                    @if ($savedJob > 0)
                        <button class="btn btn-block btn-light btn-md" type="submit" disabled>Saved</button>
                    @else
                        <button class="btn btn-block btn-light btn-md" type="submit"><i class="icon-save"></i> Save job</button>
                    @endif
                </form>
                {{-- <input type="submit" name="submit" value="Save Job">    --}}
            <!--add text-danger to it to make it read-->
            </div>
            <div class="col-6">
                <form action="{{ route('job.apply')}}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="cv" value="{{ Auth::user()->cv }}">
                    <input type="hidden" name="job_id" value="{{ $job->id }}">
                    <input type="hidden" name="job_image" value="{{ $job->image }}">
                    <input type="hidden" name="job_title" value="{{ $job->job_title }}">
                    <input type="hidden" name="job_type" value="{{ $job->job_type }}">
                    <input type="hidden" name="job_region" value="{{ $job->job_region }}">
                    <input type="hidden" name="company" value="{{ $job->company }}">

                    @if ($appliedJob > 0)
                        <button class="btn btn-block btn-primary btn-md" disabled>Applied</button>
                    @else
                        <button class="btn btn-block btn-primary btn-md">Apply Now</button>
                    @endif
                </form>
            </div>
          </div>

        </div>

        <div class="col-lg-4">
          <div class="bg-light p-3 border rounded mb-4">
            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
            <ul class="list-unstyled pl-3 mb-0">
              <li class="mb-2"><strong class="text-black">Published on:</strong> {{ $job->created_at->format('M d, Y') }}</li>
              <li class="mb-2"><strong class="text-black">Vacancy:</strong> {{ $job->vacancy }}</li>
              <li class="mb-2"><strong class="text-black">Employment Status:</strong> {{ $job->job_type }}</li>
              <li class="mb-2"><strong class="text-black">Experience:</strong> {{ $job->experience }}</li>
              <li class="mb-2"><strong class="text-black">Job Location:</strong> {{ $job->job_region }}</li>
              <li class="mb-2"><strong class="text-black">Salary:</strong> {{ $job->salary }}</li>
              <li class="mb-2"><strong class="text-black">Gender:</strong> {{ $job->gender }}</li>
              <li class="mb-2"><strong class="text-black">Application Deadline:</strong> {{ $job->application_deadline }}</li>
            </ul>
          </div>

          <div class="bg-light p-3 border rounded">
            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
            <div class="px-3">
              <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
            </div>
          </div>

          <div class="bg-light p-3 border rounded mt-4">
            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Categories</h3>
              <ul class="list-unstyled pl-3 mb-0">
                @foreach ($categories as $category)
                    <li class="mb-2"><a href=""> {{ $category->category }}</a></li>
                @endforeach
              </ul>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="site-section" id="next">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2">{{ $relatedJobsCount }} Related Jobs</h2>
        </div>
      </div>

      <ul class="job-listings mb-5">
        @foreach ($relatedJobs as $job)
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                <a href="{{ route('single.job', $job->id)}}"></a>
                <div class="job-listing-logo">
                <img src="{{asset('assets/images/'.$job->image)}}" alt="Image" class="img-fluid">
                </div>

                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                    <h2>{{ $job->job_title }}</h2>
                    <strong>{{ $job->company }}</strong>
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                    <span class="icon-room"></span> {{ $job->job_region }}
                </div>
                <div class="job-listing-meta">
                    <span class="badge badge-danger">{{ $job->job_type }}</span>
                </div>
                </div>
            </li>
        @endforeach
      </ul>
    </div>
  </section>
