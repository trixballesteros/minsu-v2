@extends('layouts.app')
@section('content')

    <div class="about_bg">

        @include('layouts.core.topmenu')
        <div class="row">
            <div class="col-md-12">
                <h1>Our Programs</h1>
            </div>
        </div>

    </div>
    <section class="admission_cources">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                Graduate School
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="phd-cs">Doctor of Philosophy in Crop Science (Main Campus)</span>
                                        <div class="course-details" id="phd-cs-details" style="display: none;">
                                          <p style="color: black">
                                             delves deep into the science behind crop production, improvement, and management. Students in this program typically engage in rigorous coursework covering subjects such as plant genetics, breeding, physiology, pathology, agronomy, and biotechnology. They also conduct original research aimed at addressing key challenges in agriculture, such as increasing crop yields, enhancing resistance to pests and diseases, improving nutrient efficiency, and mitigating environmental impacts.
                                          </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="edd">Doctor of Education major in Educational Management (Main Campus)</span>
                                        <div class="course-details" id="edd-details" style="display: none;">
                                            <p style="color: black">
                                                designed for professionals seeking advanced expertise in the administration and leadership of educational institutions. This program combines theoretical knowledge with practical skills to prepare graduates for leadership roles in various educational settings, including schools, colleges, universities, and educational agencies.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="maed">Master of Arts in Education (Main Campus)</span>
                                        <div class="course-details" id="maed-details" style="display: none;">
                                            <p style="color: black">
                                                <i>
                                               Major in: (1) English Language Teaching, (2) Pagtuturo ng Wika, (3) Mathematics, (4) Biological Sciences,(5) Educational Management and (6) Guidance and Counseling.
                                                </i>
                                            </p>
                                            <p style="color: black">
                                                designed for individuals who wish to deepen their understanding of educational theory, practice, and research. This program is suitable for educators looking to enhance their teaching skills, advance their careers, or transition into educational leadership or policy roles.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="msa">Master of Science in Agriculture (Main Campus)</span>
                                        <div class="course-details" id="msa-details" style="display: none;">
                                            <p style="color: black">
                                                <i>
                                                    Major in: (1) Animal Science, (2) Crop Science
                                                </i>
                                            </p>
                                            <p style="color: black">
                                                designed to provide students with advanced knowledge and skills in agricultural science and related disciplines. This program is suitable for individuals interested in careers in agriculture, agribusiness, natural resource management, research, and academia. <br>
                                                The curriculum of an M.S. in Agriculture program typically covers a wide range of topics related to crop production, soil science, plant genetics, animal science, agricultural economics, sustainable agriculture, and agricultural technology.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="mba">Master in Business Administration (Main Campus)</span>
                                        <div class="course-details" id="mba-details" style="display: none;">
                                            <p style="color: black">
                                                designed to equip students with a broad range of business knowledge and skills to excel in leadership and management roles across various industries. The MBA curriculum covers core business disciplines such as accounting, finance, marketing, operations management, organizational behavior, and strategic management.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="mpa">Master in Public Administration (Main Campus)</span>
                                        <div class="course-details" id="mpa-details" style="display: none;">
                                            <p style="color: black">
                                                 designed to prepare students for leadership and management roles in the public sector, nonprofit organizations, and governmental agencies. The MPA curriculum typically covers a wide range of subjects related to public policy, public finance, organizational management, program evaluation, and public sector ethics.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                College of Agriculture and Allied Fields
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="bsa">Bachelor of Science in Agriculture (Main Campus)</span>
                                        <div class="course-details" id="bsa-details" style="display: none;">
                                            <p style="color: black">
                                                <i>
                                                    Major in: (1) Animal Science, (2) Crop Science
                                                </i>
                                            </p>
                                            <p style="color: black">
                                              designed to provide students with a solid foundation in agricultural science and related disciplines. This program prepares students for careers in various sectors of the agriculture industry, including crop production, livestock management, agribusiness, agricultural research, and natural resource management.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="horti">Bachelor of Science in Horticulture (Main Campus)</span>
                                        <div class="course-details" id="horti-details" style="display: none;">
                                            <p style="color: black">
                                                focused on the science and art of cultivating plants for various purposes, including food production, ornamental landscaping, environmental conservation, and medicinal or industrial uses. This program provides students with a comprehensive understanding of plant biology, horticultural practices, and sustainable management techniques.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="agro">Bachelor of Science in Agroforestry (Main Campus)</span>
                                        <div class="course-details" id="agro-details" style="display: none;">
                                            <p style="color: black">
                                                integrates principles of agriculture, forestry, and environmental management to sustainably manage land resources for both agricultural and forest production. This interdisciplinary field focuses on the intentional integration of trees and shrubs into agricultural landscapes to optimize ecological, economic, and social benefits.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                College of Arts and Sciences
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="abel">Bachelor of Arts in English Language (Main & Calapan City Campus)</span>
                                        <div class="course-details" id="abel-details" style="display: none;">
                                            <p style="color: black">
                                                 focuses on the study of the English language, its structure, history, literature, and usage. This program provides students with a comprehensive understanding of the English language and its role in communication, literature, culture, and society.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="psych">Bachelor of Arts in Psychology (Calapan City Campus)</span>
                                        <div class="course-details" id="psych-details" style="display: none;">
                                            <p style="color: black">
                                                focuses on the scientific study of behavior and mental processes. This program provides students with a comprehensive understanding of human behavior, cognition, emotion, and development, as well as the methods used to study these phenomena.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="polsci">Bachelor of Arts in Political Science (Bongabong Campus)</span>
                                        <div class="course-details" id="polsci-details" style="display: none;">
                                            <p style="color: black">
                                                 focuses on the study of political systems, institutions, behavior, and ideas. This program provides students with a comprehensive understanding of politics at the local, national, and international levels, as well as the theoretical frameworks used to analyze political phenomena.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="envisci">Bachelor of Science in Environmental Science (Main Campus)</span>
                                        <div class="course-details" id="envisci-details" style="display: none;">
                                            <p style="color: black">
                                                 focuses on the study of the environment and the complex interactions between human society and the natural world. This interdisciplinary program integrates concepts and methodologies from various scientific disciplines to address environmental issues and promote sustainability.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                College of Business and Management
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="entrep">Bachelor of Science in Entrepreneurship (Main Campus)</span>
                                        <div class="course-details" id="entrep-details" style="display: none;">
                                            <p style="color: black">
                                                <i>
                                                    With specialization in: (1) Farm Business, (2) Tourism Business
                                                </i>
                                            </p>
                                            <p style="color: black">
                                               designed to provide students with the knowledge, skills, and mindset needed to start, manage, and grow successful businesses. This program combines business education with a focus on innovation, creativity, and entrepreneurial thinking to prepare students for careers as entrepreneurs, business owners, and leaders in a variety of industries.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="tm">Bachelor of Science in Tourism Management (Main, Calapan City, & Bongabong Campus)</span>
                                        <div class="course-details" id="tm-details" style="display: none;">
                                            <p style="color: black">
                                                 focused on preparing students for careers in the tourism and hospitality industry. This program equips students with the knowledge, skills, and competencies needed to manage tourism businesses, attractions, and destinations effectively.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="hm">Bachelor of Science in Hospitality Management (Calapan City & Bongabong Campus)</span>
                                        <div class="course-details" id="hm-details" style="display: none;">
                                            <p style="color: black">
                                                 designed to prepare students for careers in the hospitality industry, which includes hotels, restaurants, resorts, event planning, and related businesses. This program provides students with a comprehensive understanding of hospitality operations, customer service, business management, and industry trends.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                College of Computer Studies
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="it">Bachelor of Science in Information Technology (Main, Calapan City & Bongabong Campus)</span>
                                        <div class="course-details" id="it-details" style="display: none;">
                                            <p style="color: black">
                                                designed to prepare students for careers in the rapidly evolving field of technology. This program provides students with a comprehensive understanding of computer systems, networks, software development, cybersecurity, and data management.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="comeng">Bachelor of Science Computer Engineering (Bongabong Campus)</span>
                                        <div class="course-details" id="comeng-details" style="display: none;">
                                            <p style="color: black">
                                                 blends aspects of both electrical engineering and computer science. This program focuses on the design, development, and integration of computer systems and hardware components, as well as the software that controls them.
                                            </p>
                                        </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                College of Criminal Justice Education
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="crim">Bachelor of Science in Criminology (Calapan City & Bongabong Campus)</span>
                                        <div class="course-details" id="crim-details" style="display: none;">
                                            <p style="color: black">
                                                 focuses on the study of crime, criminal behavior, law enforcement, and the criminal justice system. This program provides students with a comprehensive understanding of the causes and consequences of crime, as well as the methods used to prevent and respond to criminal behavior.
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                College of Teacher Education
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="bsed">Bachelor of Secondary Education (Main, Calapan City & Bongabong Campus)</span>
                                        <div class="course-details" id="bsed-details" style="display: none;">
                                            <p style="color: black">
                                                <i>
                                                    Major in: (1) English, (2) Filipino, (3) Mathematics, (4) Science
                                                </i>
                                            </p>
                                            <p style="color: black">
                                                 designed to prepare students to become secondary school teachers. This program focuses on equipping students with the knowledge, skills, and competencies necessary to teach specific subjects at the secondary education level.
                                            </p>
                                        </div>
                                    </li>

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="beed">Bachelor of Elementary Education (Main & Bongabong Campus)</span>
                                        <div class="course-details" id="beed-details" style="display: none;">
                                            <p style="color: black">
                                              designed to prepare students to become elementary school teachers. This program focuses on providing students with the knowledge, skills, and competencies needed to teach children in the early stages of their educational development, typically from kindergarten through sixth grade or equivalent.
                                            </p>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="btvted"> Bachelor of Technical-Vocational Teacher Education (Calapan City Campus)</span>
                                        <div class="course-details" id="btvted-details" style="display: none;">
                                            <p style="color: black">
                                                <i>
                                                    Major in: (1) Food and Service Management, (2) Electronics Technology, (3) Electrical Technology, (4) Automotive Technology, (5) Drafting Technology
                                                </i>
                                            </p>
                                            <p style="color: black">
                                               offers majors tailored to specific technical and vocational fields, including Food and Service Management, Electronics Technology, Electrical Technology, Automotive Technology, and Drafting Technology. These majors prepare future educators with both practical skills and pedagogical methods to teach subjects such as culinary arts, electronics, electrical systems, automotive mechanics, and drafting. Graduates are equipped to become vocational educators, providing hands-on training and theoretical knowledge to prepare students for careers in their chosen field.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                Institute of Agricultural and Biosystems Engineering
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="iabe">Bachelor of Agricultural and Biosystems Engineering (Main Campus)</span>
                                        <div class="course-details" id="iabe-details" style="display: none;">
                                            <p style="color: black">
                                               focuses on the integration of engineering principles with agricultural and biological sciences to address challenges in food production, natural resource management, and environmental sustainability. Students study topics such as soil and water conservation, crop production systems, agricultural machinery and equipment, irrigation and drainage, renewable energy, and environmental engineering. Through coursework, laboratory experiments, and field experiences, students develop skills in design, analysis, and implementation of engineering solutions tailored to agricultural and biosystems contexts. Graduates of this program are prepared for careers in agricultural engineering firms, government agencies, research institutions, and agribusinesses, where they contribute to enhancing agricultural productivity, efficiency, and sustainability.
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;margin-bottom: 20px">
                        <div class="card-body">
                            <div style="cursor: pointer;background-color: #0b5421;color: white"
                                 class="card-header">
                                Institute of Fisheries
                            </div>
                        </div>
                        <div style="padding: 20px" class="card-body">
                            <div class="card-text" style="color: #067026">
                                <ul style="list-style: none">

                                    <li><i class="fa fa-book mr-2"></i><span class="course-name" data-target="iof">Bachelor of Science in Fisheries (Bongabong Campus)</span>
                                        <div class="course-details" id="iof-details" style="display: none;">
                                            <p style="color: black">
                                                designed to provide students with comprehensive knowledge and skills in the management, conservation, and sustainable utilization of aquatic resources. Coursework typically covers topics such as aquatic biology, fisheries science, aquaculture, marine ecology, fish nutrition, fish health management, and fisheries management policies and practices. Through hands-on experiences, laboratory work, and field studies, students learn about the biology and ecology of aquatic organisms, as well as the techniques and technologies involved in fishery management and aquaculture production. Graduates of this program are prepared for careers in various sectors, including government agencies, environmental consulting firms, research institutions, fish farms, conservation organizations, and fisheries management agencies, where they contribute to the responsible stewardship and sustainable utilization of fisheries resources.
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the same structure for other program categories -->
                </div>
                <div class="col-md-4">
                    @include('sections.contact-card')
                </div>
            </div>
        </div>
    </section>

    @include('sections.detail-chart')

    <script>
        // Add click event listeners to course names
        document.querySelectorAll('.course-name').forEach(courseName => {
            courseName.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const detailsElement = document.getElementById(targetId + '-details');
                // Toggle the visibility of course details
                if (detailsElement.style.display === 'none') {
                    detailsElement.style.display = 'block';
                } else {
                    detailsElement.style.display = 'none';
                }
            });
        });
    </script>
@endsection
