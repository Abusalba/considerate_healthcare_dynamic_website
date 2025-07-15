@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
@php(extract($state))
<div class="pcoded-content">

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper dashboard__wrapper">
                <div class="page-body">
                    <!-- [ page content ] start -->
                    <div class="row">

                        <div class="col-xl-3 col-md-12">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Blogs</h6>
                                            <h3 class="f-w-700 text-c-black">{{ $blogs }}</h3>    
                                            <!-- <p class="m-b-0">May 23 - June 01 (2017)</p> -->
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-eye bg-c-blue"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                        <div class="col-xl-3 col-md-12">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Abouts</h6>
                                            <h3 class="f-w-700 text-c-black">{{ $abouts }}</h3>
                                            <!-- <p class="m-b-0">May 23 - June 01 (2017)</p> -->
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-eye bg-c-blue"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Contact Us</h6>
                                            <h3 class="f-w-700 text-c-black">{{ $contacts }}</h3>
                                            <!-- <p class="m-b-0">May 23 - June 01 (2017)</p> -->
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-eye bg-c-blue"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection