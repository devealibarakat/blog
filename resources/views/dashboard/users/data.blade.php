<table class="table table-striped table-row-bordered gy-5 gs-7" id="users">
    <thead>
        <tr class="fw-semibold fs-6 text-gray-800">
            <th class="min-w-200px text-center">#</th>
            <th class="min-w-200px">{{ __('inputs.name.label') }}</th>
            <th class="min-w-150px">{{ __('inputs.email.label') }}</th>
            <th class="min-w-150px">{{ __('string.date') }}</th>
            <th class="min-w-100px">{{ __('string.edit') }}</th>
            <th class="min-w-100px">{{ __('string.delete') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>
                    <div class="d-flex flex-column gap-1 text-center">
                        <h3 class="m-0 font-medium text-sm text-gray-600">{{$user->id}}</h3>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-1">
                        <h3 class="m-0 font-medium text-sm text-gray-600">{{$user->name}}</h3>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-1">
                        <span class="m-0 font-medium text-sm">{{$user->email}}</h3>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-1">
                        <h3 class="m-0  text-sm">
                            <span>{{\Carbon\Carbon::parse($user?->created_at)->format('d.m.Y')}}</span>

                        </h3>
                    </div>
                </td>
                <td class="text-center">
                    <a class="btn btn-sm btn-icon btn-clear btn-light" href="{{route('users.edit', $user->id)}}">
                        <i class="ki-duotone ki-notepad-edit fs-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </td>
                <td class="text-center">
                    <a class="btn btn-sm btn-icon btn-clear btn-light" data-bs-toggle="modal" data-bs-target="#delete_user">
                        <i class="ki-duotone ki-trash fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </a>

                </td>
            </tr>
        @endforeach
        @include('dashboard.users.destroy')
    </tbody>

</table>


<div class="d-flex align-items-center justify-content-end">
    <nav>
        <ul class="pagination pagination-sm">
            {{ $users->links('vendor.pagination.bootstrap-4') }}
        </ul>
    </nav>
</div>