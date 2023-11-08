@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Please fill all the required fields.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
