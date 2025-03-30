<div class="m-5">
    <div class="m-5">
        <label class="form-label d-flex align-items-center gap-1">
            {{ $label }}
        </label>

        <input class="{{ $width ?? 'w-full' }} form-control" id="{{$name}}" type="{{ $type ?? 'text' }}"
            name="{{ $name }}" value="{{ old($name, $value ?? '') }}" placeholder="{{ $placeholder ?? '' }}" {{$required ? 'required' : ''}}>

        @error($name)
            <span class="text-danger d-block mt-1">{{ $message }}</span>
        @enderror
    </div>
</div>