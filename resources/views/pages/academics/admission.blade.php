@extends('layouts.app')
@section('content')
    <body>
    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Admission</h1>
                </div>
            </div>

    </div>
    <section class="admission-form_rules">
        <div class="container">
            <div class="row">
                <div class="col-md-7 admission-form_mr">
                    <h2>College Department</h2>
                    <p>You are qualified to take the MinSU, if;</p>
                    <ol>
                        <li>You have completed senior high school.</li>
                        <li>You are high school graduate on or before March 2015.</li>
                        <li>You are ALS certified eligible for admission to College.</li>
                    </ol>
                    <p>Additional qualifications:</p>
                    <ol>
                        <li>Must not have taken any college subject/s previously;</li>
                        <li>Must not be taking any college subject/s at present; and</li>
                        <li>Students enrolled in vocational courses or those not leading to a degree programs can apply
                            for the MinSU.
                        </li>
                    </ol>
                    <h3 class="block" style="margin: 20px 0px">How to qualify for an undergraduate degree program:</h3>
                    <p style="text-indent: 50px">To qualify in a particular undergraduate degree program, the applicant
                        needs to choose from among the list of courses offered in the College. The applicant needs to
                        indicate the choice of course with its corresponding course code in the MinSU College admission
                        Test Application Form. (E.g. BS Agroforestry is coded 1101).</p>
                    <h3 class="block" style="margin: 20px 0px">The MinSU APPLICATION:</h3>
                    <ol>
                        <li>Obtain application forms from Guidance and Counseling Office of any of the three campuses or
                            download
                            <a href="#">here</a></li>
                        <li>Fill up the MinSU FM-GC-01 form in print and bold letters.</li>
                        <li>Requirements should be clipped to the application form.</li>
                        <li>Submit the completed and Accomplished application from and requirements to any of the three
                            campuses you want to enroll in.
                        </li>
                        <li>Wait for the TEST PERMIT once your application form is submitted</li>
                        <p><span style="color: red">*</span><i>Take note of your scheduled date, time, venue and
                                room</i></p>
                    </ol>
                </div>
                <div class="col-md-5 admission-form_mr">
                    <ul class="admission-form_listed">
                        <h5>For First Year <br><small><i>(Present Original and Submit photocopy only)</i></small></h5>
                        <li>Form 138(Report Card)</li>
                        <li>Certificate of Good Moral Character</li>
                        <li>Authenticated (NSO/PSA) Birth Certificate.</li>
                        <li>4 pcs. Identical 2x2 colored ID pictures white background</li>
                        <li>4 pcs. Identical 1x1 colored ID pictures white background</li>
                    </ul>
                    <ul style="padding-top: 20px" class="admission-form_listed">
                        <h5>For Transferee <br><small><i>(Present Original and Submit photocopy only.)</i></small></h5>
                        <li>Honorable Dismissal/Transfer Credential</li>
                        <li>Form 138(Report Card)</li>
                        <li>Official Transcript of Records</li>
                        <li>Authenticated (NSO/PSA) Birth Certificate.</li>
                        <li>4 pcs. Identical 2x2 colored ID pictures white background</li>
                        <li>4 pcs. Identical 1x1 colored ID pictures white background</li>
                        <li>1 long white folder</li>
                    </ul>
                </div>
            </div>
            <div class="row" style="margin-top: 50px">
                <div class="col-md-7">
                    <h2>Laboratory High School Department</h2>
                    <p style="text-indent: 50px">MinSCAT maintains Laboratory High School that serves as training ground
                        for the student teachers. The Secondary Department adopts the Basic Education Curriculum
                        (BEC)</p>
                </div>
                <div class="col-md-5">
                    <ul class="admission-form_listed mt-0">
                        <h5>Requirements for Grade Seven Only</h5>
                        <li>Entrance Examination</li>
                        <li>Physical and Medical Exams (School Clinic)</li>
                        <li>Elementary Report Card (Form 138)</li>
                        <li>Four (4) pieces 1" x 1" recent color photo</li>
                    </ul>
                </div>
            </div>
            <div class="row" style="margin-top: 50px">
                <div class="col-md-7">
                    <h2>Graduate School Department</h2>
                    <ul style="margin-top: 0" class="admission-form_listed">
                        <li>Application Letter (personal hand written) for admission</li>
                        <li>Graduate School (GS) Form No. 1 - 1 copy from Registrar's Office</li>
                        <li>Original Transcript of Record with "<b>FOR STUDY PURPOSES</b>" remark</li>
                        <li>Two (2) copies of Recommendation (from previous Professors/Instructors)</li>
                        <li>Permit to Study (if presently employed)</li>
                        <li>Two (2) copies ID pictures 2" x 2" size</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    </body>
    @include('sections.detail-chart')
@endsection
