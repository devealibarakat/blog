@extends('dashboard.layouts.index')
@section('title')
    {{ __('sidebar.tags')}}
@endsection
@section('content')


    <div class="container d-flex justify-content-between pt-10 pb-5">
        <div>
            <h1 class="text-xl font-medium leading-none text-gray-900">
                {{__('sidebar.tags')}}
            </h1>
        </div>
        <div>
            <a class="btn btn-sm btn-dark" href="{{route('tags.create')}}">
                {{__('sidebar.add_new')}}
            </a>
        </div>
    </div>

    <div class="container d-flex justify-center">
        <div class="card w-100">

            <div id="datatable" class="card-header d-flex flex-sm-row justify-content-between align-items-center p-3">

                <h4 class="m-3 mb-md-0">{{__('string.tags_menu')}}</h4>

                <input class="input m-3" data-datatable-search="#tags_table" placeholder="{{ __('string.search') }}"
                    type="text" />
            </div>

            <!-- محتوى الجدول -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-row-bordered gy-5 gs-7" id="tags_table">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 ">
                                <th class=" min-w-200px text-center">#</th>
                                <th class="min-w-200px">{{ __('inputs.name.label') }}</th>
                                <th class="min-w-150px">{{ __('string.date') }}</th>
                                <th class="min-w-100px text-center">{{ __('string.edit') }}</th>
                                <th class="min-w-100px text-center">{{ __('string.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody id="tags_container">
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column gap-1 text-center">
                                            <h3 class="m-0 font-medium text-sm text-gray-600">{{ $tag->id }}</h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column gap-1">
                                            <h3 class="m-0 font-medium text-sm text-gray-900">{{ $tag?->name }}
                                            </h3>
                                        </div>
                                    </td>

                                    <td class="text-sm text-gray-800 font-normal">
                                        <span>{{\Carbon\Carbon::parse($tag?->created_at)->format('d.m.Y')}}</span>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-icon btn-clear btn-light"
                                            href="{{ route('tags.edit', $tag->id) }}">
                                            <i class="ki-duotone ki-notepad-edit fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-icon btn-clear btn-light" data-bs-toggle="modal"
                                            data-bs-target="#delete_tag{{$tag->id}}">
                                            <i class="ki-duotone ki-trash fs-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                        @include('dashboard.tags.destroy')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div
                        class="card-footer d-flex flex-md-row justify-content-between align-items-center  text-gray-600 text-sm font-medium">

                        <div>
                            {{ trans('string.show') }}
                            <select class="select select-sm w-16" name="perpage">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                            </select>
                            {{ trans('string.per_page') }}
                        </div>

                        <div class="d-flex align-items-center">
                            <nav>
                                <ul class="pagination pagination-sm">
                                    {{ $tags->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

{{--
<script>
    $(document).on('click', '.pagination', function (event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[0];
        fetchTags(page);
    });

    function fetchTags(page) {
        $.ajax({
            url: "/tags?page=" + page,
            success: function (data) {
                $('#tags_container').html(data);
            }
        });
    }
</script> --}}
