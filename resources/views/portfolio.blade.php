<section class="mb-8">
    <div class="container">
        <div class="flex w-full lg:h-full">
            <div class="flex-1 lg:pr-32 py-20 lg:py-16 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="max-w-2xl px-4 mx-auto lg:ml-0">
                    <h3 class="mb-8 text-4xl font-bold font-heading wow animate__animated animate__fadeInUp">
                        Portfolio</h3>
                    <div
                        x-data="{
                        faqs: [
                            {
                                question: '{{__("Tehnične storitve")}}',
                                answer: '{{__("3e.portfolio.technical")}}',
                                isOpen: true,
                            },
                            {
                                question: '{{__("Proizvodne tehnologije")}}',
                                answer: '{{__("3e.portfolio.industrial_technologies")}}',
                                isOpen: false,
                            },
                            {
                                question: '{{__("Proizvodi")}}',
                                answer: '{{__("3e.portfolio.products")}}',
                                isOpen: false,
                            },
                            {
                                question: '{{__("Montaža in transport")}}',
                                answer: '{{__("3e.portfolio.assembly_and_transport")}}',
                                isOpen: false,
                            },
                        ]
                    }"
                    >
                        <div class="leading-loose text-lg mt-6 wow animate__animated animate__fadeInUp">
                            <template x-for="faq in faqs" :key="faq.question">
                                <div>
                                    <button
                                        class="w-full font-bold border-b border-gray-200 py-3 flex justify-between items-center mt-4"
                                        @click="faqs = faqs.map(f => ({ ...f, isOpen: f.question !== faq.question ? false : !f.isOpen}))"
                                        x-bind:class="faq.isOpen ? 'text-blue-500' : ''">
                                        <div x-text="faq.question"></div>
                                        <svg x-show="!faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24"
                                             height="24">
                                            <path class="heroicon-ui"
                                                  d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/>
                                        </svg>
                                        <svg x-show="faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24"
                                             height="24">
                                            <path class="heroicon-ui"
                                                  d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/>
                                        </svg>
                                    </button>
                                    <div class="text-gray-700 text-sm mt-2 pl-3" x-html="faq.answer"
                                         x-show="faq.isOpen"></div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:relative lg:w-1/3 wow animate__animated animate__fadeInUp"
                 data-wow-delay=".3s">
                <div class="absolute left-0 md:-mr-32 mt-24 flex items-center">
                    <img class="jump lg:max-w-lg" src="/imgs/portfolio.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>
