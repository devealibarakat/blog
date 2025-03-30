<header class="main-header">
    <div class="header-sticky ">
        <nav class="navbar navbar-expand-lg fixed-top pt-0">
            <div class="container-fluid">
                <!-- Logo Start -->

                <!-- Logo End -->
                {{-- <div>
                    <a class="navbar-brand" href="">
                        <img src="{{asset('media/logos/custom-2.svg')}}" alt="logo" class="img-responsive"></a>
                </div> --}}

                <!-- Main Menu start -->
                <div
                    class="collapse navbar-collapse main-menu justify-content-center align-items-center h-full py-16 bg-gray-500">

                    <ul class="navbar-nav" id="menu">
                        <li class="nav-item mx-3"><a class="nav-link fs-1 fw-normal" href="#">{{__('Articles')}}</a>
                        </li>
                        <li class="nav-item mx-3"><a class="nav-link fs-1 fw-normal" href="#">{{__('Authors')}}</a>
                        </li>
                        <li class="nav-item mx-3"><a class="nav-link fs-1 fw-normal">{{__('Categories')}}</a></li>
                        <li class="nav-item mx-3"><a class="nav-link fs-1 fw-normal" href="#">{{__('Comments')}}</a>
                        </li>

                        <li class="nav-item  mx-3">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if (app()->getLocale() != $localeCode)
                                    <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <img src="{{asset('media/flags/' . $localeCode . '.svg')}}" width="24" height="20"
                                            alt=" {{ $localeCode }}">
                                    </a>
                                @endif
                            @endforeach
                        </li>
                </div>
                <!-- Main Menu End -->

                <div class="navbar-toggle"></div>
            </div>
        </nav>

        <div class="responsive-menu"></div>
    </div>

</header>