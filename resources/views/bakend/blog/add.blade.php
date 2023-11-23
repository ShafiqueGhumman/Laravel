@extends('bakend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Add Blog</a></li>
                            <li class="breadcrumb-item active">Blog</li>
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
                                <h3 class="card-title">Add Blog</h3>
                            </div>
                            <form action="{{url('admin/blog/add')}}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Image
                                            <span style="color:red;">*</span>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Title
                                            <span style="color:red;">*</span>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter your Title" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Description
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control"
                                            placeholder="Blog Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Description Text Editor
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea name="description_text_editor"
                                            class="form-control editor"
                                            placeholder="Blog Description Text Editor"></textarea>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
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

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.0/tinymce.min.js"></script>
 <script type="text/javascript">
    tinymce.init({
        selector: '.editor',
        height:'500px',
        plugins: 'link code image textcolor codesample',
        codesample_languages:[
            {text: 'HTML/XML',value: 'markup'},
            {text: 'Javascript',value: 'javascript'},
            {text: 'CSS',value: 'css'},
            {text: 'PHP',value: 'php'},
            {text: 'Ruby',value: 'ruby'},
            {text: 'Python',value: 'python'},
            {text: 'Java',value: 'java'},
            {text: 'C',value: 'c'},
            {text: 'C#',value: 'csharp'},
            {text: 'C++',value: 'cpp'},
        ],
        toolbar: ['undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'],
        fontSize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
        font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif',

    });
</script>
@endsection
