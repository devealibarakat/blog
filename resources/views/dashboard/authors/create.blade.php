@extends('dashboard.layouts.index')
@section('title')
    {{ __('sidebar.authors')}}
@endsection
@section('content')
    <div class="d-flex flex-column flex-grow-1 overflow-auto pt-5" id="scrollable_content">

        <main class="flex-grow-1" role="content">
            <!-- Container -->
            <form action="{{ route('authors.store') }}" method="POST">
                @csrf
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{ trans('sidebar.add_author') }}</h3>
                                </div>
                                <div class="card-body">

                                    @include('components.form-input', [
                                        'label' => trans('inputs.name.label'),
                                        'name' => 'name',
                                        'type' => 'text',
                                        'placeholder' => __('inputs.name.placeholder'),
                                        'required' => true,
                                    ])

                                    @include('components.form-input', [
                                        'label' => trans('inputs.meta_description.label'),
                                        'name' => 'meta_description',
                                        'type' => 'text',
                                        'placeholder' => __('inputs.meta_description.placeholder'),
                                        'required' => true,
                                    ])
                                    <div class="text-start pt-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('inputs.save') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </main>

    </div>
@endsection