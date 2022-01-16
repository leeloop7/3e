<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <title>3E Engineering &raquo; Admin</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="{{mix('css/admin.css')}}"/>
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-10" src="/imgs/header_logo.png" alt=""/>
                    </div>
                    <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{route('admin.dashboard')}}"
                           class="inline-flex items-center px-1 pt-1 text-sm {{ Route::is('admin.dashboard') ? 'font-bold text-blue-800' : 'font-medium text-gray-500'}}"
                           aria-current="page">
                            Dashboard
                        </a>

                        <a href="{{route('admin.presentation')}}"
                           class="hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm {{ Route::is('admin.presentation') ? 'font-bold text-blue-800' : 'font-medium text-gray-500'}}">
                            Presentation
                        </a>

                        <a href="{{route('admin.portfolio')}}"
                           class="hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm {{ Route::is('admin.portfolio') ? 'font-bold text-blue-800' : 'font-medium text-gray-500'}}">
                            Portfolio
                        </a>

                        <a href="{{route('admin.references')}}"
                           class="hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm {{ Route::is('admin.references') ? 'font-bold text-blue-800' : 'font-medium text-gray-500'}}">
                            References
                        </a>

                        <a href="{{route('admin.contact-us')}}"
                           class="hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm {{ Route::is('admin.contact-us') ? 'font-bold text-blue-800' : 'font-medium text-gray-500'}}">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="py-10">
        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-900">
                    @yield("title")
                </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if (session()->has("success"))
                    <div class="text-blue-500">
                        {!! session("success") !!}
                    </div>
                @endif
                @if (session()->has("error"))
                    <div class="text-blue-500">
                        {!! session("error") !!}
                    </div>
                @endif
                @yield("content")
            </div>
        </main>
    </div>
</div>

</body>
</html>
