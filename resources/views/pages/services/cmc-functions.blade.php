@extends('layouts.app')
@section('content')
    @php
        //Victoria Campus
            $mmcnames = ['DR. NEDEN GRACE D. HORA','MARIANNE B. PASCUAL, RN','ENGR. CHRISTIAN B. HERNANDEZ','ENGR. MARJUN E. CAGUAY','ENGR. JULY LACSINA','DARIUS M. ABOG', 'DR. JESSE T. ZAMORA', ' HANNAH ALLYSA A. ATIENZA'];
            $mmcpos = ['Institutional Health Office' , 'Institutional Information Officer','Safety Officer','Planning Officer','Surveilance Officer','Health and Safety Marshall', 'Representative from Faculty', 'Representative from Student'];
        //Calapan Campus
            $mccnames = ['DR. ARLYN REDUBLO','MARJORIE JOY M. CASTILLO, RN', 'MARIA GERLIE C. HERNANDEZ, RN','JOEL M. DE LA CRUZ','RONNEL C. MICIANO', 'JESUS BAUTISTA','ALEXIS P. FORTUNATO','SALCEDO B. TANGUID, Ph.D.','JOHN LYNARD A. VIESCA'];
            $mccpos = ['Member (Chairman)','Institutional Health Office' , 'Institutional Information Officer','Safety Officer','Planning Officer','Surveilance Officer','Health and Safety Marshall', 'Representative from Faculty', 'Representative from Student'];
        //Bongabong Campus
        $mbcnames = ['DR. CIEDELLE P. SALAZAR','JOANNE MARIE O. SAPINIT, RN','ANTON F. ANIGAN, RN','JARED M. MELENDRES','ROLAND D. URATE','LEONARDO C. GRESOS','ENRIQUE T. MAGALAY, JR.','JOSABET A. QUITAIN'];
            $mbcpos = ['Member (Chairman)','Institutional Health Office' , 'Institutional Information Officer','Planning Officer','Surveilance Officer','Health and Safety Marshall', 'Representative from Faculty', 'Representative from Student'];
    @endphp

    <div class="about_bg">
        <div class="container">
            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Crisis Management Committee</h1>
                </div>
            </div>
        </div>
    </div>

    <section style="margin-top: 50px; margin-bottom: 50px">


        <div class="container">
            <div class="row">
                <div class="col-md-7" style="padding-right: 40px">
                    <h3>
                        <b> The Crisis Management Committee Duties and Responsibilities</b>
                    </h3>
                </div>
                <div class="col-md-7" style=" text-align: justify;padding-top: 20px">


                    <p><b>The Crisis Management Committee (CMC) shall: </b></p>
                    <p>a. Assess the readiness of MinSU to reopen for face-to-face classes,</p>
                    <p>b. Disseminate appropriate and relevant information to stakeholders;</p>
                    <p>c. Lead the creation of institutional COVID-19 Response Protocols;</p>
                    <p>d. Oversee the implementation of health and safety protocols;</p>
                    <p>e. Conduct of School-based COVID-19 Surveillance Program; Monitor
                        and evaluate the compliance of HEI with this CMO; and,</p>
                    <p>f. Take appropriate measures and interventions when risks and impacts</p>
                    <p>of COVID-19 may exist on the campus or surrounding communities.</p>

                    <p>The CMC shall set a regular forum/meeting to discuss ongoing gaps, issues and concerns and
                        provide appropriate solutions thereof. This will be done every after 2 months or as the need
                        arises. the CMC is encouraged to set up a mechanism or system to monitor and analyze data
                        data information in MinSU to determine patterns or trends of COVID-19 infection as the basis
                        for the implementation of appropriate interventions.</p>

                    <p>1. The CMC shall determine the areas where students and teaching and non teaching
                        personnel tend to congregate or congest and recommend measures to be undertaken
                        MinSU to avoid such occurrences.</p>
                    <p>2. The CMC shall recommend and implement the suspension of limited face-to-face classes if there
                        will be a clustering of unconfirmed cases in the classrooms, laboratories, libraries,
                        cafeterias, dormitories, or other communal areas.</p>

                </div>
                <table class="col-md-5 table">
                    <thead>
                    <style>
                        table, th, td {
                            border: 1px solid black;
                        }
                    </style>
                    <tr style="background-color: forestgreen ; color: white">

                        <th scope="col" style="text-align: center">NAME</th>
                        <th scope="col" style="text-align: center">DESIGNATION (CMC)</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: left">DR. LEVY B ARAGO, JR</td>
                            <td style="text-align: left">CHairman, University President</td>
                        </tr>
                        <tr>
                            <td style="text-align: left">ENGR. WILMA C. DE LOS SANTOS</td>
                            <td style="text-align: left">Co-Chairman, DRRM Director</td>
                        </tr>
                    </tbody>
                    <th colspan="2" style="text-align: center; background-color: #7daa83"><b>VICTORIA CAMPUS</b></th>
                    <tbody>
                    @foreach($mmcnames as $index => $mmcname)
                        <tr>
                            <td style="text-align: left">{{$mmcname}}</td>
                            <td style="text-align: left">{{$mmcpos[$index]}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <th colspan="2" style="text-align: center; background-color: #7daa83"><b>CALAPAN CAMPUS</b></th>
                    <tbody>
                    @foreach($mccnames as $index => $mccname)

                        <tr>
                            <td style="text-align: left">{{$mccname}}</td>
                            <td style="text-align: left">{{$mccpos[$index]}}</td>
                        </tr>


                    @endforeach
                    </tbody>
                    <th colspan="2" style="text-align: center; background-color: #7daa83"><b>BONGABONG CAMPUS</b></th>
                    <tbody>
                    @foreach($mbcnames as $index => $mbcname)

                        <tr>
                            <td style="text-align: left">{{$mbcname}}</td>
                            <td style="text-align: left">{{$mbcpos[$index]}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </section>


@endsection


