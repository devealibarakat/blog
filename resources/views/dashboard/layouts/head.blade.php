<title>@yield('title')</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="{{asset('media/logos/favicon.ico')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
<script src="{{URL::asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>

<!--end::Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
@if (App::getLocale() == 'ar')
    <link href="{{ asset('css/style.bundle.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.bundle.rtl.css') }}" rel="stylesheet">
@else

    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet">

@endif
<style>
    label:has(+ select:required):after,
    label:has(+ textarea:required):after,
    label:has(+ input:required):after {
        content: ' *';
        color: red;
    }
</style>