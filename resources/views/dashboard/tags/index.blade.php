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
                <div class="table-responsive" id="table_data">
                    @include('dashboard.tags.data')
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