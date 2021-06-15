@extends('frontend.layouts.app')

@section('title') @lang('labels.frontend.common.support') - {{ config('app.name') }} @endsection

@section('content')
<section class="section section-ld ">
    <div class="page-header page-header-small clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image:url('{{asset('img/cover-01.jpg')}}');">
        </div>
        <div class="container">
            <h3 class="title">
                @lang('labels.frontend.common.support') - {{ config('app.name') }}
            </h3>
        </div>
    </div>

    <div class="section">
        <div class="container text-center">
            <strong>@lang('labels.frontend.common.support')</strong>
            <p>
                Bu platformadan siz agar siz shaxsiy passport yoki ID karta olish niyatida bo'lsangiz,<br>
                onlayn ravishta passport stolga ariza yuborish uchun mo'ljallangan!
            </p>
        </div>
    </div>
</section>

@endsection
