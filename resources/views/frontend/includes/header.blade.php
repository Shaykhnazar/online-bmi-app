<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-dark navbar-theme-primary">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="navbar-brand-dark common" src="{{asset('img/bmi_logo.png')}}" height="45" alt="Logo light">
                <img class="navbar-brand-light common" src="{{asset('img/bmi_logo.png')}}" height="45" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/">
                                <img src="{{asset('img/bmi_logo.png')}}" height="45" alt="Logo Impact">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                                data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover justify-content-center">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <span class="fas fa-home mr-2"></span> @lang('labels.frontend.common.home')
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" aria-expanded="false" data-toggle="dropdown">
                            <span class="nav-link-inner-text mr-1">
                                <span class="fas fa-user mr-1"></span>
                                @lang('labels.frontend.common.account')
                            </span>
                            <i class="fas fa-angle-down nav-link-arrow"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content>
                                <div class="list-group list-group-flush">
                                    @auth
                                    <a href="{{ route('frontend.users.profile', auth()->user()->id) }}"
                                        class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-success"><i class="fas fa-user"></i></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">
                                                {{ Auth::user()->name }}
                                            </span>
                                            <span class="small">@lang('labels.frontend.common.view_profile_details')</span>
                                        </div>
                                    </a>
                                        @role('talaba')
                                            @if(\Modules\Baholash\Entities\StudentRates::where('student_id', auth()->user()->id)->first())
                                                <a href="{{ route("frontend.users.results", auth()->user()->id) }}"
                                                class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                                <span class="icon icon-sm icon-warning"><i class="fas fa-ticket-alt"></i></span>
                                                <div class="ml-4">
                                                    <span class="text-dark d-block">
                                                        @lang('Mening natijalarim')
                                                    </span>
                                                    <span class="small">@lang('Sizning BMI bo\'yicha baholaringiz!')</span>
                                                </div>
                                                </a>
                                            @endif
                                        @endrole
                                    <a href="{{ route('logout') }}"
                                        class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4" onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
                                        <span class="icon icon-sm icon-secondary">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">
                                                @lang('labels.text.logout')
                                            </span>
                                            <span class="small">@lang('labels.frontend.common.logout_from')</span>
                                        </div>
                                    </a>
                                    <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @else
                                    <a href="{{ route('login') }}"
                                        class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-secondary"><i class="fas fa-key"></i></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">
                                                @lang('labels.frontend.common.login')
                                            </span>
                                            <span class="small">@lang('labels.frontend.common.login_text')</span>
                                        </div>
                                    </a>
                                    @if(user_registration())
{{--                                    <a href="{{ route('register') }}"--}}
{{--                                        class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">--}}
{{--                                        <span class="icon icon-sm icon-primary">--}}
{{--                                            <i class="fas fa-address-card"></i>--}}
{{--                                        </span>--}}
{{--                                        <div class="ml-4">--}}
{{--                                            <span class="text-dark d-block">@lang('labels.frontend.common.register')</span>--}}
{{--                                            <span class="small">@lang('labels.frontend.common.register_join')</span>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
                                    @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block">
                @can('view_backend')
                    <a href="{{ route('backend.dashboard') }}" class="btn btn-white animate-up-2 mr-3"><i class="fas fa-tachometer-alt mr-2"></i> @lang('Dashboard')</a>

{{--                @else--}}
{{--                    @auth()--}}
{{--                        <a href="{{ route('frontend.ticket') }}" class="btn btn-success animate-up-2 mr-3"><i class="fas fa-ticket-alt mr-2"></i> @lang('labels.frontend.common.ticket')</a>--}}
{{--                    @endauth--}}
                @endcan

{{--                <a href="{{ route('frontend.support') }}" class="btn btn-outline-white animate-up-2 mr-3"><i class="fas fa-th-large mr-2"></i> @lang('labels.frontend.common.support')</a>--}}

{{--                <a href="{{ route('frontend.contact') }}" target="_blank" class="btn btn-secondary animate-up-2"><i class="fas fa-paper-plane mr-2"></i> @lang('labels.frontend.common.contact')</a>--}}
            </div>
            <div class="d-flex d-lg-none align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </div>
    </nav>
</header>
