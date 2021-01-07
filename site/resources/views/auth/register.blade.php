@extends('layout')

@section('title','Register')

@section('content')

    <div class="col-sm-5 shadow border mx-auto mt-4 py-3 rounded-3 mb-5">
        <h1 class="text-center">Sign up</h1>
        <form action="/register" method="post" class="w-50 mx-auto">
            @csrf

            <div class="form-group">
                <label for="first_name">First name:</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="last_name">Last name:</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="date_of_birth">Birth date:</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" class="form-control">
            </div>

            <div class="form-group mt-3 mb-3 d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Sign up</button>
                <a href="/login" class="text-decoration-underline align-self-center">I already have an account</a>
            </div>


        </form>
    </div>

@endsection


