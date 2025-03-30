<div class="{{ $width ?? 'w-full' }}">
    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
        <label class="form-label flex items-center gap-1 max-w-56">
            {{ $label }}
        </label>
        <select class="input" name="{{ $name }}" id="{{ $name }}">
            @foreach ($options as $key => $option)
                <option value="{{ $key }}" {{ $key == $value ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach
        </select>
    </div>
</div>
