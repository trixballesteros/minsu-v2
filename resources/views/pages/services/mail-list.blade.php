@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Email List</h1>
                </div>

        </div>
    </div>
    <section class="welcome_about">

        <div class="container">
            <div class="row">
                <div style="overflow-x: scroll" class="col-mb-12">
                    <table class="table table-striped">
                        <thead>
                        <th>Campus</th>
                        <th>Office</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td>{{$item->campus}}</td>
                            <td>{{$item->office}}</td>
                            <td>{{$item->lastname}}</td>
                            <td>{{$item->firstname}}</td>
                            <td>{{$item->position}}</td>
                            <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
