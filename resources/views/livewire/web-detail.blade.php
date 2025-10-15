<div>
    <div class="relative px-6 py-14 mx-auto max-w-screen-xl text-center mt-16 mb-4\\">
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
    <section class="bg-white dark:bg-gray-900 py-16">
        <div class="max-w-screen-xl mx-auto  px-6">

            <!-- ===== Konten Utama ===== -->
            <article
                class=" bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden">
                <!-- Gambar Utama -->
                <div class="relative group">
                    <img class="w-full h-96 object-cover transition-transform duration-700 transform group-hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Gambar Kegiatan">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                </div>

                <!-- Konten -->
                <div class="p-10">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, tenetur!
                    </h1>
                    <!-- Body Artikel -->
                    <div
                        class="prose prose-lg dark:prose-invert max-w-none text-gray-700 dark:text-gray-200 leading-relaxed">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, perferendis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, perferendis.
                        </p>
                    </div>
                </div>
            </article>


        </div>
    </section>


</div>
