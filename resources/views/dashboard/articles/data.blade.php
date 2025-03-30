<table class="table table-striped table-row-bordered gy-5 gs-7" id="articles_table">
    <thead>
        <tr class="fw-semibold fs-6 text-gray-800 text-center">
            <th class="min-w-200px">#</th>
            <th class="min-w-200px">{{ __('inputs.title.label') }}</th>
            <th class="min-w-150px">{{ __('string.date') }}</th>
            <th class="min-w-100px">{{ __('string.edit') }}</th>
            <th class="min-w-100px">{{ __('string.delete') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>
                    <div class="d-flex flex-column gap-1 text-center">
                        <h3 class="m-0 font-medium text-sm text-gray-600">{{ $article->id }}</h3>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-1">
                        <h3 class="m-0 font-medium text-sm text-gray-900">{{ $article?->title }}</h3>
                    </div>
                </td>
                <td class="text-sm text-gray-800 font-normal">{{ $article->created_at }}</td>
                <td class="text-center">
                    <a class="btn btn-sm btn-icon btn-clear btn-light" href="{{ route('articles.edit', $article) }}">
                        <i class="ki-duotone ki-notepad-edit fs-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </td>
                <td class="text-center">
                    <a class="btn btn-sm btn-icon btn-clear btn-light" data-bs-toggle="modal"
                        data-bs-target="#delete_article{{$article}}">
                        <i class="ki-duotone ki-trash fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </a>
                    @include('dashboard.articles.destroy')
                </td>
            </tr>
        @endforeach
    </tbody>

</table>


<div class="d-flex align-items-center justify-content-end">
    <nav>
        <ul class="pagination pagination-sm">
            {{ $articles->links('vendor.pagination.bootstrap-4') }}
        </ul>
    </nav>
</div>