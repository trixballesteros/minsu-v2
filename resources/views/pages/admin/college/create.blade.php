@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between mt-4">
            <h3>Add College</h3>
            <ol class="breadcrumb mb-4 text-right">
                <li class="breadcrumb-item">Colleges</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <div class="row">
            <college-create home-route="{{ route('admin.colleges.index') }}"/>
        </div>
    </div>
@endsection
