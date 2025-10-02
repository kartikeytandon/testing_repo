@extends('layouts.vertical', ['title' => 'Integration', 'subTitle' => 'Calendar'])

@section('content')

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gx-3">
    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="googleMailSwitch" checked />
                    </div>
                </div>
                <img src="/images/app-calendar/google-mail.png" alt="Google Mail" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Google Mail
                </h5>
                <p class="mb-0">
                    You can tap on an upcoming meeting to
                    see the details and join the call.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="googleAnalyticsSwitch" />
                    </div>
                </div>
                <img src="/images/app-calendar/google-analytics.png" alt="Google Analytics" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Google Analytics
                </h5>
                <p class="mb-0">
                    you can measure your advertising ROI as
                    well as track your video, applications,
                    social media.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="googleMeetSwitch" checked />
                    </div>
                </div>
                <img src="/images/app-calendar/google-meet.png" alt="Google Meet" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Google Meet
                </h5>
                <p class="mb-0">
                    It is one of two apps that constitute
                    the replacement for Google Hangouts and
                    Google Chat.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="intercomSeitch" />
                    </div>
                </div>
                <img src="/images/app-calendar/intercom.png" alt="Intercom" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Intercom
                </h5>
                <p class="mb-0">
                    It is the complete customer messaging
                    platform to drive across the entire
                    lifecycle.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="microsoftOutlookSwitch" checked />
                    </div>
                </div>
                <img src="/images/app-calendar/microsoft-outlook.png" alt="Microsoft Outlook" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Microsoft Outlook
                </h5>
                <p class="mb-0">
                    Schedule an online meeting using Outlook
                    Open Outlook and go to your calendar.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="googleChromeSwitch" checked />
                    </div>
                </div>
                <img src="/images/app-calendar/google-chrome.png" alt="Google Chrome" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Google Chrome
                </h5>
                <p class="mb-0">
                    Using your browser, share your video,
                    desktop, and presentations with
                    teammates and customers.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="hubspotSwitch" checked />
                    </div>
                </div>
                <img src="/images/app-calendar/hubspot.png" alt="HubSpot" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    HubSpot
                </h5>
                <p class="mb-0">
                    Give prospects the power to book
                    meetings with you, and save hours of
                    time on unnecessary emailing.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="stripeSwitch" />
                    </div>
                </div>
                <img src="/images/app-calendar/stripe.png" alt="Stripe" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">Stripe</h5>
                <p class="mb-0">
                    Sessions is a free conference for
                    payments leaders, developers, founders,
                    and curious observers.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="slackSwitch" />
                    </div>
                </div>
                <img src="/images/app-calendar/slack.png" alt="Slack" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">Slack</h5>
                <p class="mb-0">
                    It is the collaboration hub that brings
                    the right people, information and tools
                    together to get work done.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="salesForceSwitch" checked />
                    </div>
                </div>
                <img src="/images/app-calendar/sales-force.png" alt="Salesforce" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Salesforce
                </h5>
                <p class="mb-0">
                    It provides an interface that gives
                    salespeople useful data stored in
                    Salesforce to lead impactful calls.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="webhooksSwitch" />
                    </div>
                </div>
                <img src="/images/app-calendar/web-hooks.png" alt="Web Hooks" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Web Hooks
                </h5>
                <p class="mb-0">
                    webhooks as a medium to notify
                    third-party applications (consumer
                    applications) about events that occur in
                    a Zoom account.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="facebookSwitch" checked />
                    </div>
                </div>
                <img src="/images/app-calendar/facebook.png" alt="Facebook" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Facebook
                </h5>
                <p class="mb-0">
                    Messenger Rooms, allows to create a
                    video meeting and invite their friends
                    to join, even if those people are not
                    Facebook users.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="microsoftTeamConferenceSwitch" />
                    </div>
                </div>
                <img src="/images/app-calendar/microsoft-team-conference.png" alt="Microsoft Team Conference" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">
                    Microsoft Team Conference
                </h5>
                <p class="mb-0">
                    It automatically include Microsoft Teams
                    conferencing Meetings in Teams include
                    audio, video, and screen sharing.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="zapierSwitch" checked />
                    </div>
                </div>
                <img src="/images/app-calendar/zapier.png" alt="Zapier" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">Zapier</h5>
                <p class="mb-0">
                    Zapier lets you connect Google Meet with
                    thousands of the most popular apps, so
                    you can automate your work and have more
                    time.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="zoomSwitch" />
                    </div>
                </div>
                <img src="/images/app-calendar/zoom.png" alt="Zoom" class="img-fluid avatar-sm" />
                <h5 class="card-title mt-3 mb-2">Zoom</h5>
                <p class="mb-0">
                    Zoom Cloud Meetings is a proprietary
                    video teleconferencing software program
                    developed by Zoom Video Communications.
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

@endsection