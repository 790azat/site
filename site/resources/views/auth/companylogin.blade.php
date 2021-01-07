@extends('layout')

@section('title','Login')

@section('content')

    <div class="col-sm-5 shadow border mx-auto mt-5 py-3 rounded-3 mb-5">
        <h1 class="text-center">Login Company</h1>

        @if(@isset($notification))
            <div class="alert alert-danger w-50 mx-auto mt-3" role="alert">
                Incorrect username or password.
            </div>
        @endif

        <form action="/companylogin" method="post" class="w-50 mx-auto">
            @csrf

            <div class="form-group">
                <label for="company_email">Email:</label>
                <input type="email" name="company_email" id="company_email" class="form-control">
            </div>

            <div class="form-group">
                <label for="company_password">Password:</label>
                <input type="password" name="company_password" id="company_password" class="form-control">
            </div>

            <div class="form-group mt-3 mb-3 d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Login</button>
                <a href="/login" class="text-decoration-underline align-self-center">I dont have an account</a>
            </div>


        </form>
    </div>

    <div class="col-sm-5 mx-auto text-center">
        <a href="/login" class="btn btn-primary text-white">
            Login as User
        </a>
    </div>

@endsection


