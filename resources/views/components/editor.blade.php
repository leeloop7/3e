@props(['key', 'value', 'language'])

<form action="{{route("admin.update-content")}}" method="post">
    {!! csrf_field() !!}
    <div class="bg-blue-100 py-2 px-4 text-xs">
        {{$key}}
    </div>
    <input type="hidden" name="content_key" value="{{$key}}" />
    <input type="hidden" name="language" value="{{$language}}" />
    <textarea name="content_value" id="" class="text-xs py-2 px-4 w-full rounded {{str_contains($key, '3e.') ? 'ckeditor' : ''}}">{{$value}}</textarea>
    <button type="submit" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Save
    </button>
</form>
