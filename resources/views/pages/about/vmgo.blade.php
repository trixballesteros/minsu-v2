@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Our VMGO</h1>
                </div>

        </div>
    </div>
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <h2>Vision</h2>
                            <p class="quote_text">The Mindoro State University is a center of excellence in agriculture and fishery, science, technology, culture and education of globally competitive lifelong learners in a diverse yet cohesive society.</p>
                        </div>
                        <div class="quote">
                            <h2>Mission</h2>
                            <p class="quote_text">The University commits to produce 21st-century skilled lifelong learners and generates and commercializes innovative technologies by providing excellent and relevant services in instruction, research, extension, and production through industry-driven curricula, collaboration, internationalization, and continual organizational growth for sustainable development.</p>
                        </div>
                        <div class="quote">
                            <h2>Goals</h2>
                            <p class="quote_text">Provide and broaden the access to quality education responsive to an ever growing and dynamic society.</p>
                        </div>
                        <div class="quote">
                            <h2>Objectives</h2>
                            <p>Strengthen the capabilities of the institution to: </p>
                            <p>1. Offer quality education;</p>
                            <p>2. Provide opportunities for the youth to develop their potentials as human beings and productive member of society.</p>
                            <p>3 .Expand Financial assistance to poor but deserving students towards greater access to quality education;</p>
                            <p>4. Maximize productivity to sustain income generation and;</p>
                            <p>5. Intensify research and extension services, which are relevant to the needs of community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
