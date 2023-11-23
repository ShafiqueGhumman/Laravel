@extends('layouts.app')
{{-- {{dd('here')}} --}}
@section('content')
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Article Starts -->
            <article class="col-12">
                <!-- Article Content Starts -->
                <h1 class="text-uppercase text-capitalize">{{$getrecord->title}}</h1>
                <img src="{{url('public/blog/'.$getrecord->image)}}" class="img-fluid" alt="Blog image"/>
                <div class="blog-excerpt open-sans-font pb-5">
                <p>{{$getrecord->description}}</p>
                </div>
                <!-- Article Content Ends -->
            </article>
            <!-- Article Ends -->
        </div>
    </div>
</section>

@endsection
