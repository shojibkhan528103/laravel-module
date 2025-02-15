@extends('layouts.master')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (\Module::has('Aboutus') && \Module::isEnabled('Aboutus'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('module.about.us') }}">About Us</a>
                        </li>
                    @endif
                    @if (\Module::has('ContactUs') && \Module::isEnabled('ContactUs'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('module.contact.us') }}">Contact Us</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>About Us</h1>
        <p class="text-muted">Learn more about our company and team.</p>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Our Mission</h5>
                <p class="card-text">We strive to deliver the best services to our customers with dedication and innovation.
                </p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Our Team</h5>
                <p class="card-text">Our team consists of talented professionals dedicated to making a difference.</p>
            </div>
        </div>
    </div>
@endsection
