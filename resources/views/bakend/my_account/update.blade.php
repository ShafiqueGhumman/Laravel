@extends('bakend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">My Account Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">My Account</a></li>
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
                                <h3 class="card-title">My Account Page</h3>
                            </div>
                            <form action="{{url('admin/my_account/update')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control"
                                            value="{{$getrecord->name}}"    placeholder="Enter Name">
                                            <span style="color: red" {{$errors->first('name')}}></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control"
                                            value="{{$getrecord->email}}"    placeholder="Enter Email">
                                                <span style="color: red" {{$errors->first('email')}}></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Password
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="password" class="form-control"
                                                placeholder="Enter Password">
                                                (Leave Blank if you are not changing the password)
                                        </div>
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
