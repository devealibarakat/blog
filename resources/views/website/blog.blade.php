@extends('website.layouts.layout')

@section('content')

    <!--begin::App-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            {{__('Articles')}}
                        </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted text-hover-primary">{{__('Home')}}</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">{{__('Articles')}}</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->

                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Home card-->
                    <div>
                        <!--begin::Body-->
                        <div class="p-lg-10">
                            <!--begin::Section-->
                            <div class="mb-17">
                                <!--begin::Title-->

                                <!--end::Separator-->
                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-md-8 justify-content-between">
                                        <!--begin::Post-->

                                        <div class="ps-lg-6 mb-16  mt-17 blog-bg">
                                            @foreach ($articles as $article)
                                                <!--begin::Body-->
                                                <div class="mb-6">
                                                    <div class="mb-3">
                                                        @if (!empty($article->image))
                                                            <img class="embed-responsive-item card-rounded h-275px w-100"
                                                                src="{{$article->image}}" allowfullscreen="allowfullscreen"></img>
                                                        @else
                                                            <img class="embed-responsive-item card-rounded h-275px w-100"
                                                                src="{{asset('media/auth/bg1.jpg')}}"
                                                                allowfullscreen="allowfullscreen"></img>
                                                        @endif

                                                    </div>
                                                    <!--begin::Title-->
                                                    <div>
                                                        <a href="{{route('show', $article->id)}}"
                                                            class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">
                                                            {{$article->title}}</a>
                                                        <p class="text-gray-500">{{$article->translation->short_descreption }}
                                                        </p>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->

                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Body-->
                                                <!--begin::Footer-->
                                                <div class="d-flex flex-stack flex-wrap mb-2">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center pe-2">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-3">
                                                            <img src="{{asset("media/avatars/300-20.jpg")}}" alt="" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Text-->
                                                        <div class="fs-6 fw-bold">
                                                            @foreach($article->authors as $author)

                                                                <a href="pages/user-profile/overview.html"
                                                                    class="text-gray-700 text-hover-primary">{{$author->name}}</a>
                                                            @endforeach
                                                            <span class="text-muted">
                                                                {{\Carbon\Carbon::parse($article?->created_at)->format('d.m.Y')}}</span>
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-info fw-bold my-2">BLOG</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Footer-->
                                            @endforeach
                                        </div>
                                        {{ $articles->links('vendor.pagination.bootstrap-4') }}
                                        <!--end::Post-->
                                    </div>


                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-4">
                                        <!--begin::Feature post-->
                                        <div>
                                            <div class="mt-8">
                                                <h3>{{__('Categories')}}</h3>
                                            </div>
                                            <div class="card" style="width: 100%">
                                                <div class="row">
                                                    @foreach ($categories as $category)
                                                        <ul class="col-md-6">
                                                            <li class="m-3 p-3 rounded bg-gray-500 text-center">
                                                                {{$category->name}}
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-6">
                                        </div>
                                        <h2 class="text-gray-900 mb-7 ">{{__('Tags')}}</h2>
                                        <!--end::Title-->
                                        <!--begin::Separator-->
                                        <div class="card" style="width: 100%">
                                            <div class="row">
                                                @foreach ($tags as $tag)
                                                    <ul class="col-lg-6">
                                                        <li>
                                                            <a class="tag" href="#">
                                                                {{$tag->name}}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--begin::Row-->
                            </div>

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Home card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

    </div>


@endsection
