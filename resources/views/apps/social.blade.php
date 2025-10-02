@extends('layouts.vertical', ['title' => 'Social', 'subTitle' => 'Apps'])

@section('content')

<div class="row justify-content-center">
    <div class="col-xxl-3">
        <div class="sticky-bar">
            <div class="offcanvas-xxl offcanvas-start" tabindex="-1" id="accountInfoffcanvas" aria-labelledby="accountInfoffcanvasLabel">
                <div class="card h-100" data-simplebar>
                    <div class="card-body pb-2">
                        <div class="d-flex flex-column text-center justify-content-center mb-3">
                            <div class="mx-auto border border-2 border-primary rounded-circle">
                                <img class="avatar-md rounded-circle border border-2 border-transparent" src="/images/users/avatar-1.jpg" alt="Generic placeholder" />
                            </div>
                            <h5 class="mt-2 mb-1">
                                Gatson Keller
                            </h5>
                            <p class="text-muted">
                                California, USA
                            </p>
                            <p class="text-muted fst-italic">
                                Hi I'm Cynthia Price,has
                                been the industry's standard
                                dummy text To an English
                                person.
                            </p>
                        </div>

                        <div class="hstack gap-3 text-center justify-content-evenly">
                            <!-- User stat item -->
                            <div>
                                <h5 class="mb-0">389</h5>
                                <small>Post</small>
                            </div>
                            <div>
                                <h5 class="mb-0">5K</h5>
                                <small>Followers</small>
                            </div>
                            <div>
                                <h5 class="mb-0">210</h5>
                                <small>Following</small>
                            </div>
                        </div>

                        <div class="nav flex-column mt-3" id="social-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link px-0 fs-14 fw-medium active show" id="social-feed-tab" data-bs-toggle="pill" href="#social-feed" role="tab" aria-controls="social-feed" aria-selected="true">
                                <i class="align-middle bx bx-rss fs-15 me-1"></i>
                                Feed
                            </a>

                            <a class="nav-link px-0 fs-14 fw-medium" id="social-friends-tab" data-bs-toggle="pill" href="#social-friends" role="tab" aria-controls="social-friends" aria-selected="false" tabindex="-1">
                                <i class="align-middle bx bx-user-circle fs-15 me-1"></i>
                                Friends
                            </a>

                            <a class="nav-link px-0 fs-14 fw-medium" id="social-events-tab" data-bs-toggle="pill" href="#social-events" role="tab" aria-controls="social-events" aria-selected="false" tabindex="-1">
                                <i class="align-middle bx bx-calendar-heart fs-15 me-1"></i>
                                Events
                            </a>

                            <a class="nav-link px-0 fs-14 fw-medium" id="social-groups-tab" data-bs-toggle="pill" href="#social-groups" role="tab" aria-controls="social-groups" aria-selected="false" tabindex="-1">
                                <i class="align-middle bx bx-group fs-15 me-1"></i>
                                Groups
                            </a>

                            <a class="nav-link px-0 fs-14 fw-medium" id="social-saved-tab" data-bs-toggle="pill" href="#social-saved" role="tab" aria-controls="social-saved" aria-selected="false" tabindex="-1">
                                <i class="align-middle bx bx-save fs-15 me-1"></i>
                                Saved
                            </a>

                            <a class="nav-link px-0 fs-14 fw-medium" id="social-memories-tab" data-bs-toggle="pill" href="#social-memories" role="tab" aria-controls="social-memories" aria-selected="true">
                                <i class="align-middle bx bx-history fs-15 me-1"></i>
                                Memories
                            </a>
                        </div>
                    </div>
                    <div class="border-top">
                        <h6 class="text-uppercase px-3 py-2 mb-0">
                            Events
                        </h6>
                        <div class="list-group list-group-flush">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class="bx bx-cake align-middle me-1"></i>
                                Aarya's birthday today</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class="bx bx-heart align-middle me-1"></i>
                                Penda's wedding tomorrow</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class="bx bx-bookmark align-middle me-1"></i>
                                Meeting with Big B</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xxl-6">
        <div class="card d-xxl-none d-flex">
            <div class="d-flex gap-2 align-items-center p-2">
                <button class="btn btn-light px-2 d-inline-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#accountInfoffcanvas" aria-controls="accountInfoffcanvas">
                    <i class="bx bx-menu fs-18"></i>
                </button>

                <h5 class="me-auto mb-0">Gatson Keller</h5>

                <button class="btn btn-light px-2 d-inline-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#friendListffcanvas" aria-controls="friendListffcanvas">
                    <i class="bx bx-menu fs-18"></i>
                </button>
            </div>
        </div>

        <div class="tab-content pt-0">
            <div class="tab-pane fade active show" id="social-feed" role="tabpanel" aria-labelledby="social-feed-tab">
                <!-- create post -->
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-slider-alt fs-18"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-header text-center fs-14">Post Filters</a>
                                <div class="dropdown-divider mt-0"></div>
                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="bx bx-bookmark fs-18 align-middle me-2"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">
                                            Save Link
                                        </p>
                                        <small class="text-muted">Add this to
                                            your saved
                                            item</small>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="bx bx-bell-off fs-18 align-middle me-2"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">
                                            Notification
                                        </p>
                                        <small class="text-muted">Turn off
                                            notification for
                                            this post</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <h5 class="card-title mb-3">
                            Create Post
                        </h5>

                        <div class="d-md-flex mb-2">
                            <div class="dropdown me-1">
                                <a class="btn btn-outline-light text-dark dropdown-toggle" href="javascript:void(0);" role="button" id="postDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Who can see your post ?
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="postDropdown">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-globe-alt me-1"></i>Public</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Friends</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-user-check me-1"></i>Friends
                                            Except..</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown mt-1 mt-md-0">
                                <a class="btn btn-outline-light text-dark dropdown-toggle" href="javascript:void(0);" role="button" id="albumDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-plus me-1"></i>
                                    Album
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="albumDropdown">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-images me-1"></i>Untitled
                                            Album</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-images me-1"></i>My Dream</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-images me-1"></i>Tours Story</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="description" rows="3" placeholder="What's on your mind?"></textarea>
                        </div>
                        <div class="d-flex gap-1">
                            <a href="javascript:void(0);" class="btn btn-outline-light text-dark btn-sm fs-16" data-bs-toggle="tooltip" data-bs-placement="top" title="Photo / Video">
                                <i class="bx bx-images"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-outline-light text-dark btn-sm fs-16" data-bs-toggle="tooltip" data-bs-placement="top" title="Tag People">
                                <i class="bx bxs-user-plus"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-outline-light text-dark btn-sm fs-16" data-bs-toggle="tooltip" data-bs-placement="top" title="Feeling / Activity">
                                <i class="bx bxs-smile"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-outline-light text-dark btn-sm fs-16" data-bs-toggle="tooltip" data-bs-placement="top" title="Check In">
                                <i class="bx bxs-location-plus"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-outline-light text-dark btn-sm fs-16" data-bs-toggle="tooltip" data-bs-placement="top" title="Camera">
                                <i class="bx bxs-camera"></i>
                            </a>
                            <button type="button" class="btn btn-primary ms-auto">
                                Publish
                            </button>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <!-- Story Box-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-3.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="m-0">
                                    <a href="{{ route('second', ['pages', 'profile'])}}" class="text-reset">Jeremy Tomlinson</a>
                                </h5>
                                <p class="text-muted mb-0">
                                    <small>about 2 minuts
                                        ago</small>
                                </p>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-22" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-bookmark align-middle pe-1"></i>Save post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user-x align-middle pe-1"></i>Unfollow
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-x-circle align-middle pe-1"></i>Hide post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-block align-middle pe-1"></i>Block</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-flag align-middle fa-fw pe-1"></i>Report post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Story based around the idea of
                            time lapse, animation to post
                            soon!
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <img src="/images/app-social/post-1.jpg" class="img-fluid rounded" alt="post-1" />
                            </div>
                            <!-- end col -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 mt-3 mt-md-0">
                                            <img src="/images/app-social/post-2.jpg" class="img-fluid rounded" alt="post-2" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/images/app-social/post-4.jpg" class="img-fluid rounded" alt="post-4" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <div class="position-relative overflow-hidden rounded">
                                            <a href="javascript:void(0);">
                                                <img src="/images/app-social/post-3.jpg" class="img-fluid rounded" alt="post-3" />
                                                <div class="bg-overlay bg-dark"></div>
                                                <h3 class="position-absolute top-50 start-50 translate-middle my-0 text-white">
                                                    +7
                                                </h3>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center my-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1.5k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                521 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>

                        <div class="d-flex align-items-start">
                            <img src="/images/users/avatar-1.jpg" height="32" class="align-self-start rounded me-2" alt="Arya Stark" />
                            <div class="w-100">
                                <input type="text" class="form-control bg-light border-0 form-control-sm" placeholder="Write a comment" />
                            </div>
                            <!-- end medi-body -->
                        </div>
                    </div>
                </div>

                <!-- Story Box-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-4.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="m-0">
                                    <a href="{{ route('second', ['pages', 'profile'])}}" class="text-reset">Thelma Fridley</a>
                                </h5>
                                <p class="text-muted mb-0">
                                    <small>about 1 hour
                                        ago</small>
                                </p>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-22" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-bookmark align-middle pe-1"></i>Save post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user-x align-middle pe-1"></i>Unfollow
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-x-circle align-middle pe-1"></i>Hide post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-block align-middle pe-1"></i>Block</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-flag align-middle fa-fw pe-1"></i>Report post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="fs-16 text-center fst-italic text-dark">
                            🌟✨ Just spent the most amazing
                            weekend camping in the
                            wilderness! 🏕️🌲 Nothing beats
                            disconnecting from the hustle
                            and bustle of city life and
                            reconnecting with nature.
                        </div>

                        <div class="d-flex align-items-center my-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1.5k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                521 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>

                        <div class="post-user-comment-box mt-2">
                            <div class="d-flex align-items-start">
                                <img class="me-2 avatar-sm rounded-circle" src="/images/users/avatar-3.jpg" alt="Generic placeholder image" />
                                <div class="w-100">
                                    <div class="w-100 bg-light p-2 rounded">
                                        <h5 class="mt-0">
                                            <a href="{{ route('second', ['pages', 'profile'])}}" class="text-reset">Jeremy
                                                Tomlinson</a>
                                            <small class="text-muted">3 hours
                                                ago</small>
                                        </h5>
                                        Nice work, makes me
                                        think of The Money
                                        Pit.
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="javascript: void(0);" class="text-muted fs-13 d-inline-block mt-2"><i class="bx bxs-heart align-middle"></i>
                                            Like(2)</a>
                                        <a href="javascript: void(0);" class="text-muted fs-13 d-inline-block mt-2"><i class="bx bx-share align-middle"></i>
                                            Reply</a>
                                    </div>

                                    <div class="d-flex align-items-start mt-3">
                                        <a class="pe-2" href="#">
                                            <img src="/images/users/avatar-4.jpg" class="avatar-sm rounded-circle" alt="Generic placeholder image" />
                                        </a>
                                        <div class="w-100 bg-light p-2 rounded">
                                            <h5 class="mt-0">
                                                <a href="{{ route('second', ['pages', 'profile'])}}" class="text-reset">Kathleen
                                                    Thomas</a>
                                                <small class="text-muted">5 hours
                                                    ago</small>
                                            </h5>
                                            i'm in the
                                            middle of a
                                            timelapse
                                            animation
                                            myself! (Very
                                            different
                                            though.) Awesome
                                            stuff.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Story Box-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-6.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="m-0">
                                    <a href="{{ route('second', ['pages', 'profile'])}}" class="text-reset">Jonathan Tiner</a>
                                </h5>
                                <p class="text-muted mb-0">
                                    <small>about 11 hour
                                        ago</small>
                                </p>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-22" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-bookmark align-middle pe-1"></i>Save post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user-x align-middle pe-1"></i>Unfollow
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-x-circle align-middle pe-1"></i>Hide post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-block align-middle pe-1"></i>Block</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-flag align-middle fa-fw pe-1"></i>Report post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p>
                            The parallax is a little odd but
                            O.o that house build is
                            awesome!!
                        </p>

                        <div class="row">
                            <div class="col">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe src="https://player.vimeo.com/video/87993762" class="img-fluid border-0"></iframe>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-tv align-middle"></i>
                                3.5k Views</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                521 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                </div>

                <a href="#!" class="text-primary d-flex justify-content-center mx-auto mb-3">
                    <i class="bx bx-loader-circle spin-icon fs-22 align-middle me-1"></i>
                    Loading
                </a>
            </div>

            <div class="tab-pane fade" id="social-friends" role="tabpanel" aria-labelledby="social-friends-tab">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#all" data-bs-toggle="tab" aria-expanded="false" class="nav-link px-4 active">
                            <span>All Friends</span>
                        </a>
                    </li>
                    <!-- end nav item -->
                    <li class="nav-item">
                        <a href="#pending" data-bs-toggle="tab" aria-expanded="false" class="nav-link px-4">
                            <span>Pending Requests (2)</span>
                        </a>
                    </li>
                    <!-- end nav item -->
                </ul>
                <!-- end nav pills -->

                <div class="tab-content mt-3 pt-0 text-muted">
                    <div class="tab-pane show active" id="all">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-1.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-1" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Sharlene H.
                                                Smith</a>
                                        </h5>
                                        <p class="mb-0">
                                            114 mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-2.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-2" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Heriberto
                                                M.
                                                Ritchey</a>
                                        </h5>
                                        <p class="mb-0">
                                            256 mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-3.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-3" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Ruthie R.
                                                Harris</a>
                                        </h5>
                                        <p class="mb-0">
                                            93 mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-5.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-5" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Victoria P.
                                                Miller</a>
                                        </h5>
                                        <p class="mb-0">
                                            no mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-6.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-6" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Dallas C.
                                                Payne</a>
                                        </h5>
                                        <p class="mb-0">
                                            856 mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-7.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-7" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Florence A.
                                                Lopez</a>
                                        </h5>
                                        <p class="mb-0">
                                            52 mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-8.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-8" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Gail A.
                                                Nix</a>
                                        </h5>
                                        <p class="mb-0">
                                            12 mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-9.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-9" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Lynne J.
                                                Petty</a>
                                        </h5>
                                        <p class="mb-0">
                                            no mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end all friends tab pane-->
                    <div class="tab-pane" id="pending">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-11.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-11" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">Tonya J.
                                                Hill</a>
                                        </h5>
                                        <p class="mb-0">
                                            69 mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="/images/users/avatar-12.jpg" class="img-fluid avatar-md rounded me-2" alt="avatar-12" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="bx bxs-user-detail me-1"></i>See
                                                    Profile
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bxl-telegram me-1"></i>Message
                                                    to
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-user-x me-1"></i>Unfriend
                                                    Sharlene
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="bx bx-block me-1"></i>Block
                                                    Sharlene
                                                </a>
                                            </div>
                                        </div>
                                        <h5>
                                            <a href="#!" class="text-reset">James A.
                                                Briggs</a>
                                        </h5>
                                        <p class="mb-0">
                                            22 mutual
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- end col -->
            </div>

            <div class="tab-pane fade" id="social-events" role="tabpanel" aria-labelledby="social-events-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/app-social/group-2.jpg" alt="group-2" />
                            <div class="card-body">
                                <h6>
                                    Fri 22 - 26 oct, 2024
                                </h6>
                                <h5 class="card-title fs-16 lh-base mb-1">
                                    <a href="#!" class="text-reset">Musical Event : Des
                                        Moines</a>
                                </h5>
                                <p class="card-text text-muted">
                                    4436 Southern Avenue,
                                    Iowa-50309
                                </p>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 me-1"><i class="bx bxs-star me-1"></i>Interested</a>
                                    <a href="javascript:void(0);" class="btn btn-primary"><i class="bx bxl-telegram"></i></a>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/app-social/group-5.jpg" alt="group-5" />
                            <div class="card-body">
                                <h6>
                                    Fri 22 - 26 oct, 2024
                                </h6>
                                <h5 class="card-title fs-16 lh-base mb-1">
                                    <a href="#!" class="text-reset">Antisocial
                                        Darwinism :
                                        Evansville</a>
                                </h5>
                                <p class="card-text text-muted">
                                    1265 Lucy Lane,
                                    Indiana-47710
                                </p>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 me-1"><i class="bx bxs-star me-1"></i>Interested</a>
                                    <a href="javascript:void(0);" class="btn btn-primary"><i class="bx bxl-telegram"></i></a>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/app-social/group-6.jpg" alt="group-6" />
                            <div class="card-body">
                                <h6>
                                    Fri 22 - 26 oct, 2024
                                </h6>
                                <h5 class="card-title fs-16 lh-base mb-1">
                                    <a href="#!" class="text-reset">Balls of the Bull
                                        Festival : Dallas</a>
                                </h5>
                                <p class="card-text text-muted">
                                    1422 Liberty Street,
                                    Texas-75204
                                </p>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 me-1"><i class="bx bxs-star me-1"></i>Interested</a>
                                    <a href="javascript:void(0);" class="btn btn-primary"><i class="bx bxl-telegram"></i></a>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/app-social/group-7.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h6>
                                    Fri 22 - 26 oct, 2024
                                </h6>
                                <h5 class="card-title fs-16 lh-base mb-1">
                                    <a href="#!" class="text-reset">Belch Blanket
                                        Babylon : LA
                                        Follette</a>
                                </h5>
                                <p class="card-text text-muted">
                                    2542 Cedar Street,
                                    Tennessee-37766
                                </p>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 me-1"><i class="bx bxs-star me-1"></i>Interested</a>
                                    <a href="javascript:void(0);" class="btn btn-primary"><i class="bx bxl-telegram"></i></a>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="social-groups" role="tabpanel" aria-labelledby="social-groups-tab">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="px-3 mb-3">
                            <div class="dropdown float-end">
                                <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-cog fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-header fs-14 fw-medium">
                                        Notification Setting
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-notification me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="form-check form-switch mb-0 float-end">
                                                <input class="form-check-input" type="checkbox" role="switch" id="notification" checked />
                                            </div>
                                            <p class="mb-0">
                                                Show
                                                Notification
                                                Dots
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-header fs-14 fw-medium">
                                        Manage Groups
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-pin me-2 fs-18"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Pins
                                            </p>
                                            <small class="text-muted">Pins your
                                                favorite
                                                groups for
                                                quick
                                                access.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-user-plus me-2 fs-18"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Following
                                            </p>
                                            <small class="text-muted">Follow or
                                                unfollow
                                                groups to
                                                control what
                                                you see in
                                                Newsfeed</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <h5 class="card-title">
                                Groups
                            </h5>
                        </div>

                        <form class="chat-search px-3">
                            <div class="chat-search-box">
                                <input class="form-control" type="text" name="search" placeholder="Search ..." />
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </form>
                        <h5 class="px-3 mb-3">
                            Groups you have joined
                        </h5>
                        <div class="px-3 mb-2" data-simplebar style="max-height: 215px">
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="flex-shrink-0">
                                    <img src="/images/app-social/group-6.jpg" class="img-fluid avatar-md rounded-circle me-2" alt="group-6" />
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-medium">
                                        <a href="#!" class="stretched-link">Tourist Place
                                            of Portland</a>
                                    </p>
                                    <small>2K+ members</small><br />
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="flex-shrink-0">
                                    <img src="/images/app-social/group-7.jpg" class="img-fluid avatar-md rounded-circle me-2" alt="group-7" />
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-medium">
                                        <a href="#!" class="stretched-link">UI / UX
                                            Design</a>
                                    </p>
                                    <small>1.4K members</small><br />
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="flex-shrink-0">
                                    <img src="/images/app-social/group-8.jpg" class="img-fluid avatar-md rounded-circle me-2" alt="group-8" />
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-medium">
                                        <a href="#!" class="stretched-link">Travelling The
                                            World</a>
                                    </p>
                                    <small>23M members</small><br />
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="flex-shrink-0">
                                    <img src="/images/app-social/group-9.jpg" class="img-fluid avatar-md rounded-circle me-2" alt="group-9" />
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-medium">
                                        <a href="#!" class="stretched-link">Music Circle</a>
                                    </p>
                                    <small>26K members</small><br />
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-soft-primary mx-3">
                                <i class="bx bx-plus me-1"></i>Create New Group
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-7.jpg" alt="group-7" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    UI / UX Design
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-8.jpg" alt="group-8" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    Travelling The World
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-9.jpg" alt="group-9" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    Music Circle
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <h5 class="card-title mb-3">
                    Friends Group
                </h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-1.jpg" alt="group-1" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    Interior Design &
                                    Architech
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-2.jpg" alt="ggroup-2" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    Event Management
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-5.jpg" alt="group-5" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    Commercial University,
                                    Daryaganj, Delhi.
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-6.jpg" alt="group-6" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    Tourist Place of Potland
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <h5 class="card-title mb-3">
                    Suggested For You
                </h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-3.jpg" alt="group-3" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    Promote Your Business
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card group">
                            <a href="javascript:void(0);" class="group-action">
                                <div class="avatar-sm fw-bold">
                                    <span class="avatar-title rounded-circle text-bg-primary text-center fs-18">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                            </a>
                            <img class="card-img-top img-fluid" src="/images/app-social/group-4.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title fs-16 mb-2">
                                    The Greasy Mullets
                                </h5>
                                <p class="card-text text-muted text-justify">
                                    Some quick example text
                                    to build on the card
                                    title and make up the
                                    bulk of the card's
                                    content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary w-100">Join Group</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="social-saved" role="tabpanel" aria-labelledby="social-saved-tab">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-1.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="my-0">
                                    2 Photos
                                </h5>
                                <p class="mb-0">
                                    Post by
                                    <b>Sharlene H. Smith</b>
                                </p>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                        <i class="bx bx-share me-1"></i>Share
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bxl-telegram me-1"></i>Send in Message
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-images me-1"></i>View Original Post
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-link me-1"></i>Copy Link
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-bookmark-minus me-1"></i>Unsave
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <img src="/images/app-social/post-2.jpg" class="img-fluid rounded" alt="post-2" />
                            </div>
                            <div class="col-md-5">
                                <img src="/images/app-social/post-3.jpg" class="img-fluid rounded" alt="post-3" />
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1.5k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                521 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-5.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="my-0">
                                    1 Photo
                                </h5>
                                <p class="mb-0">
                                    Post by
                                    <b>Victoria P.
                                        Miller</b>
                                </p>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                        <i class="bx bx-share me-1"></i>Share
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bxl-telegram me-1"></i>Send in Message
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-images me-1"></i>View Original Post
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-link me-1"></i>Copy Link
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-bookmark-minus me-1"></i>Unsave
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <img src="/images/app-social/post-4.jpg" class="img-fluid rounded" alt="post-4" />
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1.05k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                895 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-4.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="my-0">
                                    Thought of the Day
                                </h5>
                                <p class="mb-0">
                                    Post by
                                    <b>Dallas C. Payne</b>
                                </p>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                        <i class="bx bx-share me-1"></i>Share
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bxl-telegram me-1"></i>Send in Message
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-images me-1"></i>View Original Post
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-link me-1"></i>Copy Link
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bx bx-bookmark-minus me-1"></i>Unsave
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="text-justify mb-0">
                            “Not only must we be good, but
                            we must also be good for
                            something.”
                        </p>

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                6.3k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                2.2k Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-2.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="my-0">Video</h5>
                                <p class="mb-0">
                                    Post by
                                    <b>Florence A. Lopez</b>
                                </p>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Video
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-link me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Copy Link
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide this
                                                video
                                            </p>
                                            <small class="text-muted">You won't
                                                see this
                                                video.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report this
                                                video
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                video.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="ratio ratio-21x9 rounded overflow-hidden">
                                    <iframe src="https://www.youtube.com/embed/i8KnCFq4Sw0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-tv align-middle"></i>
                                3.5k Views</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                521 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="avatar-md rounded-circle border border-2 border-transparent" src="/images/app-social/favorite-1.jpg" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0">
                                    Bernadette
                                </p>
                                <small class="text-muted">5 hours ago</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Link
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide all ads
                                                from
                                                Bernadette
                                            </p>
                                            <small class="text-muted">You won't
                                                see
                                                Bernadette's
                                                ads.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-info-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report ad
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                ad.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0">
                            Cant go wrong with Bernadette
                            Clothes
                        </p>
                        <p class="mb-0">
                            Affordable Price and Top Quality
                        </p>
                        <p class="mb-0">
                            COD Available, 10 days return
                            policy
                        </p>
                        <p class="text-primary mb-3">
                            #Clothes #Trendy #Shirts
                        </p>
                        <a href="javascript:void(0);"><img class="img-fluid rounded" src="/images/app-social/favorite-1.jpg" alt="favorite-1" /></a>

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1.5k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                521 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="avatar-md rounded-circle border border-2 border-transparent" src="/images/app-social/favorite-2.jpg" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0">
                                    Vanessa Mall
                                </p>
                                <small class="text-muted">5 hours ago</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Link
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide all ads
                                                from Vanessa
                                                Mall
                                            </p>
                                            <small class="text-muted">You won't
                                                see Vanessa
                                                Mall's
                                                ads.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-info-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report ad
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                ad.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0">
                            Cant go wrong with Vanessa Mall
                        </p>
                        <p class="mb-0">
                            Affordable Price and Top Quality
                        </p>
                        <p class="mb-0">
                            COD Available, no return policy
                        </p>
                        <p class="text-primary mb-3">
                            #Grocery #HomeMaterial #Foods
                            #Market
                        </p>
                        <a href="javascript:void(0);"><img class="img-fluid rounded" src="/images/app-social/favorite-2.jpg" alt="favorite-2" /></a>

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1.3k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>451 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="avatar-md rounded-circle border border-2 border-transparent" src="/images/app-social/favorite-3.jpg" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0">
                                    Bat Cave, North
                                    Carolina.
                                </p>
                                <small class="text-muted">5 hours ago</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Link
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide all ads
                                                from Vanessa
                                                Mall
                                            </p>
                                            <small class="text-muted">You won't
                                                see Vanessa
                                                Mall's
                                                ads.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-info-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report ad
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                ad.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0">
                            Land of elves in Norse
                            mythology.
                        </p>
                        <p class="mb-0">
                            The "otherworld" of Welsh
                            mythology.
                        </p>
                        <p class="mb-0">
                            The city in which King Arthur
                            reigned.
                        </p>
                        <p class="text-primary mb-3">
                            #Travelling #Nature
                        </p>
                        <a href="javascript:void(0);"><img class="img-fluid rounded" src="/images/app-social/favorite-3.jpg" alt="favorite-3" /></a>

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1.2k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                256 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="avatar-md rounded-circle border border-2 border-transparent" src="/images/app-social/favorite-4.jpg" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0">
                                    Eternal Library
                                </p>
                                <small class="text-muted">5 hours ago</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Link
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide all ads
                                                from Vanessa
                                                Mall
                                            </p>
                                            <small class="text-muted">You won't
                                                see Vanessa
                                                Mall's
                                                ads.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-info-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report ad
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                ad.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0">Academic Library</p>
                        <p class="mb-0">Special Library.</p>
                        <p class="mb-0">Public Library.</p>
                        <p class="text-primary mb-3">
                            #LoveReading #Book
                        </p>
                        <a href="javascript:void(0);"><img class="img-fluid rounded" src="/images/app-social/favorite-4.jpg" alt="favorite-4" /></a>

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                345 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>

            <div class="tab-pane fade" id="social-memories" role="tabpanel" aria-labelledby="social-memories-tab">
                <!-- Story Box-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-3.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="m-0">
                                    <a href="{{ route('second', ['pages', 'profile'])}}" class="text-reset">Jeremy Tomlinson</a>
                                </h5>
                                <p class="text-muted mb-0">
                                    <small>about 2 minuts
                                        ago</small>
                                </p>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-22" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-bookmark align-middle pe-1"></i>Save post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user-x align-middle pe-1"></i>Unfollow
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-x-circle align-middle pe-1"></i>Hide post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-block align-middle pe-1"></i>Block</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-flag align-middle fa-fw pe-1"></i>Report post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Story based around the idea of
                            time lapse, animation to post
                            soon!
                        </p>

                        <div class="bg-soft-primary p-1 rounded text-center mb-3">
                            <h5 class="text-primary ms-2">
                                2 years ago
                            </h5>
                            <a href="javascript:void(0);" class="ms-2 text-primary">See all your memories<i class="bi bi-chevron-right ms-1"></i></a>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <img src="/images/app-social/post-1.jpg" class="img-fluid rounded" alt="post-1" />
                            </div>
                            <!-- end col -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 mt-3 mt-md-0">
                                            <img src="/images/app-social/post-2.jpg" class="img-fluid rounded" alt="post-2" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/images/app-social/post-4.jpg" class="img-fluid rounded" alt="post-4" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <div class="position-relative overflow-hidden rounded">
                                            <a href="javascript:void(0);">
                                                <img src="/images/app-social/post-3.jpg" class="img-fluid rounded" alt="post-3" />
                                                <div class="bg-overlay bg-dark"></div>
                                                <h3 class="position-absolute top-50 start-50 translate-middle my-0 text-white">
                                                    +7
                                                </h3>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center my-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                1.5k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                521 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>

                        <div class="d-flex align-items-start">
                            <img src="/images/users/avatar-1.jpg" height="32" class="align-self-start rounded me-2" alt="Arya Stark" />
                            <div class="w-100">
                                <input type="text" class="form-control bg-light border-0 form-control-sm" placeholder="Write a comment" />
                            </div>
                            <!-- end medi-body -->
                        </div>
                    </div>
                </div>

                <!-- Story Box-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-3.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="my-0">
                                    <b class="text-primary">Martin R. Peters</b>
                                </h5>
                                <small class="mb-0">Post: 07 Feb, 2021
                                    06:00AM</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-22" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-bookmark align-middle pe-1"></i>Save post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user-x align-middle pe-1"></i>Unfollow
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-x-circle align-middle pe-1"></i>Hide post</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-block align-middle pe-1"></i>Block</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-flag align-middle fa-fw pe-1"></i>Report post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-soft-primary p-1 rounded text-center mb-3">
                            <h5 class="text-primary ms-2">
                                2 years ago
                            </h5>
                            <a href="javascript:void(0);" class="ms-2 text-primary">See all your memories<i class="bi bi-chevron-right ms-1"></i></a>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="text-justify">
                                    The quick, brown fox
                                    jumps over a lazy dog.
                                    DJs flock by when MTV ax
                                    quiz prog. Junk MTV quiz
                                    graced by fox whelps.
                                    Bawds jog, flick quartz,
                                    vex nymphs.
                                </p>
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-5">
                                        <img src="/images/app-social/post-3.jpg" class="card-img" alt="..." />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title fs-16">
                                                DJs flock
                                            </h5>
                                            <p class="card-text text-muted">
                                                One morning,
                                                when Gregor
                                                Samsa woke
                                                from
                                                troubled
                                                dreams, he
                                                found
                                                himself
                                                transformed
                                                in his bed
                                                into a
                                                horrible
                                                vermin. He
                                                lay on his
                                                armour-like
                                                back, and if
                                                he lifted
                                                his head.
                                            </p>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center my-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bxs-heart align-middle text-danger"></i>
                                2.6k Likes</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                412 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>

                        <div class="d-flex align-items-start">
                            <img src="/images/users/avatar-1.jpg" height="32" class="align-self-start rounded me-2" alt="Arya Stark" />
                            <div class="w-100">
                                <input type="text" class="form-control bg-light border-0 form-control-sm" placeholder="Write a comment" />
                            </div>
                            <!-- end medi-body -->
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-3.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0">
                                    UI / UX Design Tutorial
                                    – Wireframe, Mockup &
                                    Design in Figma
                                </p>
                                <small class="text-muted">1 days ago</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Video
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-link me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Copy Link
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide this
                                                video
                                            </p>
                                            <small class="text-muted">You won't
                                                see this
                                                video.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report this
                                                video
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                video.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="ratio ratio-21x9 rounded overflow-hidden">
                                    <iframe src="https://www.youtube.com/embed/c9Wg6Cb_YlU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-tv align-middle"></i>
                                9.5k Views</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                4.02k Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-4.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0">
                                    Tour the Harvard Law
                                    School Library
                                </p>
                                <small class="text-muted">1 days ago</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Video
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-link me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Copy Link
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide this
                                                video
                                            </p>
                                            <small class="text-muted">You won't
                                                see this
                                                video.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report this
                                                video
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                video.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="ratio ratio-21x9 rounded overflow-hidden">
                                    <iframe src="https://www.youtube.com/embed/CXkjHLBr_y0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-tv align-middle"></i>
                                91.2k Views</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                8.6k Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-5.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0">
                                    How to Chair a Meeting
                                    Well - Part 1
                                </p>
                                <small class="text-muted">3 days ago</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Video
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-link me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Copy Link
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide this
                                                video
                                            </p>
                                            <small class="text-muted">You won't
                                                see this
                                                video.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report this
                                                video
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                video.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="ratio ratio-21x9 rounded overflow-hidden">
                                    <iframe src="https://www.youtube.com/embed/IJ_LDIlYnjw" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-tv align-middle"></i>
                                854 Views</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                102 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="border border-2 border-primary rounded-circle">
                                <img class="rounded-circle border border-2 border-transparent" src="/images/users/avatar-5.jpg" height="48" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0">
                                    Travelling through North
                                    East India
                                </p>
                                <small class="text-muted">3 days ago</small>
                            </div>

                            <div class="dropdown text-muted">
                                <a href="#" class="dropdown-toggle arrow-none text-muted fs-18" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bell me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Turn on
                                                notification
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-bookmark me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Save Video
                                            </p>
                                            <small class="text-muted">Add this to
                                                your save
                                                items.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-link me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Copy Link
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Hide this
                                                video
                                            </p>
                                            <small class="text-muted">You won't
                                                see this
                                                video.</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bx bx-x-circle me-2"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">
                                                Report this
                                                video
                                            </p>
                                            <small class="text-muted">Tell us
                                                about a
                                                problem with
                                                this
                                                video.</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="ratio ratio-21x9 rounded overflow-hidden">
                                    <iframe src="https://www.youtube.com/embed/ehmsJLZlCZ0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="d-flex align-items-center mt-2">
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-tv align-middle"></i>
                                3.8k Views</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-comment align-middle"></i>
                                663 Comments</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted"><i class="bx bx-share-alt align-middle"></i>
                                Share</a>
                            <a href="javascript: void(0);" class="btn btn-link text-muted ms-auto"><i class="bx bx-bookmark align-middle"></i>
                                Save</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
        </div>
        <!-- end tab-content-->
    </div>
    <!-- end col -->

    <div class="col-xxl-3">
        <div class="sticky-bar">
            <div class="offcanvas-xxl offcanvas-end" tabindex="-1" id="friendListffcanvas" aria-labelledby="accoufriendListvasLabel">
                <div class="card h-100" data-simplebar>
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            Friends
                        </h5>

                        <form class="chat-search">
                            <div class="chat-search-box">
                                <input class="form-control" type="text" name="search" placeholder="Search ..." />
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </form>

                        <h5 class="mb-3">
                            Pending Request (2)
                        </h5>

                        <div class="d-flex position-relative mb-3">
                            <div class="flex-shrink-0">
                                <img src="/images/users/avatar-2.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-2" />
                            </div>
                            <div class="flex-grow-1 text-truncate">
                                <p class="mb-0">
                                    <a href="#!" class="text-dark stretched-link"><b>Daniel J.
                                            Olsen</b>
                                        sent you a
                                        request</a>
                                </p>
                                <small>46 mutual
                                    friends</small><br />
                            </div>
                        </div>

                        <hr class="mb-3" />

                        <div class="d-flex position-relative">
                            <div class="flex-shrink-0">
                                <img src="/images/users/avatar-3.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-3" />
                            </div>
                            <div class="flex-grow-1 text-truncate">
                                <p class="mb-0">
                                    <a href="#!" class="text-dark stretched-link"><b>Jack P.
                                            Roldan</b>
                                        sent you a
                                        request</a>
                                </p>
                                <small>23 mutual
                                    friends</small><br />
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h5 class="card-title mb-3">
                            Friends Request
                        </h5>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <img src="/images/users/avatar-5.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-5" />
                            </div>
                            <div class="flex-grow-1">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#!" class="dropdown-item">
                                            <i class="bx bxs-user-detail me-1"></i>See Profile
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bxl-telegram me-1"></i>Message to
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-user-x me-1"></i>Unfriend
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-block me-1"></i>Block Victoria
                                        </a>
                                    </div>
                                </div>
                                <h5 class="mb-1 fs-14">
                                    <a href="#!">Victoria P.
                                        Miller</a>
                                </h5>
                                <p class="mb-0">
                                    no mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <img src="/images/users/avatar-6.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-6" />
                            </div>
                            <div class="flex-grow-1">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#!" class="dropdown-item">
                                            <i class="bx bxs-user-detail me-1"></i>See Profile
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bxl-telegram me-1"></i>Message to
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-user-x me-1"></i>Unfriend
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-block me-1"></i>Block Victoria
                                        </a>
                                    </div>
                                </div>
                                <h5 class="mb-1 fs-14">
                                    <a href="#!">Dallas C. Payne</a>
                                </h5>
                                <p class="mb-0">
                                    856 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <img src="/images/users/avatar-7.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-7" />
                            </div>
                            <div class="flex-grow-1">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#!" class="dropdown-item">
                                            <i class="bx bxs-user-detail me-1"></i>See Profile
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bxl-telegram me-1"></i>Message to
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-user-x me-1"></i>Unfriend
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-block me-1"></i>Block Victoria
                                        </a>
                                    </div>
                                </div>
                                <h5 class="mb-1 fs-14">
                                    <a href="#!">Florence A.
                                        Lopez</a>
                                </h5>
                                <p class="mb-0">
                                    52 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <img src="/images/users/avatar-8.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-8" />
                            </div>
                            <div class="flex-grow-1">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#!" class="dropdown-item">
                                            <i class="bx bxs-user-detail me-1"></i>See Profile
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bxl-telegram me-1"></i>Message to
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-user-x me-1"></i>Unfriend
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-block me-1"></i>Block Victoria
                                        </a>
                                    </div>
                                </div>
                                <h5 class="mb-1 fs-14">
                                    <a href="#!">Gail A. Nix</a>
                                </h5>
                                <p class="mb-0">
                                    12 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/images/users/avatar-9.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-9" />
                            </div>
                            <div class="flex-grow-1">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#!" class="dropdown-item">
                                            <i class="bx bxs-user-detail me-1"></i>See Profile
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bxl-telegram me-1"></i>Message to
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-user-x me-1"></i>Unfriend
                                            Victoria
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="bx bx-block me-1"></i>Block Victoria
                                        </a>
                                    </div>
                                </div>
                                <h5 class="mb-1 fs-14">
                                    <a href="#!">Lynne J. Petty</a>
                                </h5>
                                <p class="mb-0">
                                    no mutual friends
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end sticky bar -->
            </div>
        </div>
    </div>
    <!-- end col -->
</div>

@endsection