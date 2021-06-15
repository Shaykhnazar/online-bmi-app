@extends('frontend.layouts.app')

@section('title') @lang('labels.frontend.common.contact_us') @endsection

@section('content')

    <section class="section-header bg-primary text-white pb-7 pb-lg-11">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-2 mb-4">
                        @lang('labels.frontend.common.contact_us')
                    </h1>

                    @include('frontend.includes.messages')
                </div>
            </div>
        </div>
        <div class="pattern bottom"></div>
    </section>
    <section class="section section-lg line-bottom-light">
        <div class="container mt-n7 mt-lg-n12 z-2">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                        <div class="card-body d-flex flex-column justify-content-between col-auto py-4 p-lg-5">
                            <div class="row mt-4 mb-4">
                                <div class="col">
                                    {{ html()->form('POST', route('frontend.contact.post'))->class('form-horizontal')->open() }}

                                    <div class="form-group row">
                                        {{ html()->label(__('labels.frontend.common.email'))->class('col-md-3 form-control-label')->for('email') }}

                                        <div class="col-md-9">
                                            {{ html()->email('email')
                                                ->class('form-control')
                                                ->placeholder(__('labels.frontend.common.email'))
                                                ->required() }}
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group row">
                                        {{ html()->label(__('Xabar'))->class('col-md-3 form-control-label')->for('text') }}

                                        <div class="col-md-9">
                                            {{ html()->textarea('text')
                                                ->class('form-control')
                                                ->placeholder(__('Xabar'))
                                                ->required() }}
                                        </div>
                                    </div><!--form-group-->

                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        {{ html()->button($text = "<i class='fas fa-paper-plane'></i>&nbsp;Jo'natish", $type = 'submit')->class('btn btn-success') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{ html()->closeModelForm() }}
                                </div>
                                <!--/.col-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

