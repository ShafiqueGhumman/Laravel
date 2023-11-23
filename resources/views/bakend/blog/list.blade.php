@extends('bakend.layouts.app')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blog Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
        @include('message')
        <a href="{{url('admin/blog/add')}}" class="btn btn-primary">Add Blog</a>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Description Text Editor</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getrecord as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>
                                        @if (!empty($value->image))
                                        <img src="{{url('public/blog/'. $value->image)}}"
                                        style="width:80px"; height="80px"; >
                                        @endif
                                    </td>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->description}}</td>
                                    <td>{!!$value->description_text_editor !!}</td>
                                    <td>
                                        <a href="{{url('admin/blog/edit/'.$value->id)}}"
                                         class="btn btn-primary">Edit</a>
                                        <a href="{{url('admin/blog/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->

@endsection


