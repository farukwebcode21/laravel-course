<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div x-data='{"show":true,"style":"success","message":null}'
        :class="{ 'bg-indigo-500': style == 'success', 'bg-red-700': style == 'danger', 'bg-gray-500': style != 'success' &&
                style != 'danger' }"
        style="display: none" x-show="show && message" x-init="document.addEventListener('banner-message', event => {
            style = event.detail.style;
            message = event.detail.message;
            show = true;
        });">
        <div class="max-w-screen-xl mx-auto py-2 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center min-w-0">
                    <span class="flex p-2 rounded-lg"
                        :class="{ 'bg-indigo-600': style == 'success', 'bg-red-600': style == 'danger' }">
                        <svg x-show="style == 'success'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <svg x-show="style == 'danger'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <svg x-show="style != 'success' && style != 'danger'" class="h-5 w-5 text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>

                    <p class="ml-3 font-medium text-sm text-white truncate" x-text="message"></p>
                </div>

                <div class="shrink-0 sm:ml-3">
                    <button type="button" class="-mr-1 flex p-2 rounded-md focus:outline-none sm:-mr-2 transition"
                        :class="{ 'hover:bg-indigo-600 focus:bg-indigo-600': style ==
                            'success', 'hover:bg-red-600 focus:bg-red-600': style == 'danger' }"
                        aria-label="Dismiss" x-on:click="show = false">
                        <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden">
        <div class="w-full bg-header h-auto bg-no-repeat bg-cover">
            <header class="w-full h-full relative">
                <!-- ::::::::::::navbar:::::::::::: -->
                <nav x-data="{ open: false }" class="">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <a href="./index.php">
                                        <img class="w-56 h-auto object-contain" src="{{ asset('img/textlogo.png') }}"
                                            alt="" />
                                    </a>
                                </div>

                                <!-- Navigation Links -->
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"
                                        href="./courses.php">
                                        Courses
                                    </a>

                                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"
                                        href="./books.php">
                                        Books
                                    </a>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <div class="flex items-center md:ml-4">
                                    <a href="./login.php"
                                        class="text-sm font-medium text-gray-500 hover:text-gray-900">Sign in</a>
                                    <a href="./logout.php"
                                        class="ml-8 inline-flex items-center justify-center rounded border border-transparent bg-black px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500">Sign
                                        up</a>
                                </div>
                            </div>

                            <!-- Hamburger -->
                            <div class="-mr-2 flex items-center sm:hidden">
                                <button @click="open = ! open"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Responsive Navigation Menu -->
                    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-white">
                        <div class="pt-2 pb-3 space-y-1">
                            <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition"
                                href="./courses.php">
                                Courses
                            </a>

                            <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition"
                                href="./books.php">
                                Books
                            </a>
                        </div>

                        <!-- Responsive Settings Options -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="mt-3 space-y-1">
                                <!-- Account Management -->
                                <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition"
                                    href="./login.php">
                                    Sign In
                                </a>

                                <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition"
                                    href="./logout.php">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
                {{ $slot }}
                <footer class="w-full bg-dark-100 pt-[94px] relative">
                    <img src="{{asset('img/footer-cure.png')}}" alt="Stylish Design"
                        class="w-auto h-auto object-contain absolute bottom-0 right-0 pointer-events-none z-10" />
                    <div
                        class="max-w-[440px] sm:max-w-7xl w-full px-4 sm:px-6 lg:px-8 mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5 pb-[50px]">
                        <div>
                            <h2 class="text-lg-primary text-white">Course by Series</h2>
                            <ul class="mt-5">
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Laravel</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">PHP</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Livewire</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Vue.js</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-lg-primary text-white">Course by Duration</h2>
                            <ul class="mt-5">
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">1-5 hours</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">5-10 hours</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">10+ hours</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-lg-primary text-white">Course by Level</h2>
                            <ul class="mt-5">
                                <li class="mb-2">
                                    <a href="./beginner.php"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Beginner</a>
                                </li>
                                <li class="mb-2">
                                    <a href="./intermediate.php"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Intermediate</a>
                                </li>
                                <li class="mb-2">
                                    <a href="./advanced.php"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Advanced</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-lg-primary text-white">Course by Platform</h2>
                            <ul class="mt-5">
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Laracasts</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Laravel
                                        Daily</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Codecourse</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Spatie</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-lg-primary text-white">Course by Topics</h2>
                            <ul class="mt-5">
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Eloquent</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Validation</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Refactoring</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#"
                                        class="text-links text-gray-100 text-base before:text-gray-100">Testing</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- ::::::::::::footer bottom:::::::::::: -->
                    <div
                        class="max-w-[440px] md:max-w-7xl w-full px-4 sm:px-6 lg:px-8 mx-auto flex items-center justify-between gap-5 pb-8">
                        <ul class="hidden md:flex items-center gap-3 z-50 relative">
                            <li>
                                <a href="#" target="_blank">
                                    <svg class="hover:filter hover:brightness-200" xmlns="http://www.w3.org/2000/svg"
                                        width="15" height="12" fill="none">
                                        <path fill="#898F92"
                                            d="M15 1.412a6.217 6.217 0 0 1-1.764.487 3.043 3.043 0 0 0 1.348-1.68c-.595.353-1.255.6-1.95.741C12.067.353 11.27 0 10.368 0 8.683 0 7.306 1.355 7.306 3.028c0 .24.03.473.08.692A8.79 8.79 0 0 1 1.045.558a2.96 2.96 0 0 0-.415 1.517c0 1.052.538 1.984 1.37 2.513a3.08 3.08 0 0 1-1.399-.353v.021c0 1.469 1.061 2.697 2.467 2.972a3.072 3.072 0 0 1-1.384.05 3.023 3.023 0 0 0 1.09 1.505 3.1 3.1 0 0 0 1.778.598A6.171 6.171 0 0 1 .731 10.68c-.243 0-.487-.014-.731-.042A8.808 8.808 0 0 0 4.718 12c5.65 0 8.755-4.616 8.755-8.619 0-.134 0-.261-.007-.395A6.094 6.094 0 0 0 15 1.412Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p class="text-base-primary text-sm text-[#E5E5E580] leading-5 z-50 relative">
                            Developed by
                            <a href="#" target="_blank" class="hover:underline font-medium">Faruk Ahmad ⚡️</a>
                        </p>
                        <span></span>
                    </div>
                </footer>
</body>

</html>
