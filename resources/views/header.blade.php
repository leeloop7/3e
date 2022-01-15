<header class="header-4 bg-transparent sticky-bar mt-4">
    <div class="container bg-transparent">
        <nav class="bg-transparent flex justify-between items-center py-3">
            <a class="text-3xl font-semibold leading-none" href="index.html">
                <img class="h-10" src="/imgs/header_logo.png" alt="" />
            </a>
            <ul class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-12">
                <li class="group relative pt-4 pb-4">
                    <a href="/" class="text-sm font-semibold text-white hover:text-blueGray-500">{{__("Home")}}</a>
                </li>
                <li class="pt-4 pb-4">
                    <a class="text-sm font-semibold text-white hover:text-blueGray-500" href="#presentation">{{__("Presentation")}}</a>
                </li>
                <li class="pt-4 pb-4">
                    <a class="text-sm font-semibold text-white hover:text-blueGray-500" href="#portfolio">{{__("Portfolio")}}</a>
                </li>
                <li class="pt-4 pb-4">
                    <a class="text-sm font-semibold text-white hover:text-blueGray-500" href="#references">{{__("References")}}</a>
                </li>
                <li class="pt-4 pb-4">
                    <a class="text-sm font-semibold text-white hover:text-blueGray-500" href="#contactUs">{{__("Contact Us")}}</a>
                </li>
                <li class="pt-4 pb-4 flex space-x-2">
                    <a href="/en" class="text-sm font-semibold text-white hover:text-blueGray-500">
                        <img src="https://flagicons.lipis.dev/flags/4x3/gb-eng.svg" alt="" class="w-4 h-4">
                    </a>
                    <a href="/de" class="text-sm font-semibold text-white hover:text-blueGray-500">
                        <img src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="" class="w-4 h-4">
                    </a>
                    <a href="/sl" class="text-sm font-semibold text-white hover:text-blueGray-500">
                        <img src="https://flagicons.lipis.dev/flags/4x3/si.svg" alt="" class="w-4 h-4">
                    </a>
                </li>
            </ul>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center py-2 px-3 text-blue-500 hover:text-blue-700 rounded border border-blue-200 hover:border-blue-300">
                    <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </div>
</header>

<div class="hidden navbar-menu relative z-50 transition duration-300">
    <div class="navbar-backdrop fixed inset-0 bg-blueGray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto transition duration-300">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-semibold leading-none" href="#">
                <img class="h-10" src="/imgs/header_logo.png" alt="" />
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-blueGray-400 cursor-pointer hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul class="mobile-menu">
                <li class="mb-1 rounded-xl">
                    <a href="/" class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl">{{__("Home")}}</a>
                </li>
                <li class="mb-1 rounded-xl">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="#presentation">{{__("Presentation")}}</a>
                </li>
                <li class="mb-1 rounded-xl">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="#portfolio">{{__("Portfolio")}}</a>
                </li>
                <li class="mb-1 rounded-xl">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="#referneces">{{__("References")}}</a>
                </li>
                <li class="mb-1 rounded-xl">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="#contactUs">{{__("Contact Us")}}</a>
                </li>
                <li class="mb-1 rounded-xl flex">
                    <a class="block py-4 px-2 pl-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="">
                        <img src="https://flagicons.lipis.dev/flags/4x3/gb-eng.svg" alt="" class="h-6 w-6">
                    </a>
                    <a class="block py-4 px-2 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="">
                        <img src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="" class="h-6 w-6">
                    </a>
                    <a class="block py-4 px-2 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="">
                        <img src="https://flagicons.lipis.dev/flags/4x3/si.svg" alt="" class="h-6 w-6">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
