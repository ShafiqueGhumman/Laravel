@extends('bakend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">About Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
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
                                <h3 class="card-title">About Page</h3>
                            </div>
                            <form action="{{url('admin/about/post')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="first_name" class="form-control"
                                                placeholder="Enter First Name" value="{{@$getrecord[0]->first_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="last_name" class="form-control"
                                                placeholder="Enter your Last Name" value="{{@$getrecord[0]->last_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Age</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="age" class="form-control"
                                                placeholder="Enter your Age " value="{{@$getrecord[0]->age}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nationality</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nationality" class="form-control"
                                                placeholder="Enter Nationality" value="{{@$getrecord[0]->nationality}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Freelance</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="freelance" class="form-control"
                                                placeholder="Enter Freelance" value="{{@$getrecord[0]->freelance}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="address" class="form-control"
                                                placeholder="Enter Address" value="{{@$getrecord[0]->address}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Enter Phone" value="{{@$getrecord[0]->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter Email" value="{{@$getrecord[0]->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Skype</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="skype" class="form-control"
                                                placeholder="Enter Skype" value="{{@$getrecord[0]->skype}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Langages</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="langages" class="form-control"
                                                placeholder="Enter Langages" value="{{@$getrecord[0]->langages}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Years of Experience</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="years_of_experience" class="form-control"
                                                placeholder="Enter Years of Experience" value="{{@$getrecord[0]->years_of_experience}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Completed Projects</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="completed_projects" class="form-control"
                                                placeholder="Enter Completed Projects" value="{{@$getrecord[0]->completed_projects}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Happy Customers</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="happy_customers" class="form-control"
                                                placeholder="Enter Happy Customers" value="{{@$getrecord[0]->happy_customers}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Awards Won</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="awards_won" class="form-control"
                                                placeholder="Enter Awards Won" value="{{@$getrecord[0]->awards_won}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Html</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="html" class="form-control"
                                                placeholder="Html" value="{{@$getrecord[0]->html}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Javascript</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="javascript" class="form-control"
                                                placeholder="Javascript" value="{{@$getrecord[0]->javascript}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">CSS</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="css" class="form-control"
                                                placeholder="CSS" value="{{@$getrecord[0]->css}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">PHP</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="php" class="form-control"
                                                placeholder="PHP" value="{{@$getrecord[0]->php}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">WORDPRESS</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="wordpress" class="form-control"
                                                placeholder="WORDPRESS" value="{{@$getrecord[0]->wordpress}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">JQUERY</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="jquery" class="form-control"
                                                placeholder="JQUERY" value="{{@$getrecord[0]->jquery}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">ANGULAR</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="angular" class="form-control"
                                                placeholder="ANGULAR" value="{{@$getrecord[0]->angular}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">React</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="react" class="form-control"
                                                placeholder="React" value="{{@$getrecord[0]->react}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Year of Experience</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="year_of_experience" class="form-control"
                                                placeholder="Year of Experience" value="{{@$getrecord[0]->year_of_experience}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Title" value="{{@$getrecord[0]->title}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sub Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="sub_title" class="form-control"
                                                placeholder="Sub Title" value="{{@$getrecord[0]->sub_title}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="description" class="form-control"
                                                placeholder="Description" value="{{@$getrecord[0]->description}}">
                                        </div>
                                        <input type="hidden" name="id" value="{{@$getrecord[0]->id}}">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="add_to_update" id="add_to_update"
                                        value="@if (count($getrecord) > 0) Update @else Add @endif "
                                        class="btn btn-info">
                                        @if (count($getrecord) > 0)
                                            Update
                                        @else
                                            Add
                                        @endif
                                    </button>
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
