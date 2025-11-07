<header >
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('welcome')}}"><img src="{{asset('template/images/responsive-logo.png')}}" class="responsive-logo img-fluid" alt="responsive-logo"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                    <span class="icon-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('about.history')}}">History</a></li>
                                <li><a class="dropdown-item" href="{{route('about.vmgo')}}">VMGO</a></li>
                                <li><a class="dropdown-item" href="{{route('about.hymn')}}">Hymn</a></li>
                                <li><a class="dropdown-item" href="{{route('about.core-values')}}">Core Values</a></li>
                                <li><a class="dropdown-item" href="{{route('about.quality-policy')}}">Quality Policy</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Good Governance
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('good-governance.citizens-charter')}}">Citizen's Charter</a></li>
                                <li><a class="dropdown-item" href="{{route('good-governance.transparency')}}">Transparency</a></li>
                                <li><a class="dropdown-item" href="{{route('good-governance.freedom-of-information')}}">Freedom of Information</a></li>
                                <li><a class="dropdown-item" href="{{route('good-governance.philgeps')}}">PhilGEPS</a></li>
                                <li><a class="dropdown-item" href="{{route('good-governance.data-privacy-notice')}}">Data Privacy Notice</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Academics
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('academics.admission')}}">Admission</a></li>
{{--                                <li><a class="dropdown-item" href="{{route('academics.programs')}}">Programs</a></li>--}}
{{--                                <li><a class="dropdown-item" href="/programs">Programs</a></li>--}}
                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false" href="#">Programs</a>
                                    <ul class="dropdown-menu dropdown-menu1" style="left: -264px">
                                        <li><a class="dropdown-item" href="https://minsugradschool.minsu.edu.ph">Graduate School</a></li>
                                        <li><a class="dropdown-item" href="{{route('academics.programs')}}">Academic Offerings</a></li>
                                    </ul>

                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false" href="#">Offices</a>
                                    <ul class="dropdown-menu dropdown-menu1" style="left: -264px">
                                        <li><a class="dropdown-item" href="https://sites.google.com/view/minsu-osas/home"target="_blank" rel="noopener noreferrer">Student Affairs and Services</a></li>
                                        <li><a class="dropdown-item" href="{{route('academics.offices.guidance')}}">Guidance Counselor</a></li>
                                        <li><a class="dropdown-item" href="{{route('academics.offices.registrar')}}">Registrar's Office</a></li>
                                        <li><a class="dropdown-item" href="{{route('academics.offices.nstp')}}">NSTP</a></li>
                                    </ul>
                                </li>
                                {{--                                <li><a class="dropdown-item" href="{{route('academics.students')}}">Students</a></li>--}}
                                {{--                                <li><a class="dropdown-item" href="{{route('academics.alumni')}}">Alumni</a></li>--}}
                            </ul>
                        </li>
                        <li class="nav-logo">
                            <a href="/" class="navbar-brand"><img style="height: 130px;width: 130px" src="{{asset('template/images/logo.png')}}" class="img-fluid" alt="logo"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Administration
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{route('administration.key-officials')}}">Key Officials</a></li>

                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false" href="#">Offices</a>
                                    <ul class="dropdown-menu dropdown-menu1" style="left: -576px">
                                        <li><a class="dropdown-item" href="{{route('administration.offices.office-of-the-president')}}">Office of the President</a></li>
                                        <li><a class="dropdown-item" href="{{route('administration.offices.office-of-the-vice-president-for-academic-affairs')}}">Office of the Vice President for Academic Affairs</a></li>
                                        <li><a class="dropdown-item" href="{{route('administration.offices.office-of-the-vice-president-for-admin-and-finance')}}">Office of the Vice President for Administration and Finance</a></li>
                                        <li><a class="dropdown-item" href="{{route('administration.offices.office-of-the-vice-president-for-research-extension-and-development')}}">Office of the Vice President for Research, Extension and Development </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('research.research')}}">Research</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" target="_blank" href="https://library.minsu.edu.ph/">Library</a></li>
                                <li><a class="dropdown-item" target="_blank" href="https://forms.office.com/pages/responsepage.aspx?id=VtLh9StUoUu28ySa5gp0xRaBkVopzRhMqCtc41uhx2pURTlITUZLMFpPVzJRRTlRWFBZT0k4WjNISS4u">Graduate Tracer</a></li>
                                {{--                                <li><a class="dropdown-item" href="index-video.html">Medical and Dental</a></li>--}}
                                {{--                                <li><a class="dropdown-item" href="index-video.html">Student Housing</a></li>--}}
                                <li><a class="dropdown-item" target="_blank" href="https://outlook.office365.com/mail/inbox">Mailing</a></li>
                                <li><a class="dropdown-item" target="_blank" href="{{route('services.mail-list')}}">Email List</a></li>
                                <li><a class="dropdown-item" target="_blank" href="{{route('services.jobvacants')}}">Job Vacancy</a></li>
                                <li><a class="dropdown-item" target="_blank" href="{{route('services.downloadables')}}">Downloadables</a></li>
                                <li><a class="dropdown-item" target="_blank" href="{{route('services.cmc-functions')}}">Crisis Management Committee</a></li>


                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
