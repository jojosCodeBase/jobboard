@extends('layouts.app')
<style>
    .profile-picture img {
        border-radius: 50%;
        width: 150px;
        /* Adjust the size as needed */
        height: 150px;
        /* Adjust the size as needed */
        object-fit: cover;
        border: 2px solid #89BA16;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Update the custom file label when a file is selected
        $('#cvInput').change(function() {
            var fileName = $(this).val().split('\\').pop();
            $('.custom-file-label').text(fileName);
        });
    });

    $(document).ready(function () {
        // When the file input changes
        $('#image-upload').change(function () {
            var fileName = $(this).val().split('\\').pop();
            // Update the label to show the selected filename
            if (fileName) {
                $('#change-image').html('<i class="fa fa-camera" aria-hidden="true"></i> Change');
            } else {
                $('#change-image').html('<i class="fa fa-camera" aria-hidden="true"></i> Upload');
            }
        });
    });
</script>
<section class="section-hero overlay inner-page bg-image"
    style="background-image: url({{ asset('assets/images/hero_1.jpg') }});" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">Edit Profile</h1>
                <div class="custom-breadcrumbs">
                    <a href="#">Home</a> <span class="mx-2 slash">/</span>
                    <a href="#">User</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Edit Profile</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Edit Profile</h5>
                    <form class="p-4 p-md-5" action="{{ route('updateProfile') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <!--user details-->

                        <div class="form-group d-flex justify-content-center">
                            <div class="profile-picture text-center">
                                <img src="{{ asset('assets/profile-images/' . $user->profile_image) }}"
                                    alt=""><br><br>
                                <button type="button" id="change-image" class="btn btn-primary">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                    Upload
                                </button>
                                <input type="file" id="image-upload" name="profile_image" style="display: none;">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="job-title">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Product Designer" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="job-title">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Product Designer" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="job-title">Designation</label>
                            <input type="text" name="designation" class="form-control" id="designation"
                                placeholder="Product Designer" value="{{ $user->designation }}">
                        </div>

                        <div class="form-group">
                            <label for="job-title">Description</label>
                            <textarea rows="4" cols ="4" class="form-control" id="Description" name="description"
                                placeholder="A brief description about you and your work">{{ $user->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="job-title">LinkedIn Profile Link</label>
                            <input type="text" name="linkedin" class="form-control text-primary" id="linkedin"
                                placeholder="Product Designer" value="{{ $user->linkedin }}">
                        </div>

                        <div class="form-group">
                            <label for="job-title">Github Link</label>
                            <input type="text" name="github" class="form-control text-primary" id="github"
                                placeholder="Product Designer" value="{{ $user->github }}">
                        </div>

                        <div class="form-group">
                            <label for="job-title">Social media link</label>
                            <input type="text" name="social_media" class="form-control text-primary" id="socia-media"
                                placeholder="Product Designer" value="{{ $user->facebook }}">
                        </div>

                        <div class="form-group">
                            <label for="job-title">CV</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="cv" class="custom-file-input" id="cvInput">
                                    <label class="custom-file-label text-primary" for="cvInput">{{ $user->cv }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col">
                                    <input type="submit" name="submit" class="btn btn-block btn-primary btn-md"
                                        style="margin-left: 200px;" value="Update">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('change-image').addEventListener('click', function() {
        event.preventDefault();
        document.getElementById('image-upload').click();
    });

    document.getElementById('image-upload').addEventListener('change', function() {
        const fileInput = this;
        const image = document.querySelector('.profile-picture img');

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>
