@extends("admin.layout")

@section("title", "Presentation")
@section("content")
    <div class="mt-4 space-y-4">
        <div class="grid grid-cols-3 gap-4">
            <div>English</div>
            <div>German</div>
            <div>Slovenian</div>
        </div>
        @foreach($content["en"] as $key => $value)
            <div class="grid grid-cols-3 gap-4">
                <x-editor language="en" :key="$key" :value="$value" />
                <x-editor language="de" :key="$key" :value="$content['de'][$key] ?? null" />
                <x-editor language="sl" :key="$key" :value="$content['sl'][$key] ?? null" />
            </div>
        @endforeach
    </div>
@endsection
