@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Data Privacy Notice</h1>
                </div>
            </div>

    </div>
    <section class="welcome_about">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-category_block pt-0">
                        <h3>FAQs</h3>
                        <ul>
                            <li><a  href="#datasubject">What are your rights as data subject?<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li><a  href="#datatype">What type of data we collect and who are our data subjects? <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li><a  href="#collectdata">How dow we collect data?<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li><a  href="#usedata">How dow we use data?<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li><a  href="#storedata">How dow we store data?<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li><a  href="#disclosedata">When and to whom do we disclose data?<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li><a  href="#disposedata">How long is data retained and how it is disposed?<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div id="dataprivacy" class="col-md-12">
                            <h3 style="margin-bottom: 50px" class="text-green text-center"><strong>DATA PRIVACY NOTICE</strong></h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div style="font-size: 14pt;text-indent: 60px">
                            <p>
                                Mindoro State University (MinSU) collects, uses, stores, discloses, and disposes personal data pursuant to its mandate as a public higher education institution and in accordance with Republic Act No. 10173 or the “Data Privacy Act of 2012” (DPA) and its implementing rules and regulations. It adheres to the general principles of transparency, legitimate purpose, and proportionality.
                            </p>
                        </div>
                    </div>
                    <section id="datasubject" style="margin-top: 50px; padding-top: 40px" class="index-contents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom: 50px" class="text-green text-center"><strong>WHAT ARE YOUR RIGHTS AS DATA SUBJECT?</strong></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="font-size: 12pt;text-indent: 60px">
                                        <p>
                                            You have the right to:
                                        </p>
                                       <ul>
                                           <li> Information </li>
                                           <li> Access </li>
                                           <li> Data Portability </li>
                                           <li> Rectification </li>
                                           <li> Erasure or Blocking </li>
                                           <li> Object </li>
                                           <li> File a Complaint </li>
                                           <li> Damages </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="datatype" style="margin-top: 50px; padding-top: 40px" class="index-contents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom: 50px" class="text-green text-center"><strong>WHAT TYPE OF DATA WE COLLECT AND WHO ARE OUR DATA SUBJECTS?</strong></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="font-size: 12pt;text-indent: 60px">
                                        <p>
                                            MinSU collects the following personal data of its <b> students, employees </b> including <b> personnel covered by Contract of Service (COS) or Job Order (JO), visitors/clients, </b> and <b> partners/external contracting parties </b>:
                                        </p>
                                        <ul>
                                            <li> <b> Personal Information (PI) </b> of its data subjects like name, sex, address, image/ photograph/ video, and contact details </li>
                                            <li> <b>  Sensitive Personal Information (SPI) </b> of its students and employees including personnel covered by COS or JO such as marital status, age, religious affiliations, health, education, and administrative records, details of the duly issued identification cards by government agencies like TIN, Government Service Insurance System (GSIS), Social Security System (SSS), and/or PhilHealth </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="collectdata" style="margin-top: 50px; padding-top: 40px" class="index-contents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom: 50px" class="text-green text-center"><strong>HOW DO WE COLLECT DATA?</strong></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-13">
                                    <div style="font-size: 12pt;text-indent: 60px">
                                        <p>
                                            MinSU collects personal data through the following processes:
                                        </p>
                                        <ul>
                                            <li>  Application for admission and/or enrolment for students </li>
                                            <li>  Application, hiring, and/or promotion for employees including personnel covered by COS or JO</li>
                                            <li>  Entering into agreements for partners/external contracting parties </li>
                                            <li>  Visit and/or availment of external services for visitors/clients </li>
                                            <li>  Availment of internal services  </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="usedata" style="margin-top: 50px; padding-top: 40px" class="index-contents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom: 50px" class="text-green text-center"><strong>HOW DO WE USE DATA?</strong></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="font-size: 12pt;text-indent: 60px">
                                        <p>
                                            MinSU use the collected data primarily to comply with its duties and responsibilities as a public higher education institution such as:
                                        </p>
                                        <ul>
                                            <li> To provide good quality education to its students and continually improve its curriculum through undergoing quality assurance and accreditation </li>
                                            <li> To undertake and encourage research and extension services </li>
                                            <li> To ensure safety, security, welfare, good health, and well-being of all of its stakeholders </li>
                                            <li> To respond to and process requests for internal and external services </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="storedata" style="margin-top: 50px; padding-top: 40px" class="index-contents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom: 50px" class="text-green text-center"><strong>HOW DO WE STORE DATA?</strong></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="font-size: 12pt;text-indent: 60px">
                                        <p>
                                            MinSU stores data with strict confidentiality. Physical and organizational security measures through implementation of privacy policies, data access control, and procurement of data protective resources like Closed Circuit Television (CCTV) among others are in place to protect the safety and integrity of the collected data and to guard against any unauthorized processing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="disclosedata" style="margin-top: 50px; padding-top: 40px" class="index-contents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom: 50px" class="text-green text-center"><strong>WHEN AND TO WHOM DO WE DISCLOSE DATA?</strong></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="font-size: 12pt;text-indent: 60px">
                                        <p>
                                            MinSU discloses data in cases related to duties and responsibilities as a state university such as those related to accreditation, research, and government transactions subject to applicable clearance and execution of data sharing agreement, as the case may be.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="disposedata" style="margin-top: 50px; padding-top: 40px" class="index-contents">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom: 50px" class="text-green text-center"><strong>HOW LONG IS DATA RETAINED AND HOW IS IT DISPOSED?</strong></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="font-size: 12pt;text-indent: 60px">
                                        <p>
                                            MinSU retains and disposes the data collected in accordance with its Records Disposition Schedule (RDS) in line with the Republic Act No. 9470 or the “National Archives of the Philippines Act of 2007” and its implementing rules and regulations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>


    </section>

@endsection
