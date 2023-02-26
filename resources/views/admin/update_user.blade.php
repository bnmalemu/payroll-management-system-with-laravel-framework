@extends('layouts.admin.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href=" {{ url('/dashboard') }} ">Admin Home</a></li>
                    <li class="breadcrumb-item active">Delete User</li>
                </ol>
            </div>
        </div>
    </div>  
</div>

<section class="content">
    <div class="container-fluid">
        <p>update functionality</p>
    </div>
</section>

@endsection