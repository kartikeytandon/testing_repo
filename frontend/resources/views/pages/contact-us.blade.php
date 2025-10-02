@extends('layouts.vertical', ['title' => 'Contact Us', 'subTitle' => 'Pages'])

@section('content')

<div class="row justify-content-center text-center mt-4">
    <div class="col-lg-6">
        <h3 class="fw-semibold">
            Contact Us with Our Team
        </h3>
        <p>
            Got any questions about the product or scaling
            on our platform? We're here to help. Chat to our
            friendly team 24/7 and get onboard in less than
            5 minutes.
        </p>
    </div>
</div>

<div class="row justify-content-center mt-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card mb-0 shadow-none border-0">
                            <div class="card-header bg-light-subtle border-0">
                                <h4 class="mb-0">
                                    Ask your different
                                    questions
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('any', 'home')}}" class="authentication-form">
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <label class="form-label" for="example-name">First
                                                Name</label>
                                            <input type="name" id="example-name" name="example-name" class="form-control" placeholder="First name" required />
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label" for="last-name">Last
                                                Name</label>
                                            <input type="name" id="last-name" name="last-name" class="form-control" placeholder="Last name" required />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="example-email">Email</label>
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Enter your email" required />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="contactnumber">Contact
                                            Number</label>
                                        <div class="dropdown form-group input-group">
                                            <button class="btn btn-light dropdown-toggle rounded-end-0 border" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                U.S.A
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        U.S.A
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        India
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        Iraq
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        South
                                                        Africa
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        France
                                                    </a>
                                                </li>
                                            </ul>
                                            <input type="number" class="form-control" id="contactnumber" placeholder="+0(222)000-0000" required />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlTextarea1">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Max 150 words"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="my-3">
                                            Services
                                        </h5>
                                        <div class="row">
                                            <div class="col-xxl-6">
                                                <div class="mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                                                    <label class="form-check-label ms-1" for="defaultCheck1">
                                                        Website
                                                        Design
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" />
                                                    <label class="form-check-label ms-1" for="defaultCheck2">
                                                        UX
                                                        Design
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" />
                                                    <label class="form-check-label ms-1" for="defaultCheck3">
                                                        User
                                                        Research
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" />
                                                    <label class="form-check-label ms-1" for="defaultCheck4">
                                                        Content
                                                        Creation
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5" />
                                                    <label class="form-check-label ms-1" for="defaultCheck5">
                                                        Strategy
                                                        &
                                                        Consulting
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck6" />
                                                    <label class="form-check-label ms-1" for="defaultCheck6">
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-6">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://strandsgame.net/">Strands</a>
                            </div>
                        </div>
                        <div class="my-4">
                            <h4 class="fw-medium">
                                Do you need quick help with
                                some general inquiries ?
                            </h4>
                            <p>
                                You can use any of the
                                support systems below if
                                your query is urgent, We
                                will be happy to be of help.
                            </p>
                            <div class="row g-4">
                                <div class="col-xl-6">
                                    <div class="d-flex p-1">
                                        <div class="avatar-md">
                                            <span class="avatar-title bg-light text-dark fs-24 rounded-circle">
                                                <iconify-icon icon="iconamoon:location-pin-duotone"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="d-block align-self-center text-truncate ms-2">
                                            <h5 class="fw-medium fs-14 text-uppercase">
                                                Office
                                                Address
                                            </h5>
                                            <span>660
                                                Courtright
                                                Bismarck,
                                                ND</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex p-1">
                                        <div class="avatar-md">
                                            <span class="avatar-title bg-light text-dark fs-24 rounded-circle">
                                                <iconify-icon icon="iconamoon:phone-duotone"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="d-block align-self-center text-truncate ms-2">
                                            <h5 class="fw-medium fs-14 text-uppercase">
                                                Telephone
                                                number
                                            </h5>
                                            <span>1-888-452-1505</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex p-1">
                                        <div class="avatar-md">
                                            <span class="avatar-title bg-light text-dark fs-24 rounded-circle">
                                                <iconify-icon icon="iconamoon:email-duotone"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="d-block align-self-center text-truncate ms-2">
                                            <h5 class="fw-medium fs-14 text-uppercase">
                                                Email
                                                Address
                                            </h5>
                                            <span>rachelmtrojano@armyspy.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex p-1">
                                        <div class="avatar-md">
                                            <span class="avatar-title bg-light text-dark fs-24 rounded-circle">
                                                <iconify-icon icon="iconamoon:link-external-duotone"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="d-block align-self-center text-truncate ms-2">
                                            <h5 class="fw-medium fs-14 text-uppercase">
                                                Social
                                                Contact
                                            </h5>
                                            <div class="d-flex justify-content-center gap-3">
                                                <a href="#!" class="btn fs-20 d-inline-flex align-items-center justify-content-center text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="primary-tooltip" aria-label="Facebook" data-bs-original-title="Facebook"><i class="bx bxl-facebook"></i></a>
                                                <a href="#!" class="btn fs-20 d-inline-flex align-items-center justify-content-center text-danger p-0" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="danger-tooltip" aria-label="Instagram" data-bs-original-title="Instagram"><i class="bx bxl-instagram-alt"></i></a>
                                                <a href="#!" class="btn fs-20 d-inline-flex align-items-center justify-content-center text-info p-0" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="info-tooltip" aria-label="Twitter" data-bs-original-title="Twitter"><i class="bx bxl-twitter"></i></a>
                                                <a href="#!" class="btn fs-20 d-inline-flex align-items-center justify-content-center text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="primary-tooltip" aria-label="Linkedin" data-bs-original-title="Linkedin"><i class="bx bxl-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
