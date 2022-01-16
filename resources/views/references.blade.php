<?php
$references = [
    "okrasne" => [
        "title" => "Decorative Sculptures",
        "description" => "Stainless steel - AISI 304, Scotch-Brite finishin pasivited surface",
        "main_image" => "/imgs/okrasne/okrasne_1.jpg",
        "images" => [
            "/imgs/okrasne/okrasne_2.jpg",
            "/imgs/okrasne/okrasne_3.jpg",
            "/imgs/okrasne/okrasne_4.jpg",
            "/imgs/okrasne/okrasne_5.jpg",
        ],
        "thumbs" => [
            "/imgs/thumbs/thumb_01.jpg",
            "/imgs/thumbs/thumb_04.jpg",
            "/imgs/thumbs/thumb_03.jpg",
            "/imgs/thumbs/thumb_02.jpg",
        ]
    ],
    "nerjavno_jeklo" => [
        "title" => "Stainless steel construction",
        "description" => "Europallets, special equipment for pharmaceutical industry.",
        "main_image" => "/imgs/special/special_1.jpg",
        "images" => [
            "/imgs/special/special_1.jpg",
            "/imgs/special/special_2.jpg",
            "/imgs/special/special_3.jpg",
            "/imgs/special/special_4.jpg",
        ],
        "thumbs" => [
            "/imgs/thumbs/thumb_13.jpg",
            "/imgs/thumbs/thumb_14.jpg",
            "/imgs/thumbs/thumb_15.jpg",
            "/imgs/thumbs/thumb_16.jpg",
        ]
    ],
    "konstrukcijsko_jeklo" => [
        "title" => "Construction steel projects",
        "description" => "Fences, stairs and roofs",
        "main_image" => "/imgs/konstrukcijsko/konstrukcijsko_6.jpg",
        "images" => [
            "/imgs/konstrukcijsko/konstrukcijsko_2.jpg",
            "/imgs/konstrukcijsko/konstrukcijsko_7.jpg",
            "/imgs/konstrukcijsko/konstrukcijsko_5.jpg",
            "/imgs/konstrukcijsko/konstrukcijsko_4.jpg",
        ],
        "thumbs" => [
            "/imgs/thumbs/thumb_11.jpg",
            "/imgs/thumbs/thumb_06.jpg",
            "/imgs/thumbs/thumb_08.jpg",
            "/imgs/thumbs/thumb_09.jpg",
        ]
    ]
];
?>
<section class="py-12 md:py-20" id="references">
    <div class="container">
        <div class="max-w-lg mx-auto mb-12 text-center">
            <span
                class="inline-block py-1 px-3 text-xs font-semibold bg-blue-100 text-blue-600 rounded-xl wow animate__animated animate__fadeInUp animated"
                data-wow-delay=".1s">{{word("Our projects")}}</span>
            <h2 class="text-3xl md:text-4xl mt-2 mb-4 font-bold font-heading wow animate__animated animate__fadeInUp animated"
                data-wow-delay=".3s">
                {{word("See our latest projects")}}
            </h2>
        </div>
        @foreach($references as $index => $reference)
            <div class="flex flex-wrap -mx-3 mb-6 lg:mb-0">
                <div
                    class="w-full lg:w-1/2 flex flex-wrap px-3 mb-24 lg:md-0 {{$loop->index % 2 === 0 ? 'order-first' : 'order-last' }}">
                    @foreach($reference["images"] as $imageIndex => $image)
                        <div class="hover-up-5 w-1/2 h-64 pr-3 pb-3 wow animate__animated animate__fadeIn animated"
                             data-wow-delay=".1s">
                            <a href="{{$image}}" class="glightbox" data-gallery="{{$index}}"
                               data-glightbox="description: {{word($reference['title'])}}">
                                <img class="h-full object-cover rounded" src="{{$reference["thumbs"][$imageIndex]}}" alt=""/>
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
                            <p class="capitalize font-bold text-2xl text-center">{{word($reference["title"])}}</p>
                        </div>
                        <div class="w-full flex place-content-center">
                            <p class="font-sans text-center ext-white mt-5 mb-6">{{word($reference["description"])}}</p>
                        </div>
                        <a data-gallery="{{$index}}"
                           data-glightbox="description: {{word($reference['title'])}}"
                           class="glightbox tracking-wide hover-up-2 inline-block px-4 py-3 text-xs font-semibold leading-none bg-blue-400 hover:bg-blue-500 text-white rounded"
                           href="{{$reference['main_image']}}">{{word("See more")}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
