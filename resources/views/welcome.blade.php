<x-guest-layout>
    <div class="sm:mt-20">
        <form action="https://laravel-courses.com/courses" method="GET">
            <div class="w-full relative max-w-[740px] lg:max-w-[860px] mx-auto px-5 pb-10 lg:pb-[138px] pt-20 lg:pt-24">
                <div class="w-full max-w-[400px] sm:max-w-full mx-auto flex flex-col items-center justify-center">
                    <h1 class="lg:max-w-[750px] text-center w-full mx-auto heading-primary mb-3">
                        The best Courses and Books on the
                        <span class="text-orange-100">Laravel</span> ecosystem
                    </h1>

                    <p class="text-lg-secondary w-full text-center my-4 mb-10">
                        Find the right books and courses on the Laravel framework
                        and related topics to suite your level of expertise. Know
                        how good a course is through your peers review and share
                        your own too.
                    </p>

                    <!-- ::::::::::::search for header:::::::::::: -->
                    <div
                        class="grid grid-cols-1 md:grid-cols-[1fr,200px] lg:flex items-center flex-col sm:flex-row gap-5 max-w-[400px] sm:max-w-[700px] md:mb-0 w-full">
                        <input type="search" name="keyword" placeholder="Enter keywords to search courses"
                            class="md:max-w-[482px] lg:max-w-[582px] w-full bg-white h-12 border border-orange-100 rounded-lg px-3.5 outline-none"
                            required />
                        <button type="submit" class="btn-primary w-full lg:w-[106px] h-12 shrink-0">
                            Search
                        </button>
                    </div>
                </div>

                <!-- ::::::::::::header angles:::::::::::: -->
                <img src="https://laravel-courses.com/img/left-top-angle.png" alt="angle"
                    class="absolute hidden lg:block pointer-events-none top-[150px] -left-28" />
                <img src="https://laravel-courses.com/img/left-bottom-angle.png" alt="angle"
                    class="absolute hidden lg:block pointer-events-none top-[370px] -left-12" />
                <img src="https://laravel-courses.com/img/right-angle.png" alt="angle"
                    class="absolute hidden lg:block pointer-events-none top-[70px] -right-6" />
                <img src="https://laravel-courses.com/img/right-bottom-angle.png" alt="angle"
                    class="absolute hidden lg:block pointer-events-none top-[360px] -right-24" />
            </div>
        </form>

        <img src="https://laravel-courses.com/img/right-center-angle.png" alt="angle"
            class="w-auto h-auto object-contain absolute top-1/2 -translate-y-1/2 right-10 pointer-events-none hidden lg:block" />

        <!-- ::::::::::::series logo:::::::::::: -->
        <div class="max-w-[440px] sm:max-w-[740px] lg:max-w-7xl w-full mx-auto mt-2 md:mt-0 px-4 sm:px-6 lg:px-8">
            <ul
                class="grid grid-cols-2 sm:grid-cols-3 lg:flex items-center flex-nowrap justify-center lg:justify-between md:gap-y-7 gap-3">

                @foreach ($series as $item)
                    <li class="w-full lg:max-w-[165px]">
                        <a href="./courses.php"
                            class="bg-white border mx-auto border-orange-100 box-shadow w-full h-12 md:h-16 rounded-lg flex items-center justify-center">
                            <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                class="w-20 md:w-auto h-auto object-contain" />
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    </header>

    <main>
        <!-- ::::::::::::|Featured Courses|:::::::::::: -->
        <section class="mt-20 lg:mt-[140px]">
            <h1 class="heading-tertiory text-center mb-10 md:mb-16">
                Featured Courses
            </h1>

            <!-- ::::::::::::card:::::::::::: -->
            <div
                class="max-w-[400px] sm:max-w-[700px] lg:max-w-7xl w-full sm:px-6 lg:px-8 mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10">
                @foreach ($course as $item)
                    @include('components.course-box',['item' =>$item])
                @endforeach
            </div>

            <div class="flex justify-center mt-12 mb-12">
                <a href="./courses.php">
                    <button class="btn-primary max-w-[160px] h-14 w-32">
                        Browse all
                    </button>
                </a>
            </div>
        </section>
    </main>
    </div>

    <div wire:id="roYEyiX37yXO8WpXBLDX"
        wire:initial-data='{"fingerprint":{"id":"roYEyiX37yXO8WpXBLDX","name":"subscribe-panel","locale":"en","path":"\/","method":"GET","v":"acj"},"effects":{"listeners":[]},"serverMemo":{"children":[],"errors":[],"htmlHash":"bc5d8d22","data":{"email":"","error":"","result":false,"subscribed":false},"dataMeta":[],"checksum":"177583bee99bcd191c7137e7241f4f3d7407a5d03c270619ac4c1456aa285000"}}'>
        <!-- ::::::::::::subscribe:::::::::::: -->
        <div class="w-full bg-update bg-no-repeat bg-cover lg:h-[400px] py-10 lg:py-0">
            <div
                class="max-w-[440px] sm:max-w-7xl px-4 sm:px-6 lg:px-8 w-full flex flex-col lg:flex-row justify-between items-center gap-5 mx-auto h-full">
                <div class="max-w-[579px] w-full">
                    <h2 class="heading-secondary">Don’t miss any updates</h2>
                    <p class="mt-3.5 text-base-primary">
                        We will be covering course reviews, comparison between the best
                        courses, and will be sharing exclusive discounts with you on a
                        monthly basis.
                    </p>

                    <div class="mt-6 md:mt-12 w-full flex flex-col sm:flex-row items-center gap-5">
                        <input wire:model="email" type="email" placeholder="Your email address"
                            class="md:max-w-[385px] w-full h-14 bg-white border border-orange-100 rounded-lg px-3.5 text-base-primary text-[#262626] placeholder:text-current outline-none"
                            required />
                        <button wire:click="subscribe"
                            class="bg-white w-full sm:w-[135px] shrink-0 h-14 rounded-lg flex justify-center items-center border border-orange-100 text-lg-primary font-medium text-orange-100 hover:bg-orange-100 hover:text-white transition-all duration-300">
                            Subscribe
                        </button>
                    </div>
                </div>

                <div class="hidden md:flex justify-center">
                    <img src="https://laravel-courses.com/img/letter.png" alt="letter"
                        class="w-auto h-auto object-contain" />
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
