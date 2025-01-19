<header class="container mx-auto p-4 w-full">
    <div class="bg-x-prime bg-opacity-30 rounded-x-huge p-6 border-2 border-x-x-white border-y-x-white">
        <div class="flex flex-col gap-10">
            <div class="flex flex-wrap items-center gap-4">
                <a href="{{ route('views.guest.home') }}" class="block w-20">
                    <img src="{{ asset('img/logo.webp') }}?v={{ env('APP_VERSION') }}" loading="lazy"
                        alt="{{ env('APP_NAME') }} logo image" class="block w-full" />
                </a>
                <nav class="hidden lg:block w-max ms-20">
                    <ul class="flex flex-wrap items-center gap-4">
                        <li class="w-max">
                            <a href="{{ route('views.guest.home') }}"
                                class="flex flex-wrap w-max items-center border border-x-x-white border-y-x-white rounded-full p-[4px] outline-none hover:bg-x-white focus:bg-x-white">
                                <span
                                    class="flex items-center justify-center bg-x-white text-x-black rounded-full aspect-square w-8">
                                    <svg class="w-5 h-5 pointer-events-none" viewBox="0 -960 960 960"
                                        fill="currentColor">
                                        <path
                                            d="M200-160v-366L88-440l-48-64 440-336 160 122v-82h120v174l160 122-48 64-112-86v366H520v-240h-80v240H200Zm80-80h80v-240h240v240h80v-347L480-739 280-587v347Zm120-319h160q0-32-24-52.5T480-632q-32 0-56 20.5T400-559Zm-40 319v-240h240v240-240H360v240Z" />
                                    </svg>
                                </span>
                                <span class="text-x-black text-base font-x-thin ps-4 pe-5">Accueil</span>
                            </a>
                        </li>
                        <li class="w-max">
                            <a href=""
                                class="flex flex-wrap w-max items-center border border-x-x-white border-y-x-white rounded-full p-[4px] outline-none hover:bg-x-white focus:bg-x-white">
                                <span
                                    class="flex items-center justify-center bg-x-white text-x-black rounded-full aspect-square w-8">
                                    <svg class="w-5 h-5 pointer-events-none" viewBox="0 -960 960 960"
                                        fill="currentColor">
                                        <path
                                            d="m480-80-10-120h-10q-142 0-241-99t-99-241q0-142 99-241t241-99q71 0 132.5 26.5t108 73q46.5 46.5 73 108T800-540q0 75-24.5 144t-67 128q-42.5 59-101 107T480-80Zm80-146q71-60 115.5-140.5T720-540q0-109-75.5-184.5T460-800q-109 0-184.5 75.5T200-540q0 109 75.5 184.5T460-280h100v54Zm-101-95q17 0 29-12t12-29q0-17-12-29t-29-12q-17 0-29 12t-12 29q0 17 12 29t29 12Zm-29-127h60q0-30 6-42t38-44q18-18 30-39t12-45q0-51-34.5-76.5T460-720q-44 0-74 24.5T344-636l56 22q5-17 19-33.5t41-16.5q27 0 40.5 15t13.5 33q0 17-10 30.5T480-558q-35 30-42.5 47.5T430-448Zm30-65Z" />
                                    </svg>
                                </span>
                                <span class="text-x-black text-base font-x-thin ps-4 pe-5">À propos de nous</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="{{ route('views.guest.trial') }}"
                    class="ms-auto flex flex-wrap w-max items-center border border-x-x-black border-y-x-black rounded-full outline-none text-base font-x-thin px-5 py-2 bg-x-black text-x-white hover:bg-x-white hover:text-x-black focus:bg-x-white focus:text-x-black hover:border-x-x-white hover:border-y-x-white focus:border-x-x-white focus:border-y-x-white">
                    Essai Gratuit
                </a>
                <neo-dropdown class="lg:hidden">
                    <button slot="trigger"
                        class="w-[calc(2rem+8px)] h-[calc(2rem+8px)] flex items-center justify-center border border-x-x-black border-y-x-black rounded-full outline-none text-base font-x-thin bg-x-black text-x-white hover:bg-x-white hover:text-x-black focus:bg-x-white focus:text-x-black hover:border-x-x-white hover:border-y-x-white focus:border-x-x-white focus:border-y-x-white">
                        <svg class="w-7 h-7 pointer-events-none" viewBox="0 -960 960 960" fill="currentColor">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>
                    </button>
                    <ul class="flex flex-col items-center gap-4 p-6">
                        <li class="w-max">
                            <a href="{{ route('views.guest.home') }}"
                                class="flex flex-wrap w-max items-center border border-x-x-white border-y-x-white rounded-full p-[4px] outline-none hover:bg-x-white focus:bg-x-white">
                                <span
                                    class="flex items-center justify-center bg-x-white text-x-black rounded-full aspect-square w-8">
                                    <svg class="w-5 h-5 pointer-events-none" viewBox="0 -960 960 960"
                                        fill="currentColor">
                                        <path
                                            d="M200-160v-366L88-440l-48-64 440-336 160 122v-82h120v174l160 122-48 64-112-86v366H520v-240h-80v240H200Zm80-80h80v-240h240v240h80v-347L480-739 280-587v347Zm120-319h160q0-32-24-52.5T480-632q-32 0-56 20.5T400-559Zm-40 319v-240h240v240-240H360v240Z" />
                                    </svg>
                                </span>
                                <span class="text-x-black text-base font-x-thin ps-4 pe-5">Accueil</span>
                            </a>
                        </li>
                        <li class="w-max">
                            <a href=""
                                class="flex flex-wrap w-max items-center border border-x-x-white border-y-x-white rounded-full p-[4px] outline-none hover:bg-x-white focus:bg-x-white">
                                <span
                                    class="flex items-center justify-center bg-x-white text-x-black rounded-full aspect-square w-8">
                                    <svg class="w-5 h-5 pointer-events-none" viewBox="0 -960 960 960"
                                        fill="currentColor">
                                        <path
                                            d="m480-80-10-120h-10q-142 0-241-99t-99-241q0-142 99-241t241-99q71 0 132.5 26.5t108 73q46.5 46.5 73 108T800-540q0 75-24.5 144t-67 128q-42.5 59-101 107T480-80Zm80-146q71-60 115.5-140.5T720-540q0-109-75.5-184.5T460-800q-109 0-184.5 75.5T200-540q0 109 75.5 184.5T460-280h100v54Zm-101-95q17 0 29-12t12-29q0-17-12-29t-29-12q-17 0-29 12t-12 29q0 17 12 29t29 12Zm-29-127h60q0-30 6-42t38-44q18-18 30-39t12-45q0-51-34.5-76.5T460-720q-44 0-74 24.5T344-636l56 22q5-17 19-33.5t41-16.5q27 0 40.5 15t13.5 33q0 17-10 30.5T480-558q-35 30-42.5 47.5T430-448Zm30-65Z" />
                                    </svg>
                                </span>
                                <span class="text-x-black text-base font-x-thin ps-4 pe-5">À propos de nous</span>
                            </a>
                        </li>
                    </ul>
                </neo-dropdown>
            </div>
            @yield('header')
        </div>
    </div>
</header>
