@extends('layouts.app')
@section('content')
    <body>
    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12" style="display: flex; justify-content: center; align-items: center;">
                    <img height="150" width="150" src="template\images\programs\caas.png" ;   alt="college-img">
                </div>
                <div class="col-md-12">
                    <h1>College of Agriculture and Allied Fields</h1>
                </div>
            </div>

    </div>
    <section class="admission-form_rules">
        <div class="container">
            <div class="row">
                <div class="col-md-7 admission-form_mr">
                    <h2>VISION</h2>
                    <p>A Center of excellence in Agriculture, Horticulture, and in Agroforestry in Region IV-B</p>
                    <h2>MISSION</h2>
                    <p>The College of Agriculture and Allied Fields (CAAF) Programs continues to train agriculturists, horticulturist and agroforester who are competent, productive, excellent, and responsible citizens.</p>
                    <h2>PROGRAMS</h2>


                    <ul>
                        <li> <h3> BACHELOR OF SCIENCE IN AGRO-FORESTRY </h3></li>
                        <h4>Objectives:</h4>
                        <ol>
                            <li> To develop agroforesters that can assist in the improvement of quality of life of upland dwellers.</li>
                            <li> To develop agroforesters that can successfully contribute for the development of upland areas through the integration of agriculture and forestry</li>
                            <li> To develop worldwide competitive agroforesters that can deal with the present issues and thrust of sustainable land-use management.</li>
                            <li> To develop agroforesters that can uplift awareness of the people on the importance and proper use and management of upland resources.</li>
                        </ol>
                        <li> <h3>BACHELOR OF SCIENCE IN AGRICULTURE / BACHELOR OF SCIENCE IN HORTICULTURE </h3></li>
                        <h4>Objectives:</h4>
                        <p>The course program provides strategies for new needs and future challenges in crop and animal production, especially those leading to national food security and resource conservation using environment-friendly technologies. Specifically, to:</p>
                        <ol>
                            <li>Train and develop the manpower required for agricultural and rural development of the country.</li>
                            <li>Undertake research on immediate and long-term problems of Philippine agriculture for the advancement of the agricultural science and technology. </li>
                            <li>Disseminate research findings and technology in the form of package suitable for adoption by extension workers and farmers, help/retain extension workers, provides the technical background to extension technicians in the field whenever necessary and conduct pilot action/research projects on agriculture and rural development.</li>
                        </ol>
                    </ul>
                </div>
                <div class="col-md-5 admission-form_mr">
                    <ul class="admission-form_listed">
                        <h5>ADMISSION REQUIREMENTS (For First Year) <br><small><i>(Present Original and Submit photocopy only)</i></small></h5>
                        <li>Form 138(Report Card)</li>
                        <li>Certificate of Good Moral Character</li>
                        <li>Authenticated (NSO/PSA) Birth Certificate.</li>
                        <li>4 pcs. Identical 2x2 colored ID pictures white background</li>
                        <li>4 pcs. Identical 1x1 colored ID pictures white background</li>
                    </ul>
                    <ul style="padding-top: 20px" class="admission-form_listed">
                        <h5>ADMISSION REQUIREMENTS (For Transferee) <br><small><i>(Present Original and Submit photocopy only.)</i></small></h5>
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

        </div>
    </section>


    </body>
    @include('sections.detail-chart')
@endsection
