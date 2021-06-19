@extends('frontend.layouts.app')

@section('title') {{ $$module_name_singular->name}}'ning Natijalari @endsection

@section('content')

<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">
                    {{ $$module_name_singular->name}}
                </h1>
                <p class="lead">
                    Username: {{ $$module_name_singular->username}}
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
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            {{ __('labels.backend.mavzular.fields.name') }}
                                        </th>
                                        <th>
                                            {{ __('labels.backend.baholash.fields.teacher') }}
                                        </th>
                                        <th>
                                            {{ __('k1') }}
                                        </th>
                                        <th>
                                            {{ __('k2') }}
                                        </th>
                                        <th>
                                            {{ __('k3') }}
                                        </th>
                                        <th>
                                            {{ __('k4') }}
                                        </th>
                                        <th>
                                            {{ __('Natija') }}
                                        </th>
                                        <th>
                                            {{ __('labels.backend.roles.fields.updated_at') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ optional($rates->theme)->mavzu }}
                                        </td>
                                        <td>
                                            {{ optional($rates->teacher)->name }}
                                        </td>
                                        <td>
                                            {{ $rates->k1 }}
                                        </td>
                                        <td>
                                            {{ $rates->k2 }}
                                        </td>
                                        <td>
                                            {{ $rates->k3 }}
                                        </td>
                                        <td>
                                            {{ $rates->k4 }}
                                        </td>
                                        <td>
                                            {{ ($rates->k1 + $rates->k2 + $rates->k3 + $rates->k4)/4 }}
                                        </td>
                                        <td>
                                            {{ $rates->updated_at->diffForHumans() }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush

