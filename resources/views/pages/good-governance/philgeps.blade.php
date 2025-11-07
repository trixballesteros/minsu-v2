@extends('layouts.app')
@section('content')
    <body>
    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>PhilGEPS</h1>
                </div>
            </div>

    </div>
    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <p>
                    The <a href="https://www.philgeps.gov.ph/"><i>PhilGEPS</i></a> is the single, centralized electronic
                    portal that serves as the primary and definitive
                    source of information on government procurement.
                </p>
            </div>
            <div style="margin-top: 30px">
                <ol style="list-style-position: inside;padding-left: 0;width: 100%" type="I">
                    @foreach($philgeps as $item)
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
