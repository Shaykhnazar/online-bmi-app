@extends('frontend.layouts.app')

@section('title') @lang('labels.frontend.common.terms') - {{ config('app.name') }} @endsection

@section('content')
<section class="section section-ld ">
    <div class="page-header page-header-small clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image:url('{{asset('img/cover-01.jpg')}}');">
        </div>
        <div class="container">
            <h3 class="title">
                @lang('labels.frontend.common.terms') - {{ config('app.name') }}
            </h3>
        </div>
    </div>

    <div class="section">
        <div class="container text-center">
            <strong>@lang('labels.frontend.common.terms')</strong>
            <p>
               Dasturdan siz passport olish uchun online ariza berishda foydalanishingiz mumkin! Boshqa maqsadda foydalanish taqiqlanadi!
            </p>
        </div>
    </div>
</section>

@endsection
