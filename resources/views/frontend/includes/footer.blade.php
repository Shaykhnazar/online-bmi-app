{{--@include ('frontend.includes.footer-comment-area')--}}

<footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 bg-primary text-white overflow-hidden">
    <div class="pattern pattern-soft top"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <a class="footer-brand mr-lg-5 d-flex" href="/">
                    <img src="{{asset('img/bmi_logo.png')}}"  class="mr-3" alt="Footer logo">
                </a>
                <p class="my-4">
                    {!! setting('meta_description') !!}
                </p>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0 text-center">
                <h6>
                    @lang('labels.frontend.common.pages')
                </h6>
                <ul class="links-vertical">
{{--                    <li><a target="_blank" href="#">Blog</a></li>--}}
{{--                    <li><a target="_blank" href="#">Themes</a></li>--}}
                    <li><a target="_blank" href="#">@lang('labels.frontend.common.support')</a></li>
                    <li><a target="_blank" href="#">@lang('labels.frontend.common.contact_us')</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0 text-center">
                <h6>
                    @lang('labels.frontend.common.account')
                </h6>
                <ul class="links-vertical">
{{--                    <li>--}}
{{--                        <a target="_blank" href="#">Blog</a>--}}
{{--                    </li>--}}
                    <li>
                        <a target="_blank" href="#">@lang('labels.frontend.common.licence')</a>
                    </li>
                    @guest
                    @if(user_registration())
                    <li>
                        <a href="{{ route('register') }}">@lang('labels.frontend.common.register')</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('login') }}">@lang('labels.frontend.common.login')</a>
                    </li>
                    @else
                    <li>
                        <a href="#">{{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            @lang('labels.frontend.common.logout_from')
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h6>@lang('labels.frontend.common.subscribe')</h6>
                <p class="font-small">@lang('labels.frontend.common.subscribe_desc')</p>
                <form action="#">
                    <div class="form-row">
                        <div class="col-8">
                            <input type="email" class="form-control mb-2" placeholder="{{__('labels.frontend.common.email')}}" required>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-secondary btn-block"><span>@lang('labels.frontend.common.subscribe')</span></button>
                        </div>
                    </div>
                </form>
                <small class="mt-2 form-text">@lang('labels.frontend.common.subscribe_desc_bottom') <a href="#" class="font-weight-bold text-underline">@lang('labels.frontend.common.privacy')</a></small>
            </div>
        </div>

        <hr class="my-4 my-lg-5">

        <div class="row">
            <div class="col pb-4 mb-md-0">
                <div class="d-flex text-center justify-content-center align-items-center">
                    <p class="font-weight-normal mb-0">
                        &copy; {{ app_name() }}, {!! setting('footer_text') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
