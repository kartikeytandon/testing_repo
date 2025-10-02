@extends('layouts.vertical', ['title' => 'Help', 'subTitle' => 'Calendar'])

@section('content')

<div class="row">
    <div class="col">
        <div class="row d-flex justify-content-center text-center mt-4 pb-5">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <h3 class="fw-semibold">
                    Search for a question
                </h3>
                <p class="mb-3 text-muted">
                    Type your question or search keyword
                </p>
                <div class="search-bar">
                    <span><i class="bx bx-search-alt"></i></span>
                    <input type="email" class="form-control" id="search" placeholder="Start typing..." />
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row d-flex justify-content-center my-4">
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="text-center">
            <img src="/images/app-calendar/help-1.png" alt="help-1" class="img-fluid avatar-md mb-3" />
            <h4 class="fw-semibold">Getting Started</h4>
            <p class="px-2 px-xl-5">
                Learn the basics, connect your calendar and
                discover features that will make scheduling
                easier.
            </p>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="text-center">
            <img src="/images/app-calendar/help-2.png" alt="help-2" class="img-fluid avatar-md mb-3" />
            <h4 class="fw-semibold">Availability</h4>
            <p class="px-2 px-xl-5">
                Determine when you would like to be
                scheduled and explore our advanced
                availability options.
            </p>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="text-center">
            <img src="/images/app-calendar/help-3.png" alt="help-3" class="img-fluid avatar-md mb-3" />
            <h4 class="fw-semibold">
                Customize Event Types
            </h4>
            <p class="px-2 px-xl-5">
                Tailor your invitee experience and ensure
                you’re collecting the information you need
                when they book.
            </p>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="text-center">
            <img src="/images/app-calendar/help-4.png" alt="help-4" class="img-fluid avatar-md mb-3" />
            <h4 class="fw-semibold">Embed Option</h4>
            <p class="px-2 px-xl-5">
                Discover options for adding Calendly to your
                website, ensuring your visitors schedule at
                the height of their interest.
            </p>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="text-center">
            <img src="/images/app-calendar/help-5.png" alt="help-5" class="img-fluid avatar-md mb-3 scal" />
            <h4 class="fw-semibold">Team Scheduling</h4>
            <p class="px-2 px-xl-5">
                Find out how to configure multi-user
                scheduling.
            </p>
        </div>
    </div>
    <!-- end col -->
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="text-center">
            <img src="/images/app-calendar/help-6.png" alt="help-6" class="img-fluid avatar-md mb-3" />
            <h4 class="fw-semibold">Integration</h4>
            <p class="px-2 px-xl-5">
                Connect the tools in your workflow directly
                to Calendly, or learn about what we’ve built
                to streamline your scheduling.
            </p>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row mb-5">
    <div class="col-12 text-center">
        <h4>Can't find a questions?</h4>
        <button type="button" class="btn btn-success btn-sm mt-2">
            <i class="bx bx-envelope me-1"></i> Email us
            your question
        </button>
        <button type="button" class="btn btn-info btn-sm mt-2 ms-1">
            <i class="bx bxl-twitter me-1"></i> Send us a
            tweet
        </button>
    </div>
</div>

@endsection