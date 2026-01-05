<nav class="bg-afcon-red text-white shadow-lg sticky top-0 z-50 relative overflow-hidden">
    <!-- Pattern Overlay (Zlij Effect) -->
    <div class="absolute inset-0 opacity-10 pointer-events-none mix-blend-overlay"
        style="background-image: url('/images/site_bg_pattern.png'); background-size: 300px;">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex items-center justify-between h-20">
            <!-- Logo Section -->
            <div class="flex-shrink-0 flex items-center group cursor-pointer" title="Atlas Go - AFCON 2025">
                <img src="/images/atlas_go_final_logo.png" alt="Atlas Go Logo"
                    class="h-20 w-auto object-contain transform group-hover:scale-105 transition-transform duration-300">

                <div class="hidden md:block w-px h-8 bg-white/20 mx-3"></div>
                <div class="hidden md:flex flex-col">
                    <span class="text-[0.6rem] font-bold tracking-widest text-white/80 uppercase leading-none">AFRICA
                        CUP</span>
                    <span class="text-[0.6rem] font-bold tracking-widest text-white/80 uppercase leading-none mt-0.5">OF
                        NATIONS</span>
                    <span
                        class="text-[0.6rem] font-bold tracking-widest text-afcon-light-green uppercase leading-none mt-0.5">MOROCCO
                        25</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('dashboard') }}"
                        class="relative text-white px-1 py-2 text-sm font-bold uppercase tracking-wider hover:text-white/80 transition-colors group">
                        Home
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 bg-afcon-light-green transform {{ request()->routeIs('dashboard') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }} transition-transform origin-left"></span>
                    </a>

                    <a href="{{ route('news') }}"
                        class="relative text-white/90 px-1 py-2 text-sm font-bold uppercase tracking-wider hover:text-white transition-colors group">
                        News
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 bg-afcon-light-green transform {{ request()->routeIs('news') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }} transition-transform origin-left"></span>
                    </a>

                    <a href="#"
                        class="relative text-white/90 px-1 py-2 text-sm font-bold uppercase tracking-wider hover:text-white transition-colors group">
                        Videos
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 bg-afcon-light-green transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                    </a>

                    <a href="{{ route('calendar') }}"
                        class="relative text-white/90 px-1 py-2 text-sm font-bold uppercase tracking-wider hover:text-white transition-colors group">
                        Calendar
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 bg-afcon-light-green transform {{ request()->routeIs('calendar') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }} transition-transform origin-left"></span>
                    </a>

                    <a href="#"
                        class="relative text-white/90 px-1 py-2 text-sm font-bold uppercase tracking-wider hover:text-white transition-colors group">
                        Archive
                        <div
                            class="absolute bottom-0 left-0 w-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            <div
                                class="h-[2px] w-full bg-afcon-light-green transform scale-x-0 group-hover:scale-x-100 transition-transform duration-200 origin-center">
                            </div>
                            <svg class="absolute w-2.5 h-2.5 text-afcon-light-green fill-current transform scale-0 group-hover:scale-100 transition-transform duration-200 delay-75"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button"
                    class="bg-afcon-red inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white focus:outline-none"
                    aria-controls="mobile-menu" aria-expanded="false"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden bg-afcon-red border-t border-white/10" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('dashboard') }}"
                class="text-white block px-3 py-2 rounded-md text-base font-bold uppercase bg-white/10">Home</a>
            <a href="{{ route('news') }}"
                class="text-white/80 hover:text-white block px-3 py-2 rounded-md text-base font-bold uppercase">News</a>
            <a href="#"
                class="text-white/80 hover:text-white block px-3 py-2 rounded-md text-base font-bold uppercase">Videos</a>
            <a href="{{ route('calendar') }}"
                class="text-white/80 hover:text-white block px-3 py-2 rounded-md text-base font-bold uppercase">Calendar</a>
            <a href="#"
                class="text-white/80 hover:text-white block px-3 py-2 rounded-md text-base font-bold uppercase">Archive</a>
        </div>
    </div>
</nav>