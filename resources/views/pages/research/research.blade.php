@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Research, Extension and Development</h1>
                </div>

        </div>
    </div>
    <section class="welcome_about">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-category_block pt-0">


                        <h3>Sections</h3>

                        <ul>
                            <li><a  href="#development">Research and Development<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li><a  href="#extension_services">Extension Services  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li><a  href="#projects">Research Projects  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div id="development" class="col-md-12">

                            <h3 style="margin-bottom: 50px" class="text-green text-center"><strong>RESEARCH AND
                                    DEVELOPMENT</strong></h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div style="font-size: 14pt;text-indent: 60px">
                            <p>
                                The Research Program is an integral component of the Mindoro State College of Agriculture
                                and Technology which aims on working for the generation development of priority technologies
                                and information, as well as verification, piloting and commercialization of the technologies
                                resulting to economically feasible, socially acceptable and environmentally sound and
                                technology-based enterprises.
                            </p>
                            <p>
                                The program essentially operates to realize its primordial task of pushing the frontiers of
                                knowledge in the different academic disciplines offered by the College in accordance with
                                the mandates and to put this knowledge into utilization by the intended clientele.
                            </p>
                        </div>
                        <h4 style="margin-bottom: 20px" class="text-green">The Institutional Research Agenda</h4>
                        <table style="font-size: 13pt" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="text-align: center;width: 40%">
                                    <srong>Priority areas</srong>
                                </th>
                                <th style="text-align: center"><strong>Indicative Projects/ Researchable Areas</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width: 40%"><b>1. Environment and Agricultural Practices</b></td>
                                <td>
                                    <ul>
                                        <li>Time-series study on agrometeorological conditions</li>
                                        <li>Characterization of selection environments for crop varieties</li>
                                        <li>Species adaption, shift and composition due to climate change</li>
                                        <li>Impact assessment of climate change to agriculture sector</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><b>2. Waste Management/ Utilization</b></td>
                                <td>
                                    <ul>
                                        <li>Community practice on solid waste management</li>
                                        <li>Farm/Household management practices of solid wastes</li>
                                        <li>Status of implementation of solid waste management of the LGUs</li>
                                        <li>Use of wastes into feeds, fertilizers, etc.</li>
                                        <li>Environment impact assessment of processing wastes</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><b>3. Productivity Enhancement and Production Management System</b>
                                </td>
                                <td>
                                    <ul>
                                        <li>Development of location-specific nutrient management technologies,</li>
                                        <li>Crop establishment and water management technologies</li>
                                        <li>Development of mass propagation methods/techniques for crops</li>
                                        <li>Development of pest management technologies for different crop ecosystems</li>
                                        <li>Development of postharvest technologies</li>
                                        <li>Pest and disease profiling in major areas</li>
                                        <li>Off-season production of crops</li>
                                        <li>Identification of suitable low cost feed ingredients for poultry and livestock
                                        </li>
                                        <li>Alternative housing system for poultry</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><b>4. Post-production and Processing Technologies</b></td>
                                <td>
                                    <ul>
                                        <li>Improving product quality</li>
                                        <li>Value-adding in specific commodities for increased profitability/development of
                                            new products
                                        </li>
                                        <li>Prolonging shelf-life products</li>
                                        <li>Establishing common quality standards for various products and processes</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><b>5. Organic Farming</b></td>
                                <td>
                                    <ul>
                                        <li>Development of non-chemical methods of controlling pests and diseases</li>
                                        <li>Organic fertilizer enrichment with biologically active microorganisms</li>
                                        <li>Studies on long-term effects and dynamics of organic fertilizer</li>
                                        <li>Use if indigenous composting activators/agents</li>
                                        <li>Development or enhancement of natural technology in animal production</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><b>6. Community Integration and Adaptation Strategies</b></td>
                                <td>
                                    <ul>
                                        <li>Technology adoption studies</li>
                                        <li>Village-level integration of technologies/ Farmers’ perspective in technology
                                            transfer
                                        </li>
                                        <li>Training needs assessment</li>
                                        <li>Training course development and delivery</li>
                                        <li>Strengthening ICT knowledge management and exchange</li>
                                        <li>Verification of cost-reducing technologies</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><b>7. Capacity Development (Institution, Faculty, Students)</b></td>
                                <td>
                                    <ul>
                                        <li>Development of faculty/ R&amp;D human resource through ICT utilization</li>
                                        <li>Assessing student competencies</li>
                                        <li>Development of effective learning modalities/teaching strategies</li>
                                        <li>Enhancing curriculum content</li>
                                        <li>Integrating research outputs in instruction, extension and production</li>
                                        <li>Instructional program evaluation</li>
                                        <li>Development and validation of instructional materials</li>
                                        <li>Test development</li>
                                        <li>Gender and development</li>
                                        <li>Strengthening research orientation of faculty and students</li>
                                        <li>Policy advocacy</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><b>8. Food Safety</b></td>
                                <td>
                                    <ul>
                                        <li>Policy advocacy</li>
                                        <li>Analysis of pesticides residue in plant/animal products</li>
                                        <li>Detection of contaminants in meat and meat products</li>
                                        <li>Policy advocacy on food safety</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><b>9. Enterprise Development</b></td>
                                <td>
                                    <ul>
                                        <li>Development of profitable production technology packages</li>
                                        <li>Establishment of village level enterprises for products</li>
                                        <li>Developing market niches for products</li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="extension_services" style="margin-top: 50px; padding-top: 40px" class="index-contents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom: 50px" class="text-green text-center"><strong>EXTENSION SERVICES</strong></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="font-size: 12pt;text-indent: 60px">
                                        <p>
                                            The Extension program is an integral component of the College which is committed
                                            in extending services, particularly to the rural folks by helping them improve
                                            their quality of life. Through the program, barangay folks are provided with
                                            training on skills development on various technological fields thus enabling
                                            them to acquire other livelihood opportunities.
                                        </p>
                                        <p>The program includes also the provision of other training which is aligned with
                                            the curricular offerings of the College and information dissemination for a
                                            which will enhance the awareness and knowledge about relevant issues and
                                            concerns. </p>
                                        <p>
                                            The program’s objectives and activities are in conformity with the thrusts and
                                            goals of the national, regional, provincial and institutional plans of
                                            development which collectively are aimed in uplifting the quality of life of the
                                            people in communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-lg-5">
                        <div id="projects" class="col-md-12">
                            <h3 style="margin-bottom: 50px" class="text-green text-center"><strong>RESEARCH PROJECTS</strong></h3>
                        </div>
                    </div>
                    <div class="custom-row">
                        <div class="custom-col block text-center card-box px-3">
                            <img src="./../template/images/logo.png" class="img-fluid h-auto mx-auto d-block py-3" style="width: 7rem">
                            <h4 class="font-weight-bolder">Project Title 1</h4>
                            <p class="custom-truncate" style="font-size: 14px;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam animi aperiam aspernatur atque beatae consectetur cum deserunt eaque earum eius eligendi error eum eveniet explicabo facere, fugiat harum id inventore itaque neque nisi non numquam officiis quis quo similique soluta totam unde ut velit veritatis vitae voluptates. Recusandae, veniam.
                            </p>
                            <a href="#" data-bs-toggle="tooltip" title="Click to open the official website">Visit our website!</a>
                        </div>
                        <div class="custom-col block text-center card-box px-3">
                            <img src="./../template/images/logo.png" class="img-fluid h-auto mx-auto d-block py-3" style="width: 7rem">
                            <h4 class="font-weight-bolder">Project Title 1</h4>
                            <p class="custom-truncate" style="font-size: 14px;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam animi aperiam aspernatur atque beatae consectetur cum deserunt eaque earum eius eligendi error eum eveniet explicabo facere, fugiat harum id inventore itaque neque nisi non numquam officiis quis quo similique soluta totam unde ut velit veritatis vitae voluptates. Recusandae, veniam.
                            </p>
                            <a href="https://minsu.edu.ph/storage/1945/ra-10596.pdf" target="_blank">
                                <i style="margin-right: 8px" class="fa fa-file-pdf-o"></i>
                                Read more about us!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const maxLength = 250;

            document.querySelectorAll('.custom-truncate').forEach(el => {
                const originalText = el.textContent.trim();
                if (originalText.length > maxLength) {
                    el.textContent = originalText.slice(0, maxLength) + '…';
                }
            });
        });
    </script>

    <style>
        .card-box {
            border: 1px solid #AAAAAA;
            border-radius: 20px;
            background-color: #fff;
            padding-bottom: 1rem;
            transition: box-shadow 0.3s ease, transform 0.7s ease; /* smooth transition */
            height: 50vh;
        }
        .card-box:hover {
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
        }
        .custom-row {
            display: flex;
            gap: 10px; /* horizontal and vertical spacing */
            flex-wrap: wrap;
        }

        .custom-col {
            flex: 1 1 30%;
        }.custom-col {
             flex: 1 1 30%;
         }
         .file-view {
             width: 100%;
             height: 27vh;
         }

        /* Tablet screens */
        @media (max-width: 992px) {
            .custom-col {
                flex: 1 1 45%;
            }
        }

        /* Mobile screens */
        @media (max-width: 576px) {
            .custom-col {
                flex: 1 1 100%;
            }
        }

    </style>
    @include('sections.detail-chart')
@endsection
