@extends('layout')

@section('title','Home')

@section('content')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">

                @if(@isset($notification))
                    <div class="border-success border rounded-3 shadow p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#198754" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                        <h2 class="text-success mt-3">{{ $notification }}</h2>
                    </div>

                @else

                <h1 class="fw-light mb-3">Select your register method</h1>
                <p class="lead text-muted">You can chose first method by entering your login and password. Or if you have not user account go to signup via company.</p>
                <p>
                    <a href="/register" class="btn btn-primary my-2 px-4">User</a>
                    <a href="/registercompany" class="btn btn-secondary my-2">Company</a>
                </p>
            </div>
        </div>
    </section>

    @endif

@endsection


