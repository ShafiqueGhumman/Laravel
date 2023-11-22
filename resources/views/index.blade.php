@extends('layouts.app')
@section('content')
<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 position-fixed d-none d-lg-block">
            <img src="{{ url('public/img/' . @$getrecord[0]->profile) }}" width="475px" height="100px"
            style="background-size:cover;
            background-repeat:no-repeat;
            background-position:top;
            height:calc(100vh - 80px);
            z-index:111;
            border-radius:30px;
            box-shadow:0 0 7px rgba(0,0,0,9)">
        </div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="{{ url('public/img/' . @$getrecord[0]->profile) }}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h1 class="text-uppercase poppins-font">{{ @$getrecord[0]->your_name }}
                    <span>{{ @$getrecord[0]->work_experience }}</span></h1>
                <p class="open-sans-font">{{ @$getrecord[0]->description }}</p>
                <a class="button" href="about.html">
                    <span class="button-text">more about me</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
