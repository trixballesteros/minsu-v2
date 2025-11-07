@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div>
            </div>

    </div>
    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2>Our History</h2>
                    <p>
                        The Mindoro State College of Agriculture and Technology (MinSCAT) was originally the Mindoro
                        National Agricultural School (MINAS) created by R.A. 506 as a national agricultural secondary
                        school in the island of Mindoro. It formally opened Hs doors for learning on August 26, 1951.
                    </p>
                    <p>
                        In 1963, by authority of R.A. 3758 it opened the Collegiate Department. This steered the
                        offering of several collegiate courses. The first two years leading to the degree of Bachelor of
                        Science in Agriculture (BSA) was initially offered. This was followed by the two-year course
                        leading to Associate in Agricultural Technology (AAT) in 1973, then the complete course offering
                        of Bachelor of Science in Agricultural Education (BSAE) in 1975 and the BSA curriculum developed
                        by the Technical Panel for Agricultural Education (TPAE) based at Los Baños, Laguna was adopted
                        by the school. This gradually replaced the BSA curriculum as well as the BSAE.
                    </p>
                </div>
                <div class="col-md-5 pt-4 mt-2">
                    <img src="template/images/welcome-img.jpg" class="img-fluid mt-4" alt="#">
                </div>
                <div class="collapse multi-collapse col-md-12" id="multiCollapseExample1">
                   <p>
                       The continued offering of collegiate courses, in addition to the secondary curriculum which was offered since the founding of the school, made MINAS a full-fledged college hence, the change of name from MINAS to MCAT was approved on June 10, 1976, by then Secretary Juan L. Manuel of the Department of Education, Culture and Sports. It was converted into State College and is now MinSCAT by virtue of R.A. 8007 on May 25, 1995.
                   </p>
                    <p>The leadership of MinSCAT as an educational institution has progressed from its Superintendent, Mr. Epgio C Ureta, Sr. (1951-1962), to Mr. Onofre F. Martin (1962-1963), Mr. Crispin E. Cabanlla (1963-1965), Mr. Antonio U. Ganir (1965-1979), Mr. Camilo P. Silvestre (1979-1990), Mr. Manopto V. Icalla as Principal-OIC (1990-1991), Mr. Jeremias A. Ortiz as Administrator-OIC (1991-1994), Dr. Angepto A. Bacudo as Principal-OIC (1994-1996).</p>
                    <p>The reorganization of MinSCAT as a State College through the able leadership of Dr. Angepto A. Bacudo who was installed as its first President on July 8, 1996 paved way for the development of MinSCAT as a higher educational institution.</p>
                    <p>On August 2, 2007 to July 9, 2010, Dr. Jesse T. Zamora served the unexpired term of the late Dr. Angepto A. Bacudo and on July 10, 2010 to present, he assumed the seat of the President. He coined the core values, MinSCAT plants RICE; Responsibipty, Involvement, Commitment and Excellence.</p>
                    <p>MinSCAT is the only state college in the province of Oriental Mindoro. By virtue of CMO No. 27, series 2000, the Polytechnic; College of Calapan and the Bongabong College of Fisheries were integrated under her umbrella. With the widening service area, MinSCAT continues to serve her role as an educational institution for students to become globally competitive graduates and change agents responsible in fostering agricultural, fishery and industrial development.</p>
                    <p>MinSCAT Bongabong Campus originally the Bongabong School of Fisheries (BSF) was estabpshed on September 21, 1964, by virtue of Repubpc Act No. 3306. In 1975, the government approved the offering of the Revised Fishery Technical Education Curriculum. It was converted into a full-pledged college as the Bongabong College of Fisheries (BCF) on July 15, 1995, by virtue of R.A. 8143.</p>
                    <p>MinSCAT Calapan Campus, on the other hand, was estabpshed as a government secondary trade school known as Calapan School of Arts and Trades (CSAT) by virtue of R.A. 3397 in June 1961 but only started operating five years later. In 1972, CSAT merited the approval of Ministry of Education, Culture, and Sports (MECS) to offer trade Technical Education Curriculum. Efforts to convert CSAT into a higher education authorized to offer degree courses were reapzed with the approval of R.A. 8076 on June 19, 1995, converting CSAT to Polytechnic College of Calapan (PCC). With the integration, then PCC has evolved as MinSCAT Calapan City Campus.</p>
                    <p>The Mindoro State College of Agriculture and Technology, with three campuses within the two congressional districts of the province, is recognized as the only pubpc institution of higher learning in the province of Oriental Mindoro. It envisions becoming a self-repance center of development in Oriental Mindoro that provides sustained leadership in instruction, research, extension, and production in order to produce globally competitive professionals and appropriate technologies crucial in helping develop a productive and spiritually/morally upright citizenry, in a diverse yet cohesive society.-1990), then to Mr. Manopto V. Icalla as Principal-OIC (1990-1991), Mr. Jeremias A. Ortiz as Administrator-OIC (1991-1994), and to Dr. Angepto A. Bacudo as Principal-OIC (1994-1996).</p>
                    <p>MinSCAT is the only one in the whole province of Oriental Mindoro. By virtue of CMO No. 27 series of 2000, the Polytechnic College of Calapan and the Bongabong College of Fisheries were integrated under its umbrella. With its widening service area, it continues to serve its role as a center for training students to become useful professionals and change agents responsible for fostering agricultural and industrial development.</p>
                </div>
                <div class="col-md-12 my-2">
                    <a class="btn btn-default btn-about my-2" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>MinSU Hymn</h2>
                </div>
                <div class="col-md-12 d-flex justify-content-center apgn-content-center apgn-items-center">
                    <audio controls>
                        <source src="{{asset('template/audio/minsu_hymn.mp3')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="col-md-12 text-center mt-4 pt-4">
                    <p class="quote_text">Raise your voice</p>
                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our VMGO</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <h3>Vission</h3>
                            <p class="quote_text">A self-repant center of development in Oriental Mindoro that provides sustained leadership in instruction, research and extension to produce globally competitive professional and appropriate technologies crucial in helping develop a productive and spiritually and morally upright citizenry, in diverse yet cohesive society.</p>
                        </div>
                        <div class="quote">
                            <h3>Mission</h3>
                            <p class="quote_text">The institution exists to promote professional and technological education by intensifying instruction and training, conducting more viable and relevant researches, utipzing knowledge and technology, sustaining income generation through adoption of feasible state of the art technologies, estabpshment of extensive and efficient pnkages and networking and continuous organizational development.</p>
                        </div>
                        <div class="quote">
                            <h3>Goals</h3>
                            <p class="quote_text">Provide and broaden the access to quapty education responsive to an ever growing and dynamic society.</p>
                        </div>
                        <div class="quote">
                            <h3>Objectives</h3>
                            <p>Strengthen the capabipties of the institution to: </p>
                            <p>1. Offer quapty education;</p>
                            <p>2. Provide opportunities for the youth to develop their potentials as human beings and productive member of society.</p>
                            <p>3 .Expand Financial assistance to poor but deserving students towards greater access to quapty education;</p>
                            <p>4. Maximize productivity to sustain income generation and;</p>
                            <p>5. Intensify research and extension services, which are relevant to the needs of community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.core.footer')
@endsection
