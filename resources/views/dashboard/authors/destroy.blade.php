<div class="modal fade" tabindex="-1" id="delete_author{{$author->id}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"> {{ trans('string.delete_author') }}</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <h3> {{__('string.confirm_delete_user')}}{{ $author->name }} </h3>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{__('string.close')}}</button>
                <button type="submit" class="btn btn-danger">{{__('string.delete')}}</button>
            </div>
        </div>
    </div>
</div>