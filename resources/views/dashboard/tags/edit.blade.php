@extends('dashboard.layouts.index')
@section('title')
    {{ __('sidebar.tags')}}
@endsection
@section('content')

    <div class="d-flex flex-column flex-grow-1 overflow-auto pt-7">

        <div class="container bg-white rounded-4 p-3 shadow-sm col-lg-10">
            <div class="m-3 pb-3">
                <h3>{{__('string.edit_tag')}}</h3>
            </div>
            <form action="{{ route('tags.update', $tag->id) }}" method="POST">
                @method('PUT')
                @csrf
                <ul class="nav nav-tabs" id="langTabs">
                    @foreach (LaravelLocalization::getSupportedLocales() as $locale => $properties)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab"
                                data-bs-target="#{{ $locale }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content mt-3 row">
                    @foreach (LaravelLocalization::getSupportedLocales() as $locale => $properties)
                        <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $locale }}">
                            <div class="m-3 col-lg-10 ">

                                <label for="title_{{ $locale }}" class="form-label">{{ __('inputs.title.label') }}
                                    ({{ $properties['native'] }})</label>

                                <input type="text" class="form-control" name="name[{{ $locale }}]" id="name{{ $locale }}"
                                    value="{{ $tag->name }}"
                                    placeholder="{{__('inputs.title.placeholder') }} ({{ $properties['native'] }})">

                                @error("name.$locale") <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary m-3">{{ __('inputs.save') }}</button>
            </form>
        </div>
    </div>
@endsection