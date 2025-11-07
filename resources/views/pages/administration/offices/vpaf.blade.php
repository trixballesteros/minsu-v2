@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Office of the Vice President for Administration and Finance</h1>
                </div>

        </div>
    </div>
    <section style="margin-top: 50px; margin-bottom: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="padding-right: 40px">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row p-4">
                                        <div class="col-md-4">
                                            <img style="border: 2px solid #0b5421;width: 100%;object-fit: cover"
                                                 src="/template/images/employee/MinsuVPAF.png" alt="">
                                            <h4 style="margin-top: 20px; text-align: center;">
                                                Joelene C. Leynes
                                            </h4>
                                            <p style="text-align: Center">Vice President for Administration and
                                                Finance</p>
                                        </div>
                                        <div class="col-md-8">
                                            <h3 style="margin-bottom: 20px">
                                                The Vice-President for Administration and Finance (VPAF)
                                            </h3>
                                            <p>
                                                is appointed/designated by the GB upon the recommendation of the
                                                University President. He/She shall be directly responsible to the
                                                University President on all administrative operations, planning, and
                                                finance matters, and shall preside at meetings of the Administrative
                                                Council in the absence of the University President.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 50px" class="row">
                        <div style="width: 100%" class="card">
                            <div class="card-body">
                                <div style="background-color: #0b5421" class="card-header">
                                    <h4 style="color: white">About the Heads of Administrative Services/Divisions</h4>
                                </div>
                                <div class="card-text p-4">

                                    <h4><strong>Heads of Administrative Services/Divisions</strong></h4>
                                    <p>The Division Heads shall be appointed by the GB upon recommendation of
                                        the University President who shall each handle the Divisions of
                                        Administrative, Finance, and Auxiliary Services. They shall provide
                                        supportive and facilitative services to all personnel and units of the
                                        institution. They shall directly be responsible to the Vice-President
                                        for Administration and Finance.</p>
                                    <p>The Administrative Services Division shall be the main responsibility of
                                        the Administration Officer or Director for Administrative Services who
                                        shall be appointed or designated by the University President and
                                        confirmed by the GB. It shall supervise services delivered through the
                                        Human Resource Management Office, the Records Office, the Supply and
                                        Property Services Office, and other allied sections/units that may be
                                        created by the University President in accordance with its
                                        organizational structure.</p>
                                    <p>The Financial Management Services Division shall be headed by a Financial
                                        Management Officer or Director for Finance Services who shall be
                                        appointed or designated by the University President and confirmed by the
                                        GB which shall directly supervise the delivery of services by the Budget
                                        Services Office, the Accounting Services Office, the Cashier’s Office,
                                        and other allied sections that may be created by the University
                                        President in accordance with the organizational structure of the
                                        institution. He/She shall be responsible to the Vice-President for
                                        Administration and Finance</p>
                                    <p>The Auxiliary Services Division shall be headed by a Director for
                                        Auxiliary Services who shall be appointed or designated by the
                                        University President and confirmed by the GB. He/She shall be
                                        responsible to the Vice-President for Administration and Finance for the
                                        effective planning and undertaking of all kinds of services done and/or
                                        rendered by chartered University other than academic, such as health,
                                        food services, physical plant services, machinery services, carpentry
                                        services, janitorial services, security services, light and water
                                        services and other allied sections that maybe created by the University
                                        President in accordance with the organizational structure of the
                                        institution.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div style="background-color: #0b5421" class="card-header">
                                <h4 style="color: white">Vice President's Corner</h4>
                            </div>
                            <div class="card-text p-4">
                                <div class="d-flex align-items-center align-content-center justify-content-center"
                                     style="height: 150px;color: #6e6e6e">
                                    <h4 class="text-center">No item found</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-top: 40px">
                        <div class="card-body">
                            <div style="background-color: #0b5421" class="card-header">
                                <h4 style="color: white">Announcements</h4>
                            </div>
                            <div class="card-text">
                                <div class="d-flex align-items-center align-content-center justify-content-center"
                                     style="height: 150px;color: #6e6e6e;width: 100%;">
                                    <h4 class="text-center">No item found</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
