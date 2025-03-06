@extends('dashboard.layouts.index')


@section('title')
    {{ __('sidebar.edit_user')}}
@endsection



@section('content')
    <div class="d-flex flex-column flex-grow-1 overflow-auto pt-5" id="scrollable_content">

        <main class="flex-grow-1" role="content">
            <!-- Container -->
            <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="container">
                    <div class="row g-4">

                        <div class="col-lg-10 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{ trans('sidebar.edit_user') }}</h3>
                                </div>
                                <div class="card-body">

                                    @include('components.form-input', [
                                        'label' => trans('inputs.name.label'),
                                        'name' => 'name',
                                        'type' => 'text',
                                        'value' => old('name', $user->name),
                                        'placeholder' => __('inputs.name.placeholder')
                                    ])

                                    @include('components.form-input', [
                                        'label' => trans('inputs.email.label'),
                                        'name' => 'email',
                                        'type' => 'email',
                                        'value' => old('email', $user->email),
                                        'placeholder' => __('inputs.email.placeholder')
                                    ])

                                    @include('components.form-input', [
                                        'label' => trans('inputs.password.label'),
                                        'name' => 'password',
                                        'type' => 'password',
                                        'value' => old('email', $user->password),
                                        'placeholder' => __('inputs.password.placeholder')
                                    ])

                                    {{-- إذا كنت بحاجة إلى تحديد دور المستخدم --}}
                                    {{--
                                    @include('components.form-select', [
                                    'label' => trans('inputs.roles.label'),
                                    'name' => 'roles',
                                    'options' => $roles,
                                    'value' => old('roles')
                                    ])
                                    --}}

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
