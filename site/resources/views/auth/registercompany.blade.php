@extends('layout')

@section('title','Register Company')

@section('content')

    <div class="col-sm-5 shadow border mx-auto mt-4 py-3 rounded-3 mb-5">
        <h1 class="text-center">Sign up for Company</h1>
        <form action="/registercompany" method="post" class="w-50 mx-auto">
            @csrf

            <div class="form-group">
                <label for="company_name">Name:</label>
                <input type="text" name="company_name" id="company_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="company_tin">Tin:</label>
                <input type="number" name="company_tin" id="company_tin" class="form-control">
            </div>

            <div class="form-group">
                <label for="company_phone">Phone:</label>
                <input type="tel" name="company_phone" id="company_phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="company_email">Email:</label>
                <input type="email" name="company_email" id="company_email" class="form-control">
            </div>

            <div class="form-group">
                <label for="company_password">Password:</label>
                <input type="password" name="company_password" id="company_password" class="form-control">
            </div>

            <div class="form-group mt-3 mb-3 d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Sign up</button>
                <a href="/login" class="text-decoration-underline align-self-center">I already have an account</a>
            </div>


        </form>
    </div>

@endsection


