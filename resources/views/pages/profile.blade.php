@extends('layouts.vertical', ['title' => 'Profile', 'subTitle' => 'Pages'])

@section('content')

<div class="row">
    <div class="col-xxl-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="position-relative">
                        <img src="/images/small/img-6.jpg" alt="" class="card-img rounded-bottom-0" height="200" />
                        <img src="/images/users/avatar-1.jpg" alt="" class="avatar-lg rounded-circle position-absolute top-100 start-0 translate-middle-y ms-3 border border-light border-3" />
                    </div>
                    <div class="card-body mt-4">
                        <div class="">
                            <div class="d-flex align-items-center">
                                <div class="d-block">
                                    <h4 class="mb-1">
                                        Jeannette C. Mullin
                                    </h4>
                                    <p class="fs-14 mb-0">
                                        Front End Developer
                                    </p>
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded fs-18 text-dark"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="bx bx-edit-alt me-2"></i>Edit
                                                Profile
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="bx bx-export me-2"></i>Export
                                                Profile
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="bx bxs-hand-up me-2"></i>Action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h5 class="card-title badge bg-light text-secondary py-1 px-2 fs-13 mb-3 border-start border-secondary border-2 rounded-1">
                                        About Me
                                    </h5>
                                    <p class="fs-15 mb-0 text-muted">
                                        Hi I'm Jeannette
                                        Mullin. I am user
                                        experience and user
                                        interface designer.
                                        I have been working
                                        on Full Stack
                                        Developer since last
                                        10 years.
                                    </p>
                                    <div class="mt-3">
                                        <div class="d-flex gap-2 flex-wrap">
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">Code</span>
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">
                                                UX
                                                Researcher</span>
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">Python</span>
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">HTML</span>
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">
                                                JavaScript</span>
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">WordPress</span>
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">
                                                App
                                                Development</span>
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">
                                                SQL</span>
                                            <span class="badge text-secondary py-1 px-2 fs-12 border rounded-1">
                                                MongoDB</span>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="text-dark fw-medium">
                                            Links :
                                        </h5>
                                        <a href="#!" class="text-primary text-decoration-underline">https://myworkbench-portfolio.com</a>
                                        <p class="mb-0 mt-1">
                                            <a href="#!" class="text-primary text-decoration-underline">https://scaly-paddock.biz//a.portfolio
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- about -->
                    </div>
                    <!-- end card body-->
                    <div class="card-footer bg-light-subtle">
                        <div class="row g-2 mb-1">
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-primary d-flex align-items-center justify-content-center gap-1 w-100">
                                    <iconify-icon icon="iconamoon:profile-duotone"></iconify-icon>
                                    Follow
                                </button>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-success d-flex align-items-center justify-content-center gap-1 w-100">
                                    <iconify-icon icon="iconamoon:comment-dots-duotone"></iconify-icon>Message
                                </button>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-danger d-flex align-items-center justify-content-center gap-1 w-100">
                                    <iconify-icon icon="iconamoon:share-1-duotone"></iconify-icon>
                                    Share
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- skill -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Skill</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p class="fs-15 mb-1 float-end">
                                    82%
                                </p>
                                <p class="fs-15 mb-1">
                                    MongoDB
                                </p>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <p class="fs-15 mb-1 float-end">
                                    55%
                                </p>
                                <p class="fs-15 mb-1">
                                    WordPress
                                </p>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <p class="fs-15 mb-1 float-end">
                                    68%
                                </p>
                                <p class="fs-15 mb-1">
                                    UX Researcher
                                </p>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <p class="fs-15 mb-1 float-end">
                                    37%
                                </p>
                                <p class="fs-15 mb-1">
                                    SQL
                                </p>
                                <div class="progress progress-sm mb-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="card-title">
                            Activities
                        </h5>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="text-primary">Export
                                <i class="bx bx-export ms-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <p class="mb-0 mt-2 pe-3 me-2">
                                12:15
                            </p>
                            <div class="position-relative ps-4">
                                <span class="position-absolute start-0 top-0 border border-dashed h-100"></span>
                                <div class="mb-4">
                                    <span class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-14">UI</span>
                                    <div class="d-flex gap-2">
                                        <div class="ms-2">
                                            <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">
                                                Completed UX
                                                design
                                                project for
                                                our client
                                            </h5>
                                            <span class="badge badge-soft-danger mt-1">Important</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <p class="mb-0 mt-2 pe-3 me-2">
                                11:00
                            </p>
                            <div class="position-relative ps-4">
                                <span class="position-absolute start-0 top-0 border border-dashed h-100"></span>
                                <div class="mb-4">
                                    <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="/images/users/avatar-2.jpg" alt="avatar-5" class="avatar-sm rounded-circle" /></span>
                                    <div class="d-flex gap-2">
                                        <div class="ms-2">
                                            <h5 class="mb-2 text-dark fw-semibold fs-15 lh-base">
                                                Yes! We are
                                                celebrating
                                                our first
                                                admin
                                                release.
                                            </h5>
                                            <a href="#!">
                                                <span class="badge bg-light bg-opacity-50 border text-dark fw-semibold"><i class="bx bx-images text-primary me-2"></i>IMG_201</span>
                                                <span class="badge bg-light bg-opacity-50 border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_202</span>
                                                <span class="badge bg-light bg-opacity-50 border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_203</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <p class="mb-0 mt-2 pe-3 me-2">
                                10:30
                            </p>
                            <div class="position-relative ps-4">
                                <span class="position-absolute start-0 top-0 border border-dashed h-100"></span>
                                <div class="mb-3">
                                    <span class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:check-circle-1-duotone"></iconify-icon></span>
                                    <div class="d-flex gap-2">
                                        <div class="ms-2">
                                            <h5 class="mb-2 text-dark fw-semibold fs-15 lh-base">
                                                We have
                                                archieved
                                                25k sales in
                                                our themes
                                            </h5>
                                            <div class="d-flex gap-2">
                                                <ul class="d-flex text-warning list-unstyled gap-1">
                                                    <li>
                                                        <iconify-icon icon="iconamoon:star-fill"></iconify-icon>
                                                    </li>
                                                    <li>
                                                        <iconify-icon icon="iconamoon:star-fill"></iconify-icon>
                                                    </li>
                                                    <li>
                                                        <iconify-icon icon="iconamoon:star-fill"></iconify-icon>
                                                    </li>
                                                    <li>
                                                        <iconify-icon icon="iconamoon:star-fill"></iconify-icon>
                                                    </li>
                                                    <li>
                                                        <iconify-icon icon="iconamoon:star-fill"></iconify-icon>
                                                    </li>
                                                </ul>
                                                <h5 class="text-muted fs-14">
                                                    4.5/5
                                                    Rating
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <p class="mb-0 mt-2 pe-3 me-2">
                                09:00
                            </p>
                            <div class="position-relative ps-4">
                                <span class="position-absolute start-0 top-0 border border-dashed h-50"></span>
                                <div class="mb-2">
                                    <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="/images/users/avatar-7.jpg" alt="avatar-5" class="avatar-sm rounded-circle" /></span>
                                    <div class="d-flex gap-2">
                                        <div class="ms-2">
                                            <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">
                                                Join new
                                                team member
                                                Alex Smith
                                            </h5>
                                            <span class="badge bg-light bg-opacity-50 text-dark py-1 px-2 mt-1">Designer</span>
                                            <span class="badge bg-light bg-opacity-50 text-dark py-1 px-2 mt-1">Developer</span>
                                            <span class="badge bg-light bg-opacity-50 text-dark py-1 px-2 mt-1">Ui/Ux</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end col -->

    <div class="col-xxl-8">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Personal Info
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item border-0 border-bottom px-0 pt-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="me-2 fw-medium mb-0">
                                        Name :
                                    </h5>
                                    <span class="fs-14 text-muted">Jeannette C.
                                        Mullin</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="me-2 fw-medium mb-0">
                                        Email :
                                    </h5>
                                    <span class="fs-14 text-muted">jeannette@rhyta.com</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="me-2 mb-0 fw-medium">
                                        Phone :
                                    </h5>
                                    <span class="fs-14 text-muted">+909
                                        707-302-2110</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="me-2 mb-0 fw-medium">
                                        Designation :
                                    </h5>
                                    <span class="fs-14 text-muted">Full Stack
                                        Developer</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="me-2 mb-0 fw-medium">
                                        Age :
                                    </h5>
                                    <span class="fs-14 text-muted">31 Year</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="me-2 mb-0 fw-medium">
                                        Links :
                                    </h5>
                                    <span class="fs-14"><a href="#!" class="text-primary">https://myworkbench-portfolio.com</a></span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="me-2 mb-0 fw-medium">
                                        Experience :
                                    </h5>
                                    <span class="fs-14 text-muted">10 Years</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0 pb-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="me-2 mb-0 fw-medium">
                                        Language :
                                    </h5>
                                    <span class="fs-14 text-muted">English , Spanish ,
                                        German ,
                                        Japanese</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">
                            Followers
                        </h5>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="text-primary">View All
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item border-0 border-bottom px-0 pt-0">
                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <img src="/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-sm" />
                                    <div class="d-block">
                                        <h5 class="mb-1">
                                            Hilda B. Brid
                                        </h5>
                                        <h6 class="mb-0 text-muted">
                                            hildabbridges@teleworm.us
                                        </h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#!" class="btn btn-soft-secondary btn-sm">Follow</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <img src="/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-sm" />
                                    <div class="d-block">
                                        <h5 class="mb-1">
                                            Kevin M. Bacon
                                        </h5>
                                        <h6 class="mb-0 text-muted">
                                            kevinmbacon@dayrep.com
                                        </h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#!" class="btn btn-soft-secondary btn-sm">Follow</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <img src="/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-sm" />
                                    <div class="d-block">
                                        <h5 class="mb-1">
                                            Sherrie W.
                                            Torres
                                        </h5>
                                        <h6 class="mb-0 text-muted">
                                            sherriewtorres@dayrep.com
                                        </h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#!" class="btn btn-soft-secondary btn-sm">Follow</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <img src="/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm" />
                                    <div class="d-block">
                                        <h5 class="mb-1">
                                            David R. Willi
                                        </h5>
                                        <h6 class="mb-0 text-muted">
                                            davidrwill@teleworm.us
                                        </h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#!" class="btn btn-soft-secondary btn-sm">Follow</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 border-bottom px-0">
                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <img src="/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-sm" />
                                    <div class="d-block">
                                        <h5 class="mb-1">
                                            Daryl V. Donn
                                        </h5>
                                        <h6 class="mb-0 text-muted">
                                            darylvdonnellan@teleworm.us
                                        </h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#!" class="btn btn-soft-secondary btn-sm">Follow</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0 pb-0">
                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <img src="/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm" />
                                    <div class="d-block">
                                        <h5 class="mb-1">
                                            Risa H. Cuevas
                                        </h5>
                                        <h6 class="mb-0 text-muted">
                                            risahcuevas@jourrapide.com
                                        </h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#!" class="btn btn-soft-secondary btn-sm">Follow</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="card-title">Projects</h5>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded fs-18 text-dark"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-edit-alt me-2"></i>Edit Report
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-export me-2"></i>Export Report
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bxs-hand-up me-2"></i>Action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body p-lg-3 p-2">
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-light rounded-circle">
                                                    <iconify-icon icon="iconamoon:pen-duotone" class="text-primary fs-28"></iconify-icon>
                                                </span>
                                            </div>
                                            <a href="#!" class="fw-medium text-dark">UI/UX Figma
                                                Design</a>
                                            <div class="ms-auto">
                                                <a href="#!" class="fw-medium text-muted fs-18" data-bs-toggle="tooltip" data-bs-title="Download" data-bs-placement="bottom"><iconify-icon icon="iconamoon:cloud-download-duotone"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <h5 class="card-title badge text-secondary d-flex gap-1 align-items-center py-1 px-2 fs-13 mb-3 border rounded-1">
                                                <iconify-icon icon="iconamoon:clock-duotone"></iconify-icon>
                                                10 day left
                                            </h5>
                                            <h5 class="card-title badge text-secondary d-flex gap-1 align-items-center py-1 px-2 fs-13 mb-3 border rounded-1">
                                                <iconify-icon icon="iconamoon:file-duotone"></iconify-icon>
                                                13 Files
                                            </h5>
                                        </div>
                                        <div>
                                            <p class="fs-15 mb-1 float-end">
                                                8/12
                                            </p>
                                            <p class="fs-15 mb-1">
                                                59%
                                            </p>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" style="
                                                                            width: 59%;
                                                                        " aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-group">
                                                <div class="avatar-group-item">
                                                    <img src="/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm" />
                                                </div>
                                                <div class="avatar-group-item">
                                                    <img src="/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm" />
                                                </div>
                                                <div class="avatar-group-item">
                                                    <img src="/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-sm" />
                                                </div>
                                                <div class="avatar-group-item">
                                                    <img src="/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-sm" />
                                                </div>
                                            </div>
                                            <h5 class="mb-0">
                                                20+ Team
                                                Work
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body p-lg-3 p-2">
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-light rounded-circle">
                                                    <iconify-icon icon="iconamoon:file-document-duotone" class="text-warning fs-28"></iconify-icon>
                                                </span>
                                            </div>
                                            <a href="#!" class="fw-medium text-dark">Multipurpose
                                                Template</a>
                                            <div class="ms-auto">
                                                <a href="#!" class="fw-medium text-muted fs-18" data-bs-toggle="tooltip" data-bs-title="Download" data-bs-placement="bottom"><iconify-icon icon="iconamoon:cloud-download-duotone"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <h5 class="card-title badge text-secondary d-flex gap-1 align-items-center py-1 px-2 fs-13 mb-3 border rounded-1">
                                                <iconify-icon icon="iconamoon:clock-duotone"></iconify-icon>
                                                15 day left
                                            </h5>
                                            <h5 class="card-title badge text-secondary d-flex gap-1 align-items-center py-1 px-2 fs-13 mb-3 border rounded-1">
                                                <iconify-icon icon="iconamoon:file-duotone"></iconify-icon>
                                                8 Files
                                            </h5>
                                        </div>

                                        <div>
                                            <p class="fs-15 mb-1 float-end">
                                                15/20
                                            </p>
                                            <p class="fs-15 mb-1">
                                                78%
                                            </p>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" style="
                                                                            width: 78%;
                                                                        " aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-group">
                                                <div class="avatar-group-item">
                                                    <img src="/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm" />
                                                </div>
                                                <div class="avatar-group-item">
                                                    <img src="/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-sm" />
                                                </div>
                                                <div class="avatar-group-item">
                                                    <img src="/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-sm" />
                                                </div>
                                                <div class="avatar-group-item">
                                                    <img src="/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-sm" />
                                                </div>
                                            </div>
                                            <h5 class="mb-0">
                                                12+ Team
                                                Work
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <!-- <div class="row">
                                   <div class="col-lg-12">
                                        <div class="card">
                                             <div class="card-header d-flex align-items-center border-bottom border-dashed">
                                                  <h4 class="text-dark mb-0">Trading</h4>
                                                  <div class="ms-auto">
                                                       <span class="text-muted">
                                                            <a href="#!" class="link-reset fs-3"><iconify-icon icon="solar:info-circle-bold"></iconify-icon></a>
                                                       </span>
                                                  </div>
                                             </div>
                                             <div class="card-body">
                                                  <div class="row align-items-center g-2">
                                                       <div class="col-lg-4">
                                                            <h5 class="text-muted">Total Trades</h5>
                                                            <h4 class="text-dark mb-0">223</h4>
                                                       </div>
                                                       <div class="col-lg-4">

                                                            <h5 class="text-muted">Profitable</h5>
                                                            <h4 class="text-dark mb-0">85.67%</h4>
                                                       </div>
                                                       <div class="col-lg-4">
                                                            <h5 class="text-muted mb-1"><span class="text-success"><i class="ti ti-arrow-up"></i>2.34%</span> Avg. Profit</h5>
                                                            <h5 class="text-muted mb-0"><span class="text-danger"><i class="ti ti-arrow-down"></i>1.65%</span> Avg. Loss</h5>
                                                       </div>
                                                  </div>
                                                  <div class="progress mt-3">
                                                       <div class="progress-bar border-end border-2" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                       <div class="progress-bar bg-success border-end border-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                       </div>
                                                       <div class="progress-bar bg-danger border-end border-2" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                       </div>
                                                       <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                  </div>
                                                  <div class="row mt-3 g-2">
                                                       <div class="col-lg-3">
                                                            <div class="d-flex justify-content-center border border-dashed bg-body p-2 rounded-3 gap-2">
                                                                 <i class="ti ti-circle-filled text-primary pt-1"></i>
                                                                 <div class="d-block">
                                                                      <h5 class="mb-1 text-muted">Currencies</h5>
                                                                      <h4 class="text-dark mb-0">28.84%</h4>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-3">
                                                            <div class="d-flex justify-content-center border border-dashed bg-body p-2 rounded-3 gap-2">
                                                                 <i class="ti ti-circle-filled text-success pt-1"></i>
                                                                 <div class="d-block">
                                                                      <h5 class="mb-1 text-muted">Commodities</h5>
                                                                      <h4 class="text-dark mb-0">11.34%</h4>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-3">
                                                            <div class="d-flex justify-content-center border border-dashed bg-body p-2 rounded-3 gap-2">
                                                                 <i class="ti ti-circle-filled text-danger pt-1"></i>
                                                                 <div class="d-block">
                                                                      <h5 class="mb-1 text-muted">Indices</h5>
                                                                      <h4 class="text-dark mb-0">47.65%</h4>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-3">
                                                            <div class="d-flex justify-content-center border border-dashed bg-body p-2 rounded-3 gap-2">
                                                                 <i class="ti ti-circle-filled text-warning pt-1"></i>
                                                                 <div class="d-block">
                                                                      <h5 class="mb-1 text-muted">Stocks</h5>
                                                                      <h4 class="text-dark mb-0">20.18%</h4>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div> -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="card-title">Messages</h5>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="text-primary">Export
                                <i class="bx bx-export ms-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="pb-3 border-bottom">
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <img src="/images/users/avatar-2.jpg" alt="avatar-2" class="avatar-md rounded-circle" />
                                    <div class="d-block">
                                        <h5 class="fs-15 mt-0 mb-1">
                                            Kelly Winsler
                                        </h5>
                                        <p class="text-muted fs-13 text-break mb-0">
                                            Hello! I just
                                            got your
                                            assignment,
                                            everything's
                                            alright,
                                            excellent of
                                            you!
                                        </p>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <p class="text-muted mb-0">
                                            4.24 PM
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 border-bottom">
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <img src="/images/users/avatar-3.jpg" alt="avatar-2" class="avatar-md rounded-circle" />
                                    <div class="d-block">
                                        <h5 class="fs-15 mt-0 mb-1">
                                            Mary R. Olson
                                        </h5>
                                        <p class="text-muted fs-13 text-break mb-0">
                                            Hey! Okay, thank
                                            you for letting
                                            me know. See
                                            you!
                                        </p>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <p class="text-muted mb-0">
                                            3.21 PM
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 border-bottom">
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <img src="/images/users/avatar-4.jpg" alt="avatar-2" class="avatar-md rounded-circle" />
                                    <div class="d-block">
                                        <h5 class="fs-15 mt-0 mb-1">
                                            Andre J.
                                            Stricker
                                        </h5>
                                        <p class="text-muted fs-13 text-break mb-0">
                                            Hello! I just
                                            got your
                                            assignment,
                                            everything's
                                            alright, exce
                                        </p>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <p class="text-muted mb-0">
                                            5.12 AM
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 border-bottom">
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <img src="/images/users/avatar-5.jpg" alt="avatar-2" class="avatar-md rounded-circle" />
                                    <div class="d-block">
                                        <h5 class="fs-15 mt-0 mb-1">
                                            Amy R. Whitaker
                                        </h5>
                                        <p class="text-muted fs-13 text-break mb-0">
                                            Hello! You asked
                                            me for some
                                            extra excercises
                                            to train CO.
                                            Here you are,
                                            like I
                                            promissed.
                                        </p>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <p class="text-muted mb-0">
                                            12.03 AM
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 border-bottom">
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <img src="/images/users/avatar-6.jpg" alt="avatar-2" class="avatar-md rounded-circle" />
                                    <div class="d-block">
                                        <h5 class="fs-15 mt-0 mb-1">
                                            Alice R. Owens
                                        </h5>
                                        <p class="text-muted fs-13 text-break mb-0">
                                            Hey! Okay, thank
                                            you for letting
                                            me know. See
                                            you!
                                        </p>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <p class="text-muted mb-0">
                                            1.23 PM
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3">
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <img src="/images/users/avatar-7.jpg" alt="avatar-2" class="avatar-md rounded-circle" />
                                    <div class="d-block">
                                        <h5 class="fs-15 mt-0 mb-1">
                                            Marcel M. McCall
                                        </h5>
                                        <p class="text-muted fs-13 text-break mb-0">
                                            Hey! Okay, thank
                                            you for letting
                                            me know. See
                                            you!
                                        </p>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <p class="text-muted mb-0">
                                            8.32 AM
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end col -->
</div>

@endsection