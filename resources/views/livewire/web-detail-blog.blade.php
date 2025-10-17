<div>
    <div class="relative px-6 py-14 mx-auto max-w-screen-xl text-center mt-16 ">
        <div
            class="absolute top-50 left-10 w-32 h-32 bg-purple-500/40 dark:bg-blue-500/40 rounded-full blur-3xl opacity-50 animate-pulse">
        </div>
        <div
            class="absolute top-20 left-1/3 w-42 h-42 bg-fuchsia-500/40 dark:bg-indigo-500/40 rounded-full blur-3xl opacity-50 animate-pulse">
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
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 px-6">

            <!-- ===== Konten Utama ===== -->
            <article
                class="md:col-span-2 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden reveal reveal delay-[300ms]">
                <!-- Gambar Utam a -->
                <div class="relative group">
                    <img class="w-full h-62 md:h-96 lg:h-96 object-cover"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Gambar Kegiatan">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                </div>

                <!-- Konten -->
                <div class="p-5">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, tenetur!
                    </h1>

                    <!-- Info Penulis -->
                    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-8">
                        <span>By <a href="#" class="font-medium text-blue-600 hover:underline">John Doe</a></span>
                        <span>•</span>
                        <time datetime="2022-03-28" class="font-medium">Mar 28, 2022</time>
                    </div>

                    <!-- Body Artikel -->
                    <div
                        class="prose prose-lg dark:prose-invert max-w-none text-gray-700 dark:text-gray-200 leading-relaxed">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, perferendis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat illum distinctio ratione velit dolorum expedita dolor voluptate aut ea ad repudiandae minima animi voluptatum dolores eos quibusdam voluptates exercitationem, omnis adipisci ab, perferendis cumque unde quasi laborum! Et, neque natus quos debitis aliquid dicta, nobis omnis facere placeat cupiditate ea magnam corrupti quae esse! Illum voluptates delectus earum dicta atque hic alias ipsum impedit eligendi, excepturi consequatur praesentium quia magni nulla deleniti maxime quidem veniam nihil, culpa ipsa enim obcaecati porro. Facere numquam quasi facilis minima molestias id eaque nemo consectetur pariatur hic temporibus accusamus quidem odit iste, dolores odio. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt itaque, autem placeat soluta tenetur corporis inventore suscipit mollitia voluptates similique! Deserunt perferendis suscipit, cum maiores adipisci at officia quos enim accusantium, iure nostrum molestiae provident quo blanditiis expedita nobis eius illo, quis fuga aspernatur alias? Nostrum aut, consequatur aspernatur quia optio obcaecati iure id incidunt? Obcaecati harum, odio quo officia quod eum exercitationem, aliquam, deleniti dignissimos omnis eos! Quae, iure rerum. Necessitatibus debitis sed fugiat atque quisquam. Ut cum blanditiis est distinctio reprehenderit ipsa quos doloremque, numquam voluptas officiis corrupti! Maiores officiis natus dolor reiciendis et aliquid unde vero autem?
                        </p>
                    </div>
                </div>
            </article>

            <!-- ===== Sidebar ===== -->
            <aside class="space-y-8">

                <!-- Search -->
                <div
                    class="bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-xl p-6 shadow-sm reveal reveal delay-[300ms]">
                    <h2 class="text-base font-semibold text-gray-800 dark:text-gray-100 mb-4">Search</h2>
                    <div class="relative">
                        <input type="text" placeholder="Cari artikel..."
                            class="w-full pl-10 pr-4 py-2 text-sm border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-400 dark:bg-gray-900 dark:text-white focus:outline-none transition">
                        <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                        </svg>
                    </div>
                </div>

                <!-- Related Posts -->
                <div
                    class="bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-xl p-6 shadow-sm reveal reveal delay-[300ms]">
                    <h2 class="text-base font-semibold text-gray-800 dark:text-gray-100 mb-4">Related Posts</h2>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#"
                                class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 transition">Cara
                                Membuat Blog dengan Tailwind</a></li>
                        <li><a href="#"
                                class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 transition">Optimasi
                                SEO untuk Blog Modern</a></li>
                        <li><a href="#"
                                class="block text-gray-700 dark:text-gray-300 hover:text-blue-600 transition">Panduan
                                Desain UI Sederhana</a></li>
                    </ul>
                </div>

                <!-- Popular Tags -->
                <div
                    class="bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-xl p-6 shadow-sm mb-2 reveal reveal delay-[300ms]">
                    <h2 class="text-base font-semibold text-gray-800 dark:text-gray-100 mb-4">Popular Tags</h2>
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="px-3 py-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-full hover:bg-blue-100 hover:text-blue-700 dark:hover:bg-blue-900 dark:hover:text-white transition">Tailwind</a>
                        <a href="#"
                            class="px-3 py-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-full hover:bg-blue-100 hover:text-blue-700 dark:hover:bg-blue-900 dark:hover:text-white transition">Laravel</a>
                        <a href="#"
                            class="px-3 py-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-full hover:bg-blue-100 hover:text-blue-700 dark:hover:bg-blue-900 dark:hover:text-white transition">CSS</a>
                        <a href="#"
                            class="px-3 py-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-full hover:bg-blue-100 hover:text-blue-700 dark:hover:bg-blue-900 dark:hover:text-white transition">Blog</a>
                    </div>
                </div>

            </aside>

        </div>
    </section>


</div>
