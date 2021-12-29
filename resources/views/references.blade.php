<?php
$references = [
    "okrasne" => [
        "title" => "Okrasne skulpture",
        "description" => "Nerjavno jeklo - AISI 304, Scotch-Brite finish in pasivirana površina",
        "main_image" => "/imgs/okrasne/okrasne_1.jpg",
        "images" => [
            "/imgs/okrasne/okrasne_2.jpg",
            "/imgs/okrasne/okrasne_3.jpg",
            "/imgs/okrasne/okrasne_4.jpg",
            "/imgs/okrasne/okrasne_5.jpg",
        ]
    ],
    "nerjavno_jeklo" => [
        "title" => "Konstrukcija iz nerjavnega jekla",
        "description" => "Europalete, specialna oprema za farmacevtsko industrijo.",
        "main_image" => "/imgs/okrasne/okrasne_1.jpg",
        "images" => [
            "/imgs/okrasne/okrasne_2.jpg",
            "/imgs/okrasne/okrasne_3.jpg",
            "/imgs/okrasne/okrasne_4.jpg",
            "/imgs/okrasne/okrasne_5.jpg",
        ]
    ],
    "konstrukcijsko_jeklo" => [
        "title" => "Projekti iz konstrukcijskega jekla",
        "description" => "Ograje, stopnišča, nadstreški in ograje.",
        "main_image" => "/imgs/okrasne/okrasne_1.jpg",
        "images" => [
            "/imgs/okrasne/okrasne_2.jpg",
            "/imgs/okrasne/okrasne_3.jpg",
            "/imgs/okrasne/okrasne_4.jpg",
            "/imgs/okrasne/okrasne_5.jpg",
        ]
    ]
];
?>
<section class="py-12 md:py-20" id="references">
    <div class="container">
        <div class="max-w-lg mx-auto mb-12 text-center">
            <span
                class="inline-block py-1 px-3 text-xs font-semibold bg-blue-100 text-blue-600 rounded-xl wow animate__animated animate__fadeInUp animated"
                data-wow-delay=".1s">{{__("Naši projekti")}}</span>
            <h2 class="text-3xl md:text-4xl mt-2 mb-4 font-bold font-heading wow animate__animated animate__fadeInUp animated"
                data-wow-delay=".3s">
                {{__("Poglej naše zadnje projekte")}}
            </h2>
        </div>
        @foreach($references as $index => $reference)
            <div class="flex flex-wrap -mx-3 mb-6 lg:mb-0">
                <div
                    class="w-full lg:w-1/2 flex flex-wrap px-3 mb-6 lg:md-0 {{$loop->index % 2 === 0 ? 'order-first' : 'order-last' }}">
                    @foreach($reference["images"] as $image)
                        <div class="hover-up-5 w-1/2 h-64 pr-3 pb-3 wow animate__animated animate__fadeIn animated"
                             data-wow-delay=".1s">
                            <a href="{{$image}}" class="glightbox" data-gallery="{{$index}}"
                               data-glightbox="description: {{__($reference['title'])}}">
                                <img class="h-full object-cover rounded" src="{{$image}}" alt=""/>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div
                    class="hover-up-5 w-full lg:w-1/2 px-3 relative wow animate__animated animate__fadeIn animated {{$loop->index % 2 === 0 ? 'order-last' : 'order-first' }}"
                    data-wow-delay=".6s">
                    <img class="lg:h-128 w-full object-cover rounded" src="{{$reference['main_image']}}" alt=""/>
                    <div class="absolute text-center bg-white rounded card-label-center px-4 py-12">
                        <div class="w-full flex place-content-center">
                            <p class="capitalize font-bold text-2xl text-center">{{__($reference["title"])}}</p>
                        </div>
                        <div class="w-full flex place-content-center">
                            <p class="font-sans text-center ext-white mt-5 mb-6">{{__($reference["description"])}}</p>
                        </div>
                        <a data-gallery="{{$index}}"
                           data-glightbox="description: {{__($reference['title'])}}"
                           class="glightbox tracking-wide hover-up-2 inline-block px-4 py-3 text-xs font-semibold leading-none bg-blue-400 hover:bg-blue-500 text-white rounded"
                           href="{{$reference['main_image']}}">{{__("Poglej več")}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
