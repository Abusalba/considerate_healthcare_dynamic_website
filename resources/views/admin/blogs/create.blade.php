@extends('layouts.admin')
@section('title', 'Create Blog')
@section('content')

<style>
    .cke_notification_warning {
        display: none !important;
    }
</style>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Default select start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>New A Blog</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <form class="row g-3 needs-validation ajaxForm" novalidate
                                            action="{{ route('admin.blogs.store') }}" method="post">
                                            <div class="col-md-12">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" id="title" class="form-control" name="title"
                                                    required placeholder="Title">
                                                <div class="titleErr err"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="date" class="form-label">Date</label>
                                                <input type="date" id="date" class="form-control" name="date"
                                                    required placeholder="Date">
                                                <div class="dateErr err"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" id="image" class="form-control" name="image"
                                                    required placeholder="">
                                                <div class="imageErr err"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" id="description"></textarea>
                                                <div class="descriptionErr err"></div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <!-- Default select end -->

                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
    </div>
    @endsection()