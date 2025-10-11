<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{ $title }} | {{ config('app.name') }}
    </title>
    {{-- image icon --}}
    <link rel="icon" href="{{ asset('LOGO SMANSA.png') }}" sizes="any" width="32" height="32">
    <link rel="icon" href="{{ asset('LOGO SMANSA.png') }}" type="image/svg+xml" width="32" height="32">
    <link rel="apple-touch-icon" href="{{ asset('LOGO SMANSA.png') }}" width="180" height="180">
    @vite('resources/css/app.css')

    <!-- Animations -->
    <style>
        html {
            --livewire-progress-bar-color: #8b5cf6 !important;
            /* ungu */
        }

        [wire\:navigate-progress-bar] {
            height: 4px !important;
            /* biar lebih tebal */
            box-shadow: 0 0 12px rgba(139, 92, 246, 0.8) !important;
            /* efek glow */
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(15px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.8s ease-out;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out forwards;
        }


        @keyframes blink {

            0%,
            50% {
                opacity: 1;
            }

            50.01%,
            100% {
                opacity: 0;
            }
        }

    </style>
    @livewireStyles
</head>

<body class="m-0 p-0 dark:bg-gray-900 bg-white">

    {{-- navbar --}}
    <nav id="navbar"
        class="fixed w-full top-0 z-50 transition-all duration-300 border-b border-transparent bg-transparent p-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <!-- Logo -->
            <a wire:navigate href="{{ route('Home') }}" class="flex justify-center items-center space-x-3">
                <img src="{{ asset('LOGO SMANSA.png') }}" class="h-12 w-12 object-contain drop-shadow-md"
                    alt="Logo SMANSA">
                <span class="text-3xl font-extrabold tracking-tight text-gray-800 dark:text-white">
                    PUSTAKA<span class="text-blue-600">+</span>
                </span>
            </a>

            <!-- Right section -->
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <!-- Dark mode toggle -->
                <button id="theme-toggle" type="button"
                    class="text-gray-900 dark:text-gray-200 focus:outline-none rounded-lg text-sm p-2.5 cursor-pointer border-0"
                    aria-label="Toggle theme">
                    <span id="theme-toggle-light-icon" class="hidden">
                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2172_3070)">
                                <path
                                    d="M12 6.89999C9.18752 6.89999 6.90002 9.18749 6.90002 12C6.90002 14.8125 9.18752 17.1 12 17.1C14.8125 17.1 17.1 14.8125 17.1 12C17.1 9.18749 14.8125 6.89999 12 6.89999ZM12 15.4125C10.125 15.4125 8.58752 13.875 8.58752 12C8.58752 10.125 10.125 8.58749 12 8.58749C13.875 8.58749 15.4125 10.125 15.4125 12C15.4125 13.875 13.875 15.4125 12 15.4125Z" />
                                <path
                                    d="M12 4.2375C12.45 4.2375 12.8625 3.8625 12.8625 3.375V1.5C12.8625 1.05 12.4875 0.637497 12 0.637497C11.55 0.637497 11.1375 1.0125 11.1375 1.5V3.4125C11.175 3.8625 11.55 4.2375 12 4.2375Z" />
                                <path
                                    d="M12 19.7625C11.55 19.7625 11.1375 20.1375 11.1375 20.625V22.5C11.1375 22.95 11.5125 23.3625 12 23.3625C12.45 23.3625 12.8625 22.9875 12.8625 22.5V20.5875C12.8625 20.1375 12.45 19.7625 12 19.7625Z" />
                                <path
                                    d="M18.1125 6.74999C18.3375 6.74999 18.5625 6.67499 18.7125 6.48749L19.9125 5.28749C20.25 4.94999 20.25 4.42499 19.9125 4.08749C19.575 3.74999 19.05 3.74999 18.7125 4.08749L17.5125 5.28749C17.175 5.62499 17.175 6.14999 17.5125 6.48749C17.6625 6.67499 17.8875 6.74999 18.1125 6.74999Z" />
                                <path
                                    d="M5.32501 17.5125L4.12501 18.675C3.78751 19.0125 3.78751 19.5375 4.12501 19.875C4.27501 20.025 4.50001 20.1375 4.72501 20.1375C4.95001 20.1375 5.17501 20.0625 5.32501 19.875L6.52501 18.675C6.86251 18.3375 6.86251 17.8125 6.52501 17.475C6.18751 17.175 5.62501 17.175 5.32501 17.5125Z" />
                                <path
                                    d="M22.5 11.175H20.5875C20.1375 11.175 19.725 11.55 19.725 12.0375C19.725 12.4875 20.1 12.9 20.5875 12.9H22.5C22.95 12.9 23.3625 12.525 23.3625 12.0375C23.3625 11.55 22.95 11.175 22.5 11.175Z" />
                                <path
                                    d="M4.23751 12C4.23751 11.55 3.86251 11.1375 3.37501 11.1375H1.50001C1.05001 11.1375 0.637512 11.5125 0.637512 12C0.637512 12.45 1.01251 12.8625 1.50001 12.8625H3.41251C3.86251 12.8625 4.23751 12.45 4.23751 12Z" />
                                <path
                                    d="M18.675 17.5125C18.3375 17.175 17.8125 17.175 17.475 17.5125C17.1375 17.85 17.1375 18.375 17.475 18.7125L18.675 19.9125C18.825 20.0625 19.05 20.175 19.275 20.175C19.5 20.175 19.725 20.1 19.875 19.9125C20.2125 19.575 20.2125 19.05 19.875 18.7125L18.675 17.5125Z" />
                                <path
                                    d="M5.32501 4.125C4.98751 3.7875 4.46251 3.7875 4.12501 4.125C3.78751 4.4625 3.78751 4.9875 4.12501 5.325L5.32501 6.525C5.47501 6.675 5.70001 6.7875 5.92501 6.7875C6.15001 6.7875 6.37501 6.7125 6.52501 6.525C6.86251 6.1875 6.86251 5.6625 6.52501 5.325L5.32501 4.125Z" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2172_3070">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <span id="theme-toggle-dark-icon" class="hidden"><svg class="fill-current" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.3125 1.50001C12.675 1.31251 12.0375 1.16251 11.3625 1.05001C10.875 0.975006 10.35 1.23751 10.1625 1.68751C9.93751 2.13751 10.05 2.70001 10.425 3.00001C13.0875 5.47501 14.0625 9.11251 12.975 12.525C11.775 16.3125 8.25001 18.975 4.16251 19.0875C3.63751 19.0875 3.22501 19.425 3.07501 19.9125C2.92501 20.4 3.15001 20.925 3.56251 21.1875C4.50001 21.75 5.43751 22.2 6.37501 22.5C7.46251 22.8375 8.58751 22.9875 9.71251 22.9875C11.625 22.9875 13.5 22.5 15.1875 21.5625C17.85 20.1 19.725 17.7375 20.55 14.8875C22.1625 9.26251 18.975 3.37501 13.3125 1.50001ZM18.9375 14.4C18.2625 16.8375 16.6125 18.825 14.4 20.0625C12.075 21.3375 9.41251 21.6 6.90001 20.85C6.63751 20.775 6.33751 20.6625 6.07501 20.55C10.05 19.7625 13.35 16.9125 14.5875 13.0125C15.675 9.56251 15 5.92501 12.7875 3.07501C17.5875 4.68751 20.2875 9.67501 18.9375 14.4Z" />
                        </svg></span>
                </button>

                <!-- Hamburger -->
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-900 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200  dark:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- Menu -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-200 rounded-lg  backdrop-blur-md md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent  md:dark:bg-transparent dark:border-gray-700">
                    <li><a wire:navigate href="{{ route('Home') }}"
                            class="block py-2 px-3 md:p-0 active-menus text-blue-600  dark:text-purple-400">Home</a>
                    </li>

                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="profileMenus"
                            class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-200 md:hover:bg-transparent md:border-0 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-purple-400">About
                            Us
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="profileMenus"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Sambutan
                                        Kepsek</a>
                                </li>

                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Visi
                                        & Misi</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Akreditasi</a>
                                </li>
                                {{-- <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="detailProfileMenu"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">About
                                        Us<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="detailProfileMenu"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Overview</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                                    downloads</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Billing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> --}}

                            </ul>

                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="layananMenus"
                            class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-200 md:hover:bg-transparent md:border-0 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-purple-400">Services
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="layananMenus"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Sirkulasi</a>
                                </li>


                                {{-- <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="detailProfileMenu"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">About
                                        Us<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="detailProfileMenu"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Overview</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                                    downloads</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Billing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> --}}

                            </ul>

                        </div>
                    </li>
                    <li><a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-purple-400">

                            Facilities
                        </a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="inovasiMenus"
                            class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-200 md:hover:bg-transparent md:border-0 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-purple-400">Innovation
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="inovasiMenus"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>


                            </ul>

                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="eResourceMenus"
                            class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-200 md:hover:bg-transparent md:border-0 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-purple-400">E-Resources
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="eResourceMenus"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Blogs</a>
                                </li>


                            </ul>

                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="prestasiMenus"
                            class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-200 md:hover:bg-transparent md:border-0 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-purple-400">Achievements
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="prestasiMenus"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="detaileResourceMenu"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Profile<svg
                                            class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="detaileResourceMenu"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Overview</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                                    downloads</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Billing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <li><a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-purple-400">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar  --}}



    <!-- Konten -->
    {{ $slot }}

    {{-- footer --}}
    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0  items-center">
                    <div class="items-center">
                        <a href="https://flowbite.com" class="flex items-center">
                            <img src="{{ asset('LOGO SMANSA.png') }}" class="mr-3 h-8" alt="FlowBite Logo" />
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PUSTAKA</span>
                        </a>
                        <a href="{{ route('filament.admin.auth.login') }}" wire:navigate
                            class="hidden md:inline-flex block mt-10  items-center justify-center gap-2 px-3 py-3 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-md hover:shadow-lg hover:from-indigo-500 hover:to-blue-500 transition-all duration-300 group">
                            <svg class="w-5 h-5 text-white group-hover:translate-x-1 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                            </svg>
                            Admin Login
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://flowbite.com" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <a href="{{ route('filament.admin.auth.login') }}" wire:navigate
                class="inline-flex md:hidden block mt-10  items-center justify-center gap-2 px-3 py-3 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-md hover:shadow-lg hover:from-indigo-500 hover:to-blue-500 transition-all duration-300 group">
                <svg class="w-5 h-5 text-white group-hover:translate-x-1 transition-transform duration-300"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                </svg>
                Admin Login
            </a>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a
                        href="https://pustaka.sman1pekalongan.sch.id" class="hover:underline">PERPUS SMANSA™</a>. All
                    Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>
           
        </div>
    </footer>

    {{-- end footer --}}

    <div wire:ignore class="fixed end-6 bottom-6 group z-50">
        <!-- Tombol Play -->
        <button id="btn_play"
            class="flex items-center justify-center text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 18V6l8 6-8 6Z" />
            </svg>
        </button>

        <!-- Tombol Pause -->
        <button id="btn_pause"
            class="hidden flex items-center justify-center text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 6H8a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm7 0h-1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Z" />
            </svg>
        </button>
    </div>

    <audio id="audio" src="{{ asset('audio/Langkah_Juara.mp3') }}" hidden type="audio/mpeg" preload="auto"></audio>


    <!-- Script toggle -->
    @livewireScripts
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        function initAudioControls() {
            const audio = document.getElementById('audio');
            const playBtn = document.getElementById('btn_play');
            const pauseBtn = document.getElementById('btn_pause');
            let hasPlayed = false;

            if (!audio || !playBtn || !pauseBtn) {
                console.warn('Audio controls not found.');
                return;
            }

            console.log('🎧 Audio controls initialized');

            // ▶️ Klik tombol Play
            playBtn.addEventListener('click', function () {
                // ✅ Play saat scroll pertama kali
                if (!hasPlayed) {
                    audio.play().then(() => {
                        playBtn.classList.add('hidden');
                        pauseBtn.classList.remove('hidden');
                    }).catch(err => {
                        console.log('Autoplay diblokir, perlu interaksi user:', err);
                    });
                    hasPlayed = true;
                }
                // ✅ Play saat tombol Play ditekan
                else {
                    audio.play().then(() => {
                        playBtn.classList.add('hidden');
                        pauseBtn.classList.remove('hidden');
                    }).catch(err => {
                        console.log('Autoplay diblokir, perlu interaksi user:', err);
                    });
                }
            });

            // ⏸️ Klik tombol Pause
            pauseBtn.addEventListener('click', function () {
                audio.pause();
                playBtn.classList.remove('hidden');
                pauseBtn.classList.add('hidden');
            });

            // 🔁 Saat lagu selesai (ended)
            audio.addEventListener('ended', function () {
                console.log('🎵 Lagu selesai');
                // Reset ke awal
                audio.currentTime = 0;
                // Tampilkan tombol Play lagi
                playBtn.classList.remove('hidden');
                pauseBtn.classList.add('hidden');
            });
        }
        // when load the page
        document.addEventListener('DOMContentLoaded', () => {
            const audio = document.getElementById('audio');
            const playBtn = document.getElementById('btn_play');
            const pauseBtn = document.getElementById('btn_pause');
            let hasPlayed = false;

            if (!audio || !playBtn || !pauseBtn) {
                console.warn('Audio controls not found.');
                return;
            }
            // window.addEventListener('scroll', function onScroll() {
            //     if (!hasPlayed) {
            //         audio.play().then(() => {
            //             playBtn.classList.add('hidden');
            //             pauseBtn.classList.remove('hidden');
            //         }).catch(err => {
            //             console.log('Autoplay diblokir, perlu interaksi user:', err);
            //         });
            //         hasPlayed = true;
            //     }
            // }, {
            //     once: true
            // });
            // run audio when 10second
            setTimeout(() => {
                if (!hasPlayed) {
                    audio.play().then(() => {
                        playBtn.classList.add('hidden');
                        pauseBtn.classList.remove('hidden');
                    }).catch(err => {
                        console.log('Autoplay diblokir, perlu interaksi user:', err);
                    });
                    hasPlayed = true;
                }
            }, 5000);
        })
        // Jalankan saat Livewire load
        document.addEventListener('livewire:load', () => {
            initAudioControls();
            if (typeof initFlowbite === "function") initFlowbite();
        });

        // Jalankan ulang setelah navigasi Livewire
        document.addEventListener('livewire:navigated', () => {
            initAudioControls();
            if (typeof initFlowbite === "function") initFlowbite();
        });

        // end audio

        // Inisialisasi Flowbite pertama kali
        document.addEventListener("DOMContentLoaded", () => {
            if (typeof initFlowbite === "function") {
                initFlowbite();
            }
        });

        // Re-init setelah navigasi Livewire
        document.addEventListener("livewire:navigated", () => {
            if (typeof initFlowbite === "function") {
                initFlowbite();
            }
        });

        function initScripts() {
            // Navbar scroll effect
            const navbar = document.getElementById("navbar");
            if (navbar && !navbar.dataset.initialized) {
                navbar.dataset.initialized = "true"; // biar gak double
                window.addEventListener("scroll", () => {
                    if (window.scrollY > 10) {
                        navbar.classList.add("backdrop-blur-md", "border-gray-200", "dark:border-gray-700");
                        navbar.classList.remove("border-transparent");
                    } else {
                        navbar.classList.remove("backdrop-blur-md", "border-gray-200", "dark:border-gray-700");
                        navbar.classList.add("border-transparent");
                    }
                });
            }

            // Theme toggle
            const themeToggleBtn = document.getElementById("theme-toggle");
            if (themeToggleBtn && !themeToggleBtn.dataset.initialized) {
                themeToggleBtn.dataset.initialized = "true";
                const darkIcon = document.getElementById("theme-toggle-dark-icon");
                const lightIcon = document.getElementById("theme-toggle-light-icon");

                if (localStorage.getItem("color-theme") === "dark" ||
                    (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
                    document.documentElement.classList.add("dark");
                    lightIcon.classList.remove("hidden");
                } else {
                    document.documentElement.classList.remove("dark");
                    darkIcon.classList.remove("hidden");
                }

                themeToggleBtn.addEventListener("click", () => {
                    darkIcon.classList.toggle("hidden");
                    lightIcon.classList.toggle("hidden");

                    if (document.documentElement.classList.contains("dark")) {
                        document.documentElement.classList.remove("dark");
                        localStorage.setItem("color-theme", "light");
                    } else {
                        document.documentElement.classList.add("dark");
                        localStorage.setItem("color-theme", "dark");
                    }
                });
            }

            // Typing effect
            const typingElement = document.getElementById("typing-text");
            if (typingElement && !typingElement.dataset.initialized) {
                typingElement.dataset.initialized = "true";
                const texts = ["the Digital Library of ", "SMANSA Pekalongan "];
                let textIndex = 0,
                    charIndex = 0,
                    isDeleting = false;

                function typeWriter() {
                    const currentText = texts[textIndex];
                    if (isDeleting) {
                        typingElement.textContent = currentText.substring(0, charIndex--);
                    } else {
                        typingElement.textContent = currentText.substring(0, charIndex++);
                    }

                    let speed = isDeleting ? 80 : 120;

                    if (!isDeleting && charIndex === currentText.length) {
                        speed = 1500;
                        isDeleting = true;
                    } else if (isDeleting && charIndex === 0) {
                        isDeleting = false;
                        textIndex = (textIndex + 1) % texts.length;
                    }

                    setTimeout(typeWriter, speed);
                }

                typeWriter();
            }
        }

        // Jalankan saat halaman pertama load
        document.addEventListener("DOMContentLoaded", initScripts);

        // Jalankan lagi setiap navigasi Livewire
        document.addEventListener("livewire:navigated", initScripts);

        function initRevealAnimations() {
            const reveals = document.querySelectorAll(".reveal");
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("opacity-100", "translate-y-0");
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            reveals.forEach(el => observer.observe(el));
        }

        // Pertama kali halaman load
        document.addEventListener("DOMContentLoaded", initRevealAnimations);

        // Setiap kali Livewire navigate selesai
        document.addEventListener("livewire:navigated", initRevealAnimations);

    </script>


</body>

</html>
