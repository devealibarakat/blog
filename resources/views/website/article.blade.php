@extends('website.layouts.layout')

@section('content')

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
                            Blog Post</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Blog</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Filter</a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_66b9704ba458a">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple"
                                                data-kt-select2="true" data-close-on-select="false"
                                                data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_66b9704ba458a" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications"
                                                checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                        </div>
                        <!--end::Filter menu-->
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app">Create</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Post card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-20 pb-lg-0">
                            <!--begin::Layout-->
                            <div class="d-flex flex-column flex-xl-row">
                                <!--begin::Content-->
                                <div class="flex-lg-row-fluid me-xl-15">
                                    <!--begin::Post content-->
                                    <div class="mb-17">
                                        <!--begin::Wrapper-->
                                        <div class="mb-8">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap mb-6">
                                                <!--begin::Item-->
                                                <div class="me-9 my-1">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-element-11 text-primary fs-2 me-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Label-->
                                                    <span
                                                        class="fw-bold text-gray-500">{{\Carbon\Carbon::parse($article?->created_at)->format('d.m.Y')}}</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="me-9 my-1">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-briefcase text-primary fs-2 me-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold text-gray-500">Announcements</span>
                                                    <!--begin::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="my-1">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-message-text-2 text-primary fs-2 me-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold text-gray-500">24 {{__('Comment')}}</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold">
                                                {{$article->translation->title}}
                                                <span class="fw-bold text-muted fs-5 ps-1">5 mins read</span></a>
                                            <!--end::Title-->
                                            <!--begin::Container-->
                                            <div class="overlay mt-8">
                                                <!--begin::Image-->
                                                <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px"
                                                    style="background-image: url(
                                                                                        @if (!empty($article->image))
                                                                                            '{{$article->image}}'
                                                                                        @else
                                                                                            '{{ asset('media/auth/bg1.jpg') }}'
                                                                                        @endif
                                                                                    )">
                                                </div>

                                                <!--end::Image-->
                                                <!--begin::Links-->
                                                {{-- <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <a href="pages/about.html" class="btn btn-primary">About Us</a>
                                                    <a href="pages/careers/apply.html"
                                                        class="btn btn-light-primary ms-3">Join Us</a>
                                                </div> --}}
                                                <!--end::Links-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Description-->
                                        <div class="fs-5 fw-semibold text-gray-600">
                                            <!--begin::Text-->
                                            <p class="mb-8">
                                                {{$article->translation->descreption}}
                                            </p>
                                            <!--end::Text-->
                                            <!--begin::Text-->

                                            <!--end::Text-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Block-->
                                        <div
                                            class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                                            <!--begin::Section-->
                                            <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-70px symbol-circle mb-2">
                                                    <img src="{{asset('media/avatars/300-2.jpg')}}" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="mb-0">
                                                    <a href="pages/user-profile/overview.html"
                                                        class="text-gray-700 fw-bold text-hover-primary">Jane Johnson</a>
                                                    <span
                                                        class="text-gray-500 fs-7 fw-semibold d-block mt-1">Co-founder</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Text-->
                                            <div class="mb-0 fs-6">
                                                <div class="text-muted fw-semibold lh-lg mb-2">First, a disclaimer – the
                                                    entire process of writing a blog post often takes more than a couple of
                                                    hours, even if you can type eighty words per minute and your writing
                                                    skills are sharp writing a blog post often takes more than a couple.
                                                </div>
                                                <a href="pages/user-profile/overview.html"
                                                    class="fw-semibold link-primary">Author’s Profile</a>
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Block-->
                                        <!--begin::Icons-->
                                        <div class="d-flex flex-center">
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Icons-->
                                    </div>
                                    <!--end::Post content-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Sidebar-->
                                <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                                    <!--begin::Search blog-->
                                    <div class="mb-16">
                                        <h4 class="text-gray-900 mb-7">Search Blog</h4>
                                        <!--begin::Input group-->
                                        <div class="position-relative">
                                            <i
                                                class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="text" class="form-control form-control-solid ps-10" name="search"
                                                value="" placeholder="Search" />
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Search blog-->
                                    <!--begin::Catigories-->
                                    <div class="mb-16">
                                        <h4 class="text-gray-900 mb-7">{{__('Categories')}}</h4>
                                        <!--begin::Item-->
                                        @foreach ($categories as $category)
                                            <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                                                <!--begin::Text-->
                                                <a href="#"
                                                    class="text-muted text-hover-primary pe-2">{{$category->translation->name}}</a>
                                                <!--end::Text-->
                                                <!--begin::Number-->
                                                <div class="m-0">0</div>
                                                <!--end::Number-->
                                            </div>
                                        @endforeach
                                        <!--end::Item-->

                                        <!--end::Item-->
                                    </div>
                                    <!--end::Catigories-->
                                    <!--begin::Recent posts-->
                                    <div class="m-0">
                                        <h4 class="text-gray-900 mb-7">{{__('Latest Articles')}}</h4>
                                        <!--begin::Item-->
                                        @foreach ($articles as $article)
                                            <div class="d-flex  mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-60px symbol-2by3 me-4">
                                                    <div class="symbol-label"
                                                        style="background-image: url('assets/media/stock/600x400/img-1.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="m-0">
                                                    <a href="{{route('show', $article->id)}}"
                                                        class="text-gray-900 fw-bold text-hover-primary fs-6">{{$article->translation->title}}</a>
                                                    <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">
                                                        {{$article->translation->short_descreption}}
                                                    </span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                        @endforeach
                                        <!--end::Item-->

                                    </div>
                                    <!--end::Recent posts-->
                                </div>
                                <!--end::Sidebar-->
                            </div>
                            <!--end::Layout-->

                            <!--begin::Section-->

                            <!--end::Section-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Post card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->

        <!--end::Footer-->
    </div>
    <!--end:::Main-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
< @endsection