<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/adminStyles.css') }}">
</head>

<body class="vh-100 d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center fs-3 fw-bold">
                        ADMIN LOGIN
                    </div>
                    <div class="user-image text-center p-5">
                        <img src="{{asset('assets/images/admin-icon.jpg')}}">
                    </div>
                    <div class="card-body">
                        @if (\Session::has('error'))
                            <div class="alert alert-danger">
                                {!! \Session::get('error') !!}
                            </div>
                        @endif
                        {{-- <h5 class="card-title">Login</h5> --}}
                        <form method="POST" class="p-auto" action="{{ route('admin.checkLogin') }}">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="form2Example1" class="form-control p-3"
                                    placeholder="Email" />
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="form2Example2" placeholder="Password"
                                    class="form-control p-3" />
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="submit"
                                class="btn btn-primary w-100 mb-4 text-center p-3 fw-bold">LOG IN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
