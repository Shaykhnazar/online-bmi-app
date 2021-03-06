<footer class="py-5 bg-white" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; {{ config('app.name') }}, {!! setting('footer_text') !!}
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">@lang('labels.frontend.common.login')</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">@lang('labels.frontend.common.register')</a>
                        </li>
                        @endif
                    @endguest
                    <li class="nav-item">
                        <a href="#" class="nav-link">@lang('labels.frontend.common.licence')</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
