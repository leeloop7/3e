<section class="py-20" id="contactUs">
    <div class="container">
        <div class="max-w-2xl lg:max-w-3xl mx-auto">
            <div class="mb-12 text-center">
                <h2 class="text-4xl font-bold font-heading wow animate__animated animate__fadeInUp animated"
                    data-wow-delay=".1s">
                    {{__("Kontaktirajte nas")}}</h2>
                <p class="text-blueGray-400 wow animate__animated animate__fadeInUp animated"
                   data-wow-delay=".5s"> {{__("Veseli bomo vašega povpraševanja.")}}</p>
            </div>
            <div class="flex flex-wrap -mx-3 text-center">
                <div class="w-1/2 lg:w-1/3 px-3 mb-12 wow animate__animated animate__fadeInUp animated"
                     data-wow-delay=".1s">
                    <svg class="mb-6 h-8 w-8 mx-auto text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <div class="leading-relaxed">
                        <span class="text-sm text-blueGray-400">Daniel</span>
                        <p>+386 40 309 966</p>
                        <span class="text-sm text-blueGray-400">Ivo</span>
                        <p>+386 31 739 584</p>
                        <span class="text-sm text-blueGray-400">Matija</span>
                        <p>+386 41 703 052</p>
                    </div>
                </div>
                <div class="w-1/2 lg:w-1/3 px-3 mb-12 wow animate__animated animate__fadeInUp animated"
                     data-wow-delay=".3s">
                    <svg class="mb-6 h-8 w-8 mx-auto text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <div class="leading-relaxed">
                        <span class="text-sm text-blueGray-400">E-mail</span>
                        <p>info@3e-eng.eu</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-3 mb-12 wow animate__animated animate__fadeInUp animated"
                     data-wow-delay=".5s">
                    <svg class="mb-6 h-8 w-8 mx-auto text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <div class="leading-relaxed">
                        <span class="text-sm text-blueGray-400">{{__("Naslov")}}</span>
                        <p>Novo mesto</p>
                        <p>Slovenija</p>
                    </div>
                </div>
            </div>
            <div id="contactForm">
                <form method="post" action="{{route('sendContactForm')}}">

                    @if ($errors->any())
                        <div class="bg-blue-50 text-blue-900 rounded-xl p-4 mb-4 text-xs">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ __($error) }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has("success"))
                        <div class="bg-blue-50 text-blue-900 rounded-xl p-4 mb-4 text-xs">
                            {{__(session("success"))}}
                        </div>
                    @endif

                    {!! csrf_field() !!}
                    <x-honeypot/>
                    <div class="flex flex-wrap mb-4 -mx-3 wow animate__animated animate__fadeInUp animated"
                         data-wow-delay=".3s">
                        <div class="w-full lg:w-1/2 px-3 mb-4 lg:mb-0">
                            <div class="mb-4">
                                <input
                                    class="w-full p-4 text-xs font-semibold leading-none bg-blueGray-50 rounded outline-none"
                                    type="text" placeholder="{{__('Zadeva')}}"
                                    name="subject"
                                    value="{{old('subject')}}"
                                />
                            </div>
                            <div class="mb-4">
                                <input
                                    class="w-full p-4 text-xs font-semibold leading-none bg-blueGray-50 rounded outline-none"
                                    type="text" placeholder="{{__('Ime')}}"
                                    name="name"
                                    value="{{old('name')}}"
                                />
                            </div>
                            <div class="mb-4">
                                <input
                                    class="w-full p-4 text-xs font-semibold leading-none bg-blueGray-50 rounded outline-none"
                                    type="email" placeholder="E-mail"
                                    name="email"
                                    value="{{old('email')}}"
                                />
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 px-3">
                            <textarea
                                class="w-full h-full p-4 text-xs font-semibold leading-none resize-none bg-blueGray-50 rounded outline-none"
                                placeholder="{{__("Sporočilo")}}..." name="message">{{old("message")}}</textarea>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <button
                            class="py-4 px-8 text-sm text-white font-semibold leading-none bg-blue-400 hover:bg-blue-500 rounded"
                            type="submit">
                            {{__("Pošlji")}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
