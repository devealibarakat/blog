@extends('dashboard.layouts.index')
@section('title')
    {{ __('sidebar.articles')}}
@endsection
@section('content')
    <div class="d-flex flex-column flex-grow-1 overflow-auto pt-7">

        <div class="container bg-white rounded-4 p-3 shadow-sm col-lg-10">
            <div class="m-3 pb-3">
                <h3>{{__('sidebar.add_new')}}</h3>
            </div>
            <form action="{{ route('articles.store') }}" method="POST">
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
                <div class="tab-content mt-3 p-3 row">
                    @foreach (LaravelLocalization::getSupportedLocales() as $locale => $properties)
                        <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $locale }}">
                            <div class="row pt-3">
                                <div class="col-lg-6 p-2">

                                    <label for="title{{ $locale }}" class="form-label">{{ __('inputs.title.label') }}
                                        ({{ $properties['native'] }})</label>

                                    <input type="text" class="form-control" name="title[{{ $locale }}]" id="title{{ $locale }}"
                                        placeholder="{{__('inputs.title.placeholder') }} ({{ $properties['native'] }})"
                                        required>

                                    @error("title.$locale") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-2">
                                    <label for="slug{{ $locale }}" class="form-label">{{ __('inputs.slug.label') }}
                                        ({{ $properties['native'] }})</label>
                                    <input type="text" class="form-control" name="slug[{{ $locale }}]" id="slug{{ $locale }}"
                                        readonly>
                                    @error("slug.$locale") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-lg-6 p-2">
                                    <label for="short_description{{ $locale }}"
                                        class="form-label">{{ __('inputs.short_description.label') }}
                                        ({{ $properties['native'] }})</label>

                                    <input type="text" class="form-control" name="short_description[{{ $locale }}]"
                                        id="short_description{{ $locale }}" required>
                                    @error("short_description.$locale") <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 p-2">
                                    <label for="meta_keywords_{{ $locale }}"
                                        class="form-label">{{ __('inputs.meta_keywords.label') }}
                                        ({{ $properties['native'] }})</label>
                                    <input type="text" class="form-control" name="meta_keywords[{{ $locale }}]"
                                        id="meta_keywords{{ $locale }}" required>
                                    @error("meta_keywords.$locale") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <div class="col-lg-12 p-2">
                                    <label for="description{{ $locale }}"
                                        class="form-label">{{ __('inputs.description.label') }}
                                        ({{ $properties['native'] }})</label>

                                    <textarea class="form-control" name="description[{{ $locale }}]"
                                        id="description{{ $locale }}" required rows="5"></textarea>
                                    @error("description.$locale") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <div class="col-lg-6 p-2">
                        <label for="tags" class="form-label">{{ __('sidebar.tags') }}</label>
                        <select name="tags[]" id="tags" multiple class="form-control" required>
                            @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        @error("tags") <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary m-3">{{ __('inputs.save') }}</button>
            </form>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('input[name^="title"]').on('input', function () {
            let locale = $(this).attr('name').match(/\[(.*?)\]/)[1];
            let slugInput = $('#slug' + locale);

            $.get('{{ route('articles.checkSlug') }}', { 'title': $(this).val() })
                .done(function (data) {
                    slugInput.val(data.slug);
                })
                .fail(function () {
                    console.log('Error fetching slug');
                });
        });
    });
</script>