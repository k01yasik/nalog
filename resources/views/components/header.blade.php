<div class="row z-index-10">
    <div class="row-wrapper padding-vertical-1">
        <div class="site-top">
            <a href="{{ route('pages.home') }}" class="logo-link"><img src="{{ config('app.url') }}/images/logo.jpg" alt="logo" class="logo-image" /></a>
            <div class="site-name">{{ config('app.name') }}</div>
            <nav>
                <ul>
                    <li class="first-level"><a href="{{ route('pages.home') }}" class="nav-link">{{ __('Home') }}</a></li>
                    <li class="first-level">
                        <a href="{{ route('post.index') }}" class="nav-link">
                            <div class="nav-item-name">{{ __('Posts') }}</div>
                            <div class="nav-item-svg">
                                <svg version="1.1" class="caret-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 307.054 307.054" style="enable-background:new 0 0 307.054 307.054;"
                                xml:space="preserve">
                                    <g>
                                        <path d="M302.445,205.788L164.63,67.959c-6.136-6.13-16.074-6.13-22.203,0L4.597,205.788c-6.129,6.132-6.129,16.069,0,22.201
                                        l11.101,11.101c6.129,6.136,16.076,6.136,22.209,0l115.62-115.626L269.151,239.09c6.128,6.136,16.07,6.136,22.201,0
                                        l11.101-11.101C308.589,221.85,308.589,211.92,302.445,205.788z"></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                        <ul class="sub-menu">
                            <li>First element 1</li>
                            <li>Second element 2</li>
                            <li>Third element 3</li>
                        </ul>
                    </li>
                    <li class="first-level"><a href="#" class="nav-link">{{ __('News') }}</a></li>
                    <li class="first-level"><a href="#" class="nav-link">{{ __('Questions') }}</a></li>
                    <li class="first-level"><a href="#" class="nav-link">{{ __('Education') }}</a></li>
                    <li class="first-level">
                        <a href="{{ route('soft.index') }}" class="nav-link">
                            <div class="nav-item-name">{{ __('Soft') }}</div>
                            <div class="nav-item-svg">
                                <svg version="1.1" class="caret-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 307.054 307.054" style="enable-background:new 0 0 307.054 307.054;"
                                     xml:space="preserve">
                                    <g>
                                        <path d="M302.445,205.788L164.63,67.959c-6.136-6.13-16.074-6.13-22.203,0L4.597,205.788c-6.129,6.132-6.129,16.069,0,22.201
                                        l11.101,11.101c6.129,6.136,16.076,6.136,22.209,0l115.62-115.626L269.151,239.09c6.128,6.136,16.07,6.136,22.201,0
                                        l11.101-11.101C308.589,221.85,308.589,211.92,302.445,205.788z"></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                        <ul class="sub-menu">
                            <li>First element 1</li>
                            <li>Second element 2</li>
                            <li>Third element 3</li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="social-item">
                <svg version="1.1" class="vk-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14.171 14.171" style="enable-background:new 0 0 14.171 14.171;" xml:space="preserve">
                    <g>
                        <path d="M13.268,0H0.905C0.405,0,0,0.405,0,0.904v12.363c0,0.499,0.405,0.904,0.905,0.904h12.362
                        c0.499,0,0.904-0.405,0.904-0.904V0.904C14.172,0.404,13.767,0,13.268,0z M11.755,8.635c0.259,0.264,0.821,0.707,0.719,1.158
                        c-0.094,0.414-0.712,0.263-1.312,0.287c-0.685,0.029-1.091,0.044-1.503-0.287C9.465,9.636,9.351,9.45,9.165,9.242
                        C8.996,9.054,8.783,8.717,8.493,8.73C7.972,8.756,8.135,9.482,7.95,9.977c-2.896,0.456-4.059-1.333-5.085-3.069
                        C2.368,6.067,1.65,4.261,1.65,4.261l2.048-0.007c0,0,0.657,1.195,0.831,1.503c0.148,0.262,0.311,0.47,0.479,0.704
                        c0.141,0.194,0.364,0.574,0.608,0.543c0.397-0.051,0.469-1.591,0.223-2.107C5.741,4.688,5.506,4.615,5.263,4.544
                        C5.345,4.026,7.56,3.918,7.918,4.32c0.52,0.584-0.36,2.21,0.352,2.684c1-0.524,1.854-2.718,1.854-2.718l2.398,0.015
                        c0,0-0.375,1.186-0.768,1.712c-0.229,0.308-0.989,0.994-0.959,1.503C10.819,7.919,11.437,8.311,11.755,8.635z"></path>
                    </g>
                </svg>
            </div>
            <div class="social-item">
            <svg version="1.1" class="facebook-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                <g>
                    <path id="Facebook_path" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998
                    C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41
                    h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"></path>
                </g>
            </svg>
            </div>
            <div class="social-item">
                <svg version="1.1" class="twitter-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 486.392 486.392" style="enable-background:new 0 0 486.392 486.392;" xml:space="preserve">
                    <g>
                        <path d="M395.193,0H91.198C40.826,0,0,40.826,0,91.198v303.995c0,50.372,40.826,91.198,91.198,91.198
                        h303.995c50.372,0,91.198-40.827,91.198-91.198V91.198C486.392,40.826,445.565,0,395.193,0z M364.186,188.598l0.182,7.752
                        c0,79.16-60.221,170.359-170.359,170.359c-33.804,0-65.268-9.91-91.776-26.904c4.682,0.547,9.454,0.851,14.288,0.851
                        c28.059,0,53.868-9.576,74.357-25.627c-26.204-0.486-48.305-17.814-55.935-41.586c3.678,0.669,7.387,1.034,11.278,1.034
                        c5.472,0,10.761-0.699,15.777-2.067c-27.39-5.533-48.031-29.7-48.031-58.701v-0.76c8.086,4.499,17.297,7.174,27.116,7.509
                        c-16.051-10.731-26.63-29.062-26.63-49.825c0-10.974,2.949-21.249,8.086-30.095c29.518,36.236,73.658,60.069,123.422,62.562
                        c-1.034-4.378-1.55-8.968-1.55-13.649c0-33.044,26.812-59.857,59.887-59.857c17.206,0,32.771,7.265,43.714,18.908
                        c13.619-2.706,26.448-7.691,38.03-14.531c-4.469,13.984-13.953,25.718-26.326,33.135c12.069-1.429,23.651-4.682,34.382-9.424
                        C386.073,169.659,375.889,180.208,364.186,188.598z"></path>
                    </g>
                </svg>
            </div>
            @auth
                <div class="registration right">{{ Auth::user()->username }}</div>
            @else
                <div class="registration right"><a href="{{ route('register') }}" class="simple-link">{{ __('Registration') }}</a></div>
                <div class="login right"><a href="{{ route('login') }}" class="simple-link">{{ __('Login') }}</a></div>
            @endauth
        </div>
    </div>
</div>
<div class="row">
    <ul class="rslides">
        <li><img src="{{ config('app.url') }}/images/slider-1.jpg" /></li>
        <li><img src="{{ config('app.url') }}/images/slider-2.jpg" /></li>
        <li><img src="{{ config('app.url') }}/images/slider-3.jpg" /></li>
    </ul>
</div>
<div class="row search-row">
    <div class="row-wrapper">
        <div class="search-bar">
            <div class="search-bar-form">
                <input type="search" class="search-input">
            </div>
            <div class="search-bar-button">Поиск</div>
        </div>
    </div>
</div>