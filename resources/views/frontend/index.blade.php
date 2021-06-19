@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="section-header pb-6 pb-lg-10 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-1 mb-4">{{app_name()}}</h1>
                <p class="lead text-muted">
                    {!! setting('meta_description') !!}
                </p>

                @include('frontend.includes.messages')
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>

<section class="section section-ld">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 mb-lg-5">Online BMI</h2>
            </div>
            <div class="col-6 col-sm-4 mb-5">
                <a href="#" class="page-preview scale-up-hover-2">
                    <img class="shadow-lg rounded scale" src="{{ asset('img/front_img_3.jpg') }}"
                        alt="Landing page preview">
                    <div class="text-center show-on-hover">
                        <h6 class="m-0 text-center text-white">BMI loyihasini ishlab chiqing!<i
                                class="fas fa-external-link-alt ml-2"></i></h6>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 mb-5">
                <a href="#" class="page-preview scale-up-hover-2">
                    <img class="shadow-lg rounded scale" src="{{ asset('img/front_img_2.jpg') }}"
                        alt="About page preview">
                    <div class="text-center show-on-hover">
                        <h6 class="m-0 text-center text-white">BMI loyihangizni namoyish qiling!<i
                                class="fas fa-external-link-alt ml-2"></i></h6>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 mb-5">
                <a href="#" class="page-preview scale-up-hover-2">
                    <img class="shadow-lg rounded scale" src="{{ asset('img/front_img_1.jpg') }}"
                        alt="Pricing page preview">
                    <div class="text-center show-on-hover">
                        <h6 class="m-0 text-center text-white">BMI natijasini shu yerdayoq bilib oling!<i
                                class="fas fa-external-link-alt ml-2"></i></h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
