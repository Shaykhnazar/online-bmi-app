@extends('frontend.layouts.app')

@section('title') @lang('labels.frontend.common.ticket') @endsection

@section('content')

    <section class="section-header bg-primary text-white pb-7 pb-lg-11">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-2 mb-4">
                        @lang('labels.frontend.common.ticket')
                    </h1>
                    <p class="lead text-muted">
                        @lang("Ma'lumotlarning to'g'riligini yaxshilab tekshirib so'ng arizani jo'nating, aks holda arizangiz bekor bo'lishi mumkin!")
                    </p>

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
                                    {{ html()->form('POST', route('frontend.ticket.post'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}

                                    <div class="form-group row">
                                        {{ html()->label(__('Ismingiz'))->class('col-md-2 form-control-label')->for('first_name') }}

                                        <div class="col-md-6">
                                            {{ html()->text('first_name')
                                                ->class('form-control')
                                                ->placeholder('Ism')
                                                ->required() }}
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group row">
                                        {{ html()->label(__('Familiyangiz'))->class('col-md-2 form-control-label')->for('last_name') }}

                                        <div class="col-md-6">
                                            {{ html()->text('last_name')
                                                ->class('form-control')
                                                ->placeholder('Familiya')
                                                ->required() }}
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group row">
                                        {{ html()->label(__('Rasmingiz'))->class('col-md-2 form-control-label')->for('avatar') }}

                                        <div class="col-md-6">
                                            {{ html()->file('avatar')
                                                ->class('form-control')
                                                ->required() }}
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group row">
                                        {{ html()->label(__('Tu\'g\'ilgan sanangiz'))->class('col-md-2 form-control-label')->for('date_of_birth') }}

                                        <div class="col-md-6">
                                            {{ html()->date('date_of_birth')
                                                ->class('form-control')
                                                ->required() }}
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group row">
                                        {{ html()->label(__('Passport turi'))->class('col-md-2 form-control-label')->for('pass_type_id') }}
                                        <div class="col-md-6">
                                            {{ html()->select('pass_type_id', $types)
                                                ->class('form-control')
                                                ->placeholder(__('Passport turini tanlang'))
                                                ->required() }}
                                        </div>
                                    </div><!--form-group-->

                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        {{ html()->button($text = "<i class='fas fa-paper-plane'></i>&nbsp; Ariza yuborish", $type = 'submit')->class('btn btn-success') }}
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

