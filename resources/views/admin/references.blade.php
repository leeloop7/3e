@extends("admin.layout")

@section("title", "References")
@section("content")
    <div class="mt-4 space-y-4">
        @foreach($content as $item)
            <form action="{{route("admin.update-content")}}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="content_key" value="{{$item->content_key}}" />
                <textarea name="content_value" id="" class="w-full rounded">{{$item->content_value}}</textarea>
                <button type="submit" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </form>
        @endforeach
    </div>
@endsection
