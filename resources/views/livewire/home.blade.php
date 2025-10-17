<div>

    {{-- hero section --}}
    <section class="relative bg-white dark:bg-gray-900 overflow-hidden">

        <!-- Glow / Node efek background -->
        <!-- Glow 1 -->
        <div
            class="absolute top-0 left-0 w-72 h-72 bg-purple-400/40 dark:bg-purple-600/40 rounded-full filter blur-3xl sm:top-30 opacity-70 dark:opacity-60 animate-pulse">
        </div>

        <!-- Glow 2 -->
        <div
            class="absolute bottom-1/5 right-0 w-60 h-60 bg-pink-400/40 dark:bg-blue-500/40 rounded-full filter blur-3xl opacity-70 dark:opacity-60 delay-200 animate-pulse">
        </div>

        <!-- Glow 3 -->
        <div
            class="absolute top-0 left-1/2 w-72 h-72 bg-fuchsia-400/30 dark:bg-indigo-400/30 rounded-full filter blur-3xl opacity-60 dark:opacity-50 delay-500 animate-pulse sm:top-30">
        </div>


        <div
            class="relative grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 mt-12 my-4">
            <!-- Gambar brand -->
            <div class="order-1 lg:order-2 lg:col-span-5 flex justify-center mb-8 lg:mb-0 sm:mb-12 lg:justify-end">
                <!-- Carousel Flowbite -->
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div class="order-2 lg:order-1 place-self-center lg:col-span-7 text-center lg:text-left relative z-10">
                <!-- Tambah style animasi -->
                <h1
                    class="relative z-10 max-w-3xl mx-auto mb-6 text-center text-4xl md:text-5xl xl:text-6xl font-extrabold tracking-tight leading-tight bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 dark:from-purple-300 dark:via-blue-400 dark:to-cyan-400 bg-clip-text text-transparent animate-fade-in-down">

                    Welcome to
                    <span id="typing-text"
                        class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 dark:from-fuchsia-400 dark:via-purple-400 dark:to-blue-400">
                    </span>
                </h1>


                <p
                    class="max-w-2xl mb-8 font-light text-gray-600 md:text-lg lg:text-xl dark:text-gray-300 animate-fade-in-up">
                    Unlock a window to the world at your fingertips — your journey of learning and growth starts here
                    with the best digital library. 📚
                </p>

                <div
                    class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 animate-fade-in-up delay-200">
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-lg transition-transform duration-300 ">
                        Learn More
                        <div class="hover:translate-x-1 transition-transform duration-300">
                            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </a>
                    <!-- Modal toggle -->
                    <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                        class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-gray-900 border border-gray-300 rounded-xl hover:bg-gray-100 hover:scale-105 transition-all duration-500 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 cursor-pointer">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                        Watch Video
                    </button>
                </div>
            </div>
        </div>


    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
                <div
                    class="flex flex-col items-center justify-center animate-fade-in-up opacity-0 transition-all duration-700 reveal">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">10K+</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Books</dd>
                </div>
                <div
                    class="flex flex-col items-center justify-center animate-fade-in-up opacity-0 transition-all duration-700 reveal">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">
                        1K+
                    </dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">
                        Users
                    </dd>
                </div>
                <div
                    class="flex flex-col items-center justify-center animate-fade-in-up opacity-0 transition-all duration-700 reveal">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">
                        25K+
                    </dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">
                        Reviews
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    {{-- end hero section --}}


    <section class="bg-white dark:bg-gray-900 overflow-hidden relative">
        <div
            class="absolute top-25 left-1/3 w-32 h-32 bg-purple-600/40 dark:bg-blue-500/40 rounded-full blur-3xl opacity-70 animate-pulse">
        </div>

        <div
            class="absolute top-40 right-20 w-24 h-24 bg-pink-500/30 dark:bg-purple-500/30 rounded-full blur-2xl opacity-70 animate-pulse delay-200">
        </div>

        <div
            class="absolute bottom-20 left-1/3 w-20 h-20 bg-fuchsia-500/30 dark:bg-indigo-500/30 rounded-full blur-2xl opacity-70 animate-pulse delay-500">
        </div>
        <div
            class="absolute top-1/2 left-10 w-32 h-32 bg-pink-600/40 dark:bg-purple-500/40 rounded-full blur-3xl opacity-70 animate-pulse">
        </div>
        <div
            class="absolute bottom-10 right-1/4 w-16 h-16 bg-purple-500/20 dark:bg-blue-500/20 rounded-full blur-xl opacity-70 animate-pulse delay-700">
        </div>
        <div class="py-16 px-4 mx-auto max-w-6xl text-center z-10">
            <!-- Tabs Header -->
            <div class="flex justify-center mb-10 opacity-0 transition-all duration-700 reveal ">
                <ul id="modern-tab" data-tabs-toggle="#modern-tab-content"
                    class="flex flex-wrap justify-center border-b border-gray-200 dark:border-gray-700 gap-3 md:gap-8 "
                    role="tablist">
                    <li role="presentation">
                        <button id="sambutan-tab" data-tabs-target="#sambutan" type="button" role="tab"
                            aria-controls="sambutan" aria-selected="true"
                            class="cursor-pointer inline-flex items-center justify-center gap-2 px-6 py-3 text-lg font-semibold text-gray-600 dark:text-gray-300 border-b-2 border-transparent hover:text-indigo-600 dark:hover:text-indigo-400 hover:border-indigo-500 transition-all duration-300 rounded-t-lg focus:outline-none data-[headlessui-state=selected]:border-indigo-500 data-[headlessui-state=selected]:text-indigo-600">
                            🎓 Principal's Welcome
                        </button>
                    </li>
                    <li role="presentation">
                        <button id="motto-tab" data-tabs-target="#motto" type="button" role="tab" aria-controls="motto"
                            aria-selected="false"
                            class="inline-flex cursor-pointer  items-center justify-center gap-2 px-6 py-3 text-lg font-semibold text-gray-600 dark:text-gray-300 border-b-2 border-transparent hover:text-indigo-600 dark:hover:text-indigo-400 hover:border-indigo-500 transition-all duration-300 rounded-t-lg focus:outline-none">
                            💡 Motto
                        </button>
                    </li>
                    <li role="presentation">
                        <button id="visi-misi-tab" data-tabs-target="#visi-misi" type="button" role="tab"
                            aria-controls="visi-misi" aria-selected="false"
                            class="inline-flex cursor-pointer  items-center justify-center gap-2 px-6 py-3 text-lg font-semibold text-gray-600 dark:text-gray-300 border-b-2 border-transparent hover:text-indigo-600 dark:hover:text-indigo-400 hover:border-indigo-500 transition-all duration-300 rounded-t-lg focus:outline-none">
                            🌟 Vision & Mission
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Tabs Content -->
            <div id="modern-tab-content " class="mt-8">
                <!-- Sambutan -->
                <div id="sambutan" role="tabpanel" aria-labelledby="sambutan-tab"
                    class="opacity-0 transition-all duration-700 reveal p-8 bg-gradient-to-br from-white via-indigo-50 to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 rounded-3xl shadow-lg border border-gray-200 dark:border-gray-700">
                    <div class="grid md:grid-cols-2 gap-10 items-center text-left">
                        <!-- Foto Kepala Sekolah -->
                        <div class="flex justify-center">
                            <div
                                class="sm:filter sm:grayscale sm:hover:grayscale-0 max-w-sm transition-all duration-300 cursor-pointer relative group w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden shadow-xl border-4 border-transparent bg-gradient-to-tr from-indigo-500 to-purple-500 p-1  ">
                                <img src="{{ asset('img/foto_kepsek.jpg') }}" alt="Kepala Sekolah"
                                    class="rounded-full object-cover w-full h-full border-4 border-white dark:border-gray-800">

                            </div>
                        </div>

                        <!-- Sambutan Teks -->
                        <div>
                            <h3 class="text-3xl md:text-4xl font-bold text-indigo-700 dark:text-indigo-400 mb-4">
                                Sambutan Kepala Sekolah
                            </h3>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                                Assalamu’alaikum Warahmatullahi Wabarakatuh.
                                <br><br>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates alias, minus, accusantium, natus ab tempora assumenda repellat ea eligendi ipsa atque numquam cupiditate. Hic quia, possimus aspernatur, sapiente iusto voluptatibus adipisci odio praesentium nemo, velit voluptate fugiat at expedita quibusdam? Porro quo velit dolorum officiis hic asperiores nesciunt esse quasi itaque. Vero aliquam illo iure vitae culpa repudiandae, architecto quidem voluptatum, voluptates cupiditate unde possimus commodi eveniet eum quisquam ut odio? Laudantium est quae omnis porro harum, nulla neque at illo adipisci eum ea aspernatur? Autem unde quia temporibus sunt rem? Commodi soluta ea vitae quis beatae vel cupiditate qui..
                            </p>
                            <p class="font-semibold text-indigo-600 dark:text-indigo-400 mt-4">
                                — Wachid Mucharom, S.Pd., M.Pd.
                                <span class="block text-sm font-normal text-gray-500 dark:text-gray-400">Kepala
                                    Sekolah</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- motto -->
                <div id="motto" role="tabpanel" aria-labelledby="motto-tab"
                    class="hidden p-8 bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-200 dark:border-gray-700 transition-all duration-500">
                    <h3 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Motto Sekolah</h3>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, sint animi accusantium sapiente autem excepturi at ipsam eveniet odio harum.
                    </p>
                </div>

                <!-- Visi & Misi -->
                <div id="visi-misi" role="tabpanel" aria-labelledby="visi-misi-tab"
                    class="hidden p-8 bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-200 dark:border-gray-700 transition-all duration-500">
                    <h3 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Visi & Misi</h3>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-3">
                        <strong>Visi:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, quis..
                    </p>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        <strong>Misi:</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium nobis sapiente totam eos ratione nemo aspernatur necessitatibus earum, debitis optio?.
                    </p>
                </div>
            </div>
        </div>

    </section>


    {{-- features --}}
    <section class="relative bg-white dark:bg-gray-900 ">
        <!-- Glow Bulatan Kecil -->
        <div
            class="absolute top-25 left-1/2 w-32 h-32 bg-purple-500/40 dark:bg-blue-500/40 rounded-full blur-3xl opacity-70 animate-pulse">
        </div>

        <div
            class="absolute top-40 right-20 w-24 h-24 bg-pink-500/30 dark:bg-purple-500/30 rounded-full blur-2xl opacity-70 animate-pulse delay-200">
        </div>

        <div
            class="absolute bottom-20 left-1/3 w-20 h-20 bg-fuchsia-500/30 dark:bg-indigo-500/30 rounded-full blur-2xl opacity-70 animate-pulse delay-500">
        </div>

        <div
            class="absolute bottom-10 right-1/4 w-16 h-16 bg-purple-500/20 dark:bg-blue-500/20 rounded-full blur-xl opacity-70 animate-pulse delay-700">
        </div>

        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6 relative z-10">
            <div
                class=" mx-auto mb-8 max-w-screen-sm lg:mb-16 opacity-0 translate-y-10 transition-all duration-700 reveal">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Feature list
                </h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    We use an agile approach to test assumptions and connect with the needs of your audience early and
                    often.
                </p>
            </div>

            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 justify-center mb-5">

                <a href="#"
                    class="group relative block bg-white/80 dark:bg-gray-800/70 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-md backdrop-blur-sm hover:backdrop-blur-lg hover:bg-white/60 dark:hover:bg-gray-700/60 hover:shadow-[0_0_30px_rgba(139,92,246,0.25)] dark:hover:shadow-[0_0_40px_rgba(99,102,241,0.35)] p-6 text-center text-gray-500 dark:text-gray-400 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[100ms] hover:scale-102  cursor-pointer overflow-hidden">

                    <!-- Glow Layer -->
                    <div
                        class="absolute inset-0 rounded-2xl bg-gradient-to-br from-purple-500/10 via-pink-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 blur-2xl transition-all duration-700">
                    </div>

                    <!-- Content Wrapper -->
                    <div class="relative z-10">
                        <!-- Icon -->
                        <svg class="mx-auto mb-4 w-12 h-12 text-purple-500 dark:text-purple-400 transition-transform duration-500 group-hover:rotate-6"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>

                        <!-- Title -->
                        <h3
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                            Request A Book
                        </h3>

                        <!-- Description -->
                        <p
                            class="mb-5 font-light text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque numquam velit nemo suscipit
                            quas hic quaerat dicta.
                        </p>

                        <!-- Button -->
                        <span
                            class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-lg hover:shadow-[0_0_25px_rgba(147,51,234,0.5)] transition-all duration-300">
                            Learn More
                            <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                </a>
                <a href="#"
                    class="group relative block bg-white/80 dark:bg-gray-800/70 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-md backdrop-blur-sm hover:backdrop-blur-lg hover:bg-white/60 dark:hover:bg-gray-700/60 hover:shadow-[0_0_30px_rgba(139,92,246,0.25)] dark:hover:shadow-[0_0_40px_rgba(99,102,241,0.35)] p-6 text-center text-gray-500 dark:text-gray-400 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[100ms] hover:scale-102  cursor-pointer overflow-hidden">

                    <!-- Glow Layer -->
                    <div
                        class="absolute inset-0 rounded-2xl bg-gradient-to-br from-purple-500/10 via-pink-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 blur-2xl transition-all duration-700">
                    </div>

                    <!-- Content Wrapper -->
                    <div class="relative z-10">
                        <!-- Icon -->
                        <svg class="mx-auto mb-4 w-12 h-12 text-purple-500 dark:text-purple-400 transition-transform duration-500 group-hover:rotate-6"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>

                        <!-- Title -->
                        <h3
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                            Request A Book
                        </h3>

                        <!-- Description -->
                        <p
                            class="mb-5 font-light text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque numquam velit nemo suscipit
                            quas hic quaerat dicta.
                        </p>

                        <!-- Button -->
                        <span
                            class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-lg hover:shadow-[0_0_25px_rgba(147,51,234,0.5)] transition-all duration-300">
                            Learn More
                            <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                </a>
                <a href="#"
                    class="group relative block bg-white/80 dark:bg-gray-800/70 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-md backdrop-blur-sm hover:backdrop-blur-lg hover:bg-white/60 dark:hover:bg-gray-700/60 hover:shadow-[0_0_30px_rgba(139,92,246,0.25)] dark:hover:shadow-[0_0_40px_rgba(99,102,241,0.35)] p-6 text-center text-gray-500 dark:text-gray-400 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[100ms] hover:scale-102  cursor-pointer overflow-hidden">

                    <!-- Glow Layer -->
                    <div
                        class="absolute inset-0 rounded-2xl bg-gradient-to-br from-purple-500/10 via-pink-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 blur-2xl transition-all duration-700">
                    </div>

                    <!-- Content Wrapper -->
                    <div class="relative z-10">
                        <!-- Icon -->
                        <svg class="mx-auto mb-4 w-12 h-12 text-purple-500 dark:text-purple-400 transition-transform duration-500 group-hover:rotate-6"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>

                        <!-- Title -->
                        <h3
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                            Request A Book
                        </h3>

                        <!-- Description -->
                        <p
                            class="mb-5 font-light text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque numquam velit nemo suscipit
                            quas hic quaerat dicta.
                        </p>

                        <!-- Button -->
                        <span
                            class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-lg hover:shadow-[0_0_25px_rgba(147,51,234,0.5)] transition-all duration-300">
                            Learn More
                            <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- end features --}}

    {{-- gallery --}}
    <section class="bg-white dark:bg-gray-900 overflow-hidden relative">
        <div
            class="absolute top-25 left-1/2 w-32 h-32 bg-purple-600/40 dark:bg-blue-500/40 rounded-full blur-3xl opacity-70 animate-pulse">
        </div>

        <div
            class="absolute top-40 right-20 w-24 h-24 bg-pink-500/30 dark:bg-purple-500/30 rounded-full blur-2xl opacity-70 animate-pulse delay-200">
        </div>

        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6 relative mb-5">
            <div
                class="mx-auto mb-8 max-w-screen-sm lg:mb-16 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[300ms]">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Gallery</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of
                    open-source web components and elements built with the utility classes from Tailwind</p>
            </div>


            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 my-20 ">
                <!-- Item 1 -->
                <div
                    class="relative opacity-0 reveal group overflow-hidden rounded-xl shadow-lg transition-all duration-700 cursor-pointer sm:filter sm:grayscale sm:hover:grayscale-0">
                    <img class="h-auto w-full object-cover transform group-hover:scale-110 transition-all duration-500"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Kegiatan 1">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end justify-center md:flex hidden">
                        <div class="text-center mb-4">
                            <span class="block text-white text-base font-semibold">Kegiatan Prakarya</span>
                            <p class="text-gray-200 text-sm">Melatih kreativitas siswa</p>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div
                    class="relative opacity-0 reveal group overflow-hidden rounded-xl shadow-lg transition-all duration-700 cursor-pointer sm:filter sm:grayscale sm:hover:grayscale-0">
                    <img class="h-auto w-full object-cover transform group-hover:scale-110 transition-all duration-500"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="Kegiatan 2">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end justify-center md:flex hidden">
                        <div class="text-center mb-4">
                            <span class="block text-white text-base font-semibold">Kegiatan Prakarya</span>
                            <p class="text-gray-200 text-sm">Melatih kreativitas siswa</p>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div
                    class="relative opacity-0 reveal group overflow-hidden rounded-xl shadow-lg transition-all duration-700 cursor-pointer sm:filter sm:grayscale sm:hover:grayscale-0">
                    <img class="h-auto w-full object-cover transform group-hover:scale-110 transition-all duration-500"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Kegiatan 3">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end justify-center md:flex hidden">
                        <div class="text-center mb-4">
                            <span class="block text-white text-base font-semibold">Kegiatan Prakarya</span>
                            <p class="text-gray-200 text-sm">Melatih kreativitas siswa</p>
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div
                    class="relative opacity-0 reveal group overflow-hidden rounded-xl shadow-lg transition-all duration-700 cursor-pointer sm:filter sm:grayscale sm:hover:grayscale-0">
                    <img class="h-auto w-full object-cover transform group-hover:scale-110 transition-all duration-500"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="Kegiatan 4">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end justify-center md:flex hidden">
                        <div class="text-center mb-4">
                            <span class="block text-white text-base font-semibold">Kegiatan Prakarya</span>
                            <p class="text-gray-200 text-sm">Melatih kreativitas siswa</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#"
                class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-lg transition-transform duration-300 opacity-0 reveal ">
                Show All
                <div class="hover:translate-x-1 transition-transform duration-300">
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </a>

        </div>
    </section>
    {{-- end gallery --}}

    {{-- blogs --}}
    <section class="bg-white dark:bg-gray-900 relative overflow-hidden ">
        <!-- Glow Bulatan Kecil -->
        <div
            class="absolute top-50 left-10 w-32 h-32 bg-purple-500/40 dark:bg-blue-500/40 rounded-full blur-3xl opacity-50 animate-pulse">
        </div>
        <div
            class="absolute top-20 left-1/3 w-42 h-42 bg-fuchsia-500/40 dark:bg-indigo-500/40 rounded-full blur-3xl opacity-50 animate-pulse">
        </div>

        <div
            class="absolute top-40 right-20 w-24 h-24 bg-pink-500/30 dark:bg-purple-500/30 rounded-full blur-2xl opacity-50 animate-pulse delay-200">
        </div>

        <div
            class="absolute top-1/2 right-1/2 left-1/2 w-62 h-62 bg-pink-500/30 dark:bg-purple-500/30 rounded-full blur-2xl opacity-50 animate-pulse delay-200">
        </div>

        <div
            class="absolute bottom-1/5 left-10 w-30 h-30 bg-fuchsia-500/30 dark:bg-indigo-500/30 rounded-full blur-2xl opacity-50 animate-pulse delay-500">
        </div>

        <div
            class="absolute bottom-10 right-0 w-42 h-42 bg-purple-500/20 dark:bg-blue-500/20 rounded-full blur-xl opacity-50 animate-pulse delay-700">
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 relative">
            <div
                class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[300ms]">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our
                    Blog</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test
                    assumptions and connect with the needs of your audience early and often.</p>
            </div>
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
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, error.</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum labore modi perspiciatis sit aliquid suscipit ad maiores explicabo odio atque, quia, quis molestiae quos recusandae. Aliquid molestiae reprehenderit dolore..</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Admin Pustaka avatar" />
                            <div class="font-medium dark:text-white">
                                <div>Admin Pustaka</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Oct 14, 2022 | 12:00</div>
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
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, error.</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum labore modi perspiciatis sit aliquid suscipit ad maiores explicabo odio atque, quia, quis molestiae quos recusandae. Aliquid molestiae reprehenderit dolore..</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Admin Pustaka avatar" />
                            <div class="font-medium dark:text-white">
                                <div>Admin Pustaka</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Oct 14, 2022 | 12:00</div>
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
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, error.</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum labore modi perspiciatis sit aliquid suscipit ad maiores explicabo odio atque, quia, quis molestiae quos recusandae. Aliquid molestiae reprehenderit dolore..</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Admin Pustaka avatar" />
                            <div class="font-medium dark:text-white">
                                <div>Admin Pustaka</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Oct 14, 2022 | 12:00</div>
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

    <div class=" relative flex justify-center mb-10 animate-fade-in-up delay-300 mt-4">
        <a href="#"
            class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-lg transition-transform duration-300 opacity-0 reveal ">
            Show All
            <div class="hover:translate-x-1 transition-transform duration-300">
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </a>
    </div>
    {{-- endblog --}}

    {{-- testimonials --}}
    <section class="bg-white dark:bg-gray-900 overflow-hidden relative">
        <div
            class="absolute top-20 left-1/3 w-32 h-32 bg-purple-600/40 dark:bg-blue-500/40 rounded-full blur-3xl opacity-70 animate-pulse">
        </div>
        <div
            class="absolute w-32 h-32 bottom-25 right-1/4 bg-fuchsia-600/40 dark:bg-indigo-500/40 rounded-full blur-3xl opacity-70 animate-pulse">
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6 relative mb-5">
            <div
                class="mx-auto mb-8 max-w-screen-sm lg:mb-16 opacity-0 translate-y-10 transition-all duration-700 reveal delay-[300ms]">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Testimonials</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of
                    open-source web components and elements built with the utility classes from Tailwind</p>
            </div>

            <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-76 overflow-hidden rounded-lg auto my-20 md:mt-20 opacity-0 transition-all duration-700 reveal">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out px-2 " data-carousel-item>
                        <figure
                            class="w-full max-w-3xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6 sm:p-10 transition-all duration-1000 ease-in-out">
                            <div class="flex items-center mb-4 text-yellow-300">
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                            <blockquote>
                                <p class="md:text-2xl font-semibold text-gray-900 dark:text-white text-left text-1xl">
                                    "Suasana perpustakaan yang nyaman untuk belajar."</p>
                            </blockquote>
                            <figcaption class="flex items-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Anton</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">Siswa</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out px-2 " data-carousel-item>
                        <figure
                            class="w-full max-w-3xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6 sm:p-10 transition-all duration-1000 ease-in-out">
                            <div class="flex items-center mb-4 text-yellow-300">
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                            <blockquote>
                                <p class="md:text-2xl font-semibold text-gray-900 dark:text-white text-left text-1xl">
                                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, blanditiis?
                                    Ducimus sunt atque mollitia perferendis praesentium nobis, iusto dolore dolor
                                    veritatis, numquam repellat odio in id nemo similique quis? A!."</p>
                            </blockquote>
                            <figcaption class="flex items-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Arno</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">Guru</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out px-2 " data-carousel-item>
                        <figure
                            class="w-full max-w-3xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6 sm:p-10 transition-all duration-1000 ease-in-out">
                            <div class="flex items-center mb-4 text-yellow-300">
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                            <blockquote>
                                <p class="md:text-2xl font-semibold text-gray-900 dark:text-white text-left text-1xl">
                                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus facere qui
                                    voluptates vitae quidem similique? Nesciunt reprehenderit ut facilis at?."
                                </p>
                            </blockquote>
                            <figcaption class="flex items-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Alamm</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">Tata Usaha</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out px-2 " data-carousel-item>
                        <figure
                            class="w-full max-w-3xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6 sm:p-10 transition-all duration-1000 ease-in-out">
                            <div class="flex items-center mb-4 text-yellow-300">
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                            <blockquote>
                                <p class="md:text-2xl font-semibold text-gray-900 dark:text-white text-left text-1xl">
                                    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem nisi
                                    beatae a sint odit sed eius. Ratione atque sunt temporibus.."</p>
                            </blockquote>
                            <figcaption class="flex items-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Micheal</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">Alumni</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                {{-- <div class="flex justify-center items-center">
                    <button type="button"
                        class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                            <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex justify-center items-center h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                            <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- end testimonials --}}

    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Vide Profile Perpustakaan
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <iframe class="w-full h-96" src="https://www.youtube.com/embed/06JqeGXqUVM?si=G74EmYzv_lBCFMTE"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
    {{-- end modal --}}
</div>
