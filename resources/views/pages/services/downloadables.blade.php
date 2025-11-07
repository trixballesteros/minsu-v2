@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Downloadables</h1>
                </div>

        </div>
    </div>
    <section class="welcome_about">
        <div class="container">
{{--            <div class="row">--}}
{{--                <h3>Compliance with Section 93</h3>--}}
{{--                <hr style="width: 100%;">--}}
{{--                <p>--}}
{{--                    The <i>Transparency Seal</i>, prominently displayed on the main page of the website of a particular--}}
{{--                    government agency, is a certificate that it has complied with the requirements of Section 93.--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    Sec. 93. <i>Transparency Seal</i>. To enhance transparency and enforce accountability, all national--}}
{{--                    government agencies shall maintain a transparency seal on their official websites. The transparency--}}
{{--                    seal shall contain the following information: (i) the agency’s mandates and functions, names of its--}}
{{--                    officials with their position and designation, and contact information; (ii) annual reports, as--}}
{{--                    required under National Budget Circular Nos. 507 and 507-A dated January 31, 2007 and June 12, 2007,--}}
{{--                    respectively, for the last three (3) years; (iii) their respective approved budgets and--}}
{{--                    corresponding targets immediately upon approval of this Act; (iv) major programs and projects--}}
{{--                    categorized in accordance with the five key results areas under E.O. No. 43, s. 2011; (v) the--}}
{{--                    program/projects beneficiaries as identified in the applicable special provisions; (vi) status of--}}
{{--                    implementation and program/project evaluation and/or assessment reports; and (vii) annual--}}
{{--                    procurement plan, contracts awarded and the name of contractors/suppliers/consultants. The--}}
{{--                    respective heads of the agencies shall be responsible for ensuring compliance with this section.--}}
{{--                </p>--}}
{{--            </div>--}}
            <div style="margin-top: 30px">
                <ol style="list-style-position: inside;padding-left: 0;width: 100%" type="I">
                    @foreach($downloadables as $item)
                        <div class="row">
                            <div class="card" style="width: 100%;margin-bottom: 20px">
                                <div class="card-body">
                                    <div title="Click to expand"
                                         style="cursor: pointer;background-color: #043616;color: white"
                                         class="card-header"
                                         id="headingOne"
                                         data-target="#parent-{{$item->id}}" aria-expanded="true"
                                         aria-controls="parent-{{$item->id}}">
                                        <li style="margin-left: 15px">
                                            {{$item->name}}
                                        </li>
                                    </div>

                                    <div id="parent-{{$item->id}}" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div style="padding: 15px" class="card-body">
                                            <ul style="list-style: none">
                                                @foreach($item->children as $child_item)
                                                    @if($child_item->file_url)
                                                        <li style="list-style: none">
                                                            <a href="{{$child_item->file_url}}">
                                                                <i style="margin-right: 8px;color: #043616"
                                                                   class="fa fa-file-pdf-o"></i>{{$child_item->name}}
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <div title="Click to expand" style="cursor: pointer; margin-bottom: 15px"
                                                                 data-toggle="collapse"
                                                                 data-target="#child_item-{{$child_item->id}}"
                                                                 aria-expanded="true"
                                                                 aria-controls="child_item-{{$child_item->id}}">
                                                                <i style="margin-right: 8px;color: #043616"
                                                                   class="fa fa-folder"></i>
                                                                {{$child_item->name}}
                                                            </div>
                                                            <div style="margin-bottom: 20px" id="child_item-{{$child_item->id}}" class="collapse">
                                                                <ul style="list-style: none">
                                                                    @foreach($child_item->children as $child_item)
                                                                        @if($child_item->file_url)
                                                                            <li style="list-style: none">
                                                                                <a href="{{$child_item->file_url}}">
                                                                                    <i style="margin-right: 8px"
                                                                                       class="fa fa-file-pdf-o"></i>
                                                                                    {{$child_item->name}}
                                                                                </a>
                                                                            </li>
                                                                        @else
                                                                            <li>
                                                                            <li>
                                                                                <div title="Click to expand" style="cursor: pointer; margin-bottom: 15px"
                                                                                     data-toggle="collapse"
                                                                                     data-target="#child_item-{{$child_item->id}}"
                                                                                     aria-expanded="true"
                                                                                     aria-controls="child_item-{{$child_item->id}}">
                                                                                    <i style="margin-right: 8px;color: #043616"
                                                                                       class="fa fa-folder"></i>
                                                                                    {{$child_item->name}}
                                                                                </div>
                                                                                <div style="margin-bottom: 20px" id="child_item-{{$child_item->id}}" class="collapse">
                                                                                    <ul style="list-style: none">
                                                                                        @foreach($child_item->children as $child_item)
                                                                                            @if($child_item->file_url)
                                                                                                <li style="list-style: none">
                                                                                                    <a href="{{$child_item->file_url}}">
                                                                                                        <i style="margin-right: 8px"
                                                                                                           class="fa fa-file-pdf-o"></i>
                                                                                                        {{$child_item->name}}
                                                                                                    </a>
                                                                                                </li>
                                                                                            @else
                                                                                                <li>
                                                                                                    <i style="margin-right: 8px;color: #043616"
                                                                                                       class="fa fa-folder">
                                                                                                         {{$child_item->name}}
                                                                                                    </i>
                                                                                                </li>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </div>
                                                                            </li>
                                                                            </li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
