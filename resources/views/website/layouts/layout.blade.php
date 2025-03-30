<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    @include('dashboard.layouts.head')
</head>

<body>
    @include('website.layouts.header')
    @yield('content')

    @include('website.layouts.footer')

    @include('dashboard.layouts.footer_script')

</body>

</html>