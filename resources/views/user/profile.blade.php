@extends('layouts.app')
<title>User profile</title>
<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{ asset('assets/images/hero_1.jpg')}}');" id="home-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/person_2.jpg')}}" width="100" class="rounded-circle">
                    </div>

                    <div class="text-center mt-3">
                        <h5 class="mt-2 mb-0">{{ $user->name }}</h5>
                        <span>{{ $user->designation }}</span>
                        <div class="px-4 mt-1">
                            <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>

                        <div class="buttons row mb-4">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-success w-75"><i class="fa-solid fa-pen-to-square"></i> Edit profile</button>
                            </div>
                            <div class="col d-flex justify-content-start">
                                <button class="btn btn-success w-75"><i class="fa-solid fa-download"></i> Download Resume</button>
                            </div>
                        </div>

                        <div class="px-3">
                            <a href="#" class="pt-3 pb-3 pr-3 pl-0 underline-none"><span class="icon-facebook"></span></a>
                            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>