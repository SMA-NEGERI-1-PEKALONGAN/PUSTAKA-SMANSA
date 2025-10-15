<div>
    <div class="relative px-6 py-14 mx-auto max-w-screen-xl text-center mt-16 mb-4">
        <div
            class="absolute top-50 left-10 w-32 h-32 bg-purple-500/40 dark:bg-blue-500/40 rounded-full blur-3xl opacity-50 animate-pulse">
        </div>
        <div
            class="absolute top-20 left-1/3 w-42 h-42 bg-fuchsia-500/40 dark:bg-indigo-500/40 rounded-full blur-3xl opacity-50 animate-pulse">
        </div>

        <div
            class="absolute top-40 right-20 w-24 h-24 bg-pink-500/30 dark:bg-purple-500/30 rounded-full blur-2xl opacity-50 animate-pulse delay-200">
        </div>
        <!-- Judul & Deskripsi -->
        <div class="mx-auto mb-16 max-w-2xl opacity-0 translate-y-10 transition-all duration-700 reveal delay-[300ms]">
            <h2 class="mb-4 text-4xl md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $sub_menu }}
            </h2>
            <p class="text-base md:text-lg font-light text-gray-600 dark:text-gray-400 leading-relaxed">
                Explore the whole collection of open-source web components and elements built with the utility classes
                from Tailwind.
            </p>
        </div>

        <!-- Breadcrumb -->
        <nav class="flex justify-center items-center px-5 py-3 bg-white/70 dark:bg-gray-800/60 backdrop-blur-sm border border-gray-100 dark:border-gray-700 rounded-full shadow-sm w-fit mx-auto transition-all duration-300 hover:shadow-md reveal reveal delay-[300ms]"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <!-- Home -->
                <li class="inline-flex items-center">
                    <a wire:navigate href="{{ route('Home') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-200 dark:hover:text-white transition">
                        <svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>

                <!-- Main Menu -->
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-gray-400 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-200 dark:hover:text-white transition">
                            {{ $main_menu }}
                        </a>
                    </div>
                </li>

                <!-- Sub Menu -->
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-gray-400 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span
                            class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $sub_menu }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>


    {{-- Section Blog --}}
    <section class="bg-white dark:bg-gray-900 py-16 mb-12">
        <div class="max-w-screen-xl mx-auto  px-6">

            <div class="grid gap-8 lg:grid-cols-3 sm:grid-cols-2 relative mb-4">
                {{-- item 1 --}}
                <article
                    class="p-5 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[300ms]">
                    {{-- add image --}}
                    <div class="flex justify-center mb-2">
                        <img class="w-full h-50 object-cover transform group-hover:scale-110 transition-all rounded-lg duration-500 cursor-pointer sm:filter sm:grayscale sm:hover:grayscale-0"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Kegiatan 1">
                    </div>
                    <div class="flex items-center my-2 text-gray-500">
                        <span
                            class="bg-green-100 text-gray-800 text- font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-white-800">
                            <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Lorem
                            ipsum dolor, sit amet consectetur adipisicing elit. Placeat, error.</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Tempora dolorum labore modi perspiciatis sit aliquid suscipit ad maiores
                        explicabo odio atque, quia, quis molestiae quos recusandae. Aliquid molestiae reprehenderit
                        dolore..</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Admin Pustaka avatar" />
                            <div class="font-medium dark:text-white">
                                <div>Admin Pustaka</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Oct 14, 2022 | 12:00
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-dark-600 dark:text-white hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                {{-- item 1 --}}
                <article
                    class="p-5 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[300ms]">
                    {{-- add image --}}
                    <div class="flex justify-center mb-2">
                        <img class="w-full h-50 object-cover transform group-hover:scale-110 transition-all rounded-lg duration-500 cursor-pointer sm:filter sm:grayscale sm:hover:grayscale-0"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Kegiatan 1">
                    </div>
                    <div class="flex items-center my-2 text-gray-500">
                        <span
                            class="bg-green-100 text-gray-800 text- font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-white-800">
                            <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Lorem
                            ipsum dolor, sit amet consectetur adipisicing elit. Placeat, error.</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Tempora dolorum labore modi perspiciatis sit aliquid suscipit ad maiores
                        explicabo odio atque, quia, quis molestiae quos recusandae. Aliquid molestiae reprehenderit
                        dolore..</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Admin Pustaka avatar" />
                            <div class="font-medium dark:text-white">
                                <div>Admin Pustaka</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Oct 14, 2022 | 12:00
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-dark-600 dark:text-white hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                {{-- item 1 --}}
                <article
                    class="p-5 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[300ms]">
                    {{-- add image --}}
                    <div class="flex justify-center mb-2">
                        <img class="w-full h-50 object-cover transform group-hover:scale-110 transition-all rounded-lg duration-500 cursor-pointer sm:filter sm:grayscale sm:hover:grayscale-0"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Kegiatan 1">
                    </div>
                    <div class="flex items-center my-2 text-gray-500">
                        <span
                            class="bg-green-100 text-gray-800 text- font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-white-800">
                            <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Lorem
                            ipsum dolor, sit amet consectetur adipisicing elit. Placeat, error.</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Tempora dolorum labore modi perspiciatis sit aliquid suscipit ad maiores
                        explicabo odio atque, quia, quis molestiae quos recusandae. Aliquid molestiae reprehenderit
                        dolore..</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Admin Pustaka avatar" />
                            <div class="font-medium dark:text-white">
                                <div>Admin Pustaka</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Oct 14, 2022 | 12:00
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-dark-600 dark:text-white hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>

            </div>

        </div>

    </section>

    <section class="max-w-screen-xl mx-auto mb-12 flex justify-center items-center reveal reveal delay-[300ms]">
        <nav aria-label="Page navigation"
            class=" backdrop-blur-md rounded-2xl px-4 py-2">
            <ul class="flex items-center space-x-1 text-base">
                <!-- Previous -->
                <li>
                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 text-gray-500 bg-white border border-gray-200 rounded-full hover:bg-blue-50 hover:text-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600 transition-all duration-300">
                        <svg class="w-3.5 h-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                    </a>
                </li>

                <!-- Page Numbers -->
                <li><a href="#"
                        class="flex items-center justify-center w-10 h-10 text-gray-500 bg-white border border-gray-200 rounded-full hover:bg-blue-50 hover:text-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600 transition-all duration-300">1</a>
                </li>
                <li><a href="#"
                        class="flex items-center justify-center w-10 h-10 text-gray-500 bg-white border border-gray-200 rounded-full hover:bg-blue-50 hover:text-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600 transition-all duration-300">2</a>
                </li>
                <li><a href="#"
                        class="z-10 flex items-center justify-center w-10 h-10 text-white bg-blue-600 border border-blue-600 rounded-full shadow-sm hover:bg-blue-700 transition-all duration-300">3</a>
                </li>
                <li><a href="#"
                        class="flex items-center justify-center w-10 h-10 text-gray-500 bg-white border border-gray-200 rounded-full hover:bg-blue-50 hover:text-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600 transition-all duration-300">4</a>
                </li>
                <li><a href="#"
                        class="flex items-center justify-center w-10 h-10 text-gray-500 bg-white border border-gray-200 rounded-full hover:bg-blue-50 hover:text-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600 transition-all duration-300">5</a>
                </li>

                <!-- Next -->
                <li>
                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 text-gray-500 bg-white border border-gray-200 rounded-full hover:bg-blue-50 hover:text-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600 transition-all duration-300">
                        <svg class="w-3.5 h-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </section>


</div>
