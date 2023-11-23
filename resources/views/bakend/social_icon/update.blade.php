@extends('bakend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Social Icons</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Social Icon</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                @include('message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Social Icon Page</h3>
                            </div>
                            <form action="{{url('admin/social_icon/update/'.$getrecord->id)}}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control"
                                            value="{{$getrecord->name}}"    placeholder="Enter Name" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control"
                                            value="{{$getrecord->email}}" placeholder="Enter Email" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mobile
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="mobile" class="form-control"
                                            value="{{$getrecord->mobile}}" placeholder="Enter Mobile" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Facebook
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="facebook" class="form-control"
                                            value="{{$getrecord->facebook}}" placeholder="Enter Facebook" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Twitter
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="twitter" class="form-control"
                                            value="{{$getrecord->twitter}}" placeholder="Enter Twitter" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Youtube
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="youtube" class="form-control"
                                            value="{{$getrecord->youtube}}" placeholder="Enter Youtube" >
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Update</button>
                                        <a href="" class="btn btn-default float-right">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection


