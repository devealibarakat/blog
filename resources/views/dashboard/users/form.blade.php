@extends('dashboard.layouts.index')

@section('title')
    {{__('sidebar.users')}}-{{ __('sidebar.add_user') }}
@endsection

@section('content')
    <div class="d-flex align-items-center  justify-content-center  overflow-auto pt-5" id="scrollable_content">

        <div class="col-lg-8">
            <form action="{{ route('users.store') }}" method="POST" id="inputsform" data-toggle="validator"
                novalidate="true">
                @csrf
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-8 mx-auto">
                            <div class="card">

                                <div class="d-flex align-items-center gap-1 m-4">
                                    <a href="{{ route('users.index') }}" class="me-2">
                                        <i class="ki-duotone ki-arrow-right m-3">
                                            <span class="path1 text-black fs-2x"></span>
                                            <span class="path2 text-black fs-2x"></span>
                                        </i>
                                    </a>
                                    <h2 class="card-title mb-0">{{ trans('sidebar.add_user') }}</h2>
                                </div>

                                <div class="card-body">
                                    @include('components.form-input', [
                                        'label' => trans('inputs.name.label'),
                                        'id' => 'name',
                                        'name' => 'name',
                                        'type' => 'text',
                                        'value' => old('name'),
                                        'placeholder' => __('inputs.name.placeholder'),
                                        'required' => true,
                                    ])       @include('components.form-input', [
                                        'label' => trans('inputs.email.label'),
                                        'id' => 'email',
                                        'name' => 'email',
                                        'type' => 'email',
                                        'value' => old('email'),
                                        'placeholder' => __('inputs.email.placeholder'),
                                        'required' => true,
                                    ])
                              @include('components.form-input', [
                                'label' => trans('inputs.password.label'),
                                'id' => 'password',
                                'name' => 'password',
                                'type' => 'password',
                                'value' => old('password'),
                                'placeholder' => __('inputs.password.placeholder'),
                                'required' => true,
                            ])

                                                                            {{-- @include('components.form-select', [
                                                                            'label' => trans('inputs.roles.label'),
                                                                            'name' => 'roles',
                                                                            'options' => $roles,
                                                                            'value' => old('roles')
                                                                            ]) --}}

                                                                <div class="text-start pt-3">
                                                                    <button type="submit" class="btn btn-dark">
                                                                        {{ __('inputs.save') }}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </form>
                                                        </div>
                                                        </div>
@endsection

