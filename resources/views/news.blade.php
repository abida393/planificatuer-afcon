<x-app-layout>
    <div class="py-12 bg-transparent font-sans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center mb-16">
                <h1
                    class="text-5xl md:text-6xl font-extrabold text-[#b8860b] uppercase tracking-wider font-serif mb-4 drop-shadow-sm">
                    Latest News
                </h1>
                <p class="text-gray-500 text-xl font-light tracking-wide">Stay updated with AFCON 2025</p>
                <div class="h-1.5 w-24 bg-[#c1272d] mx-auto mt-8 rounded-full shadow-sm"></div>
            </div>

            <!-- Featured Article (Hero) -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl mb-16 group cursor-pointer">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent z-10 transition-opacity duration-300 group-hover:from-black/95">
                </div>
                <img src="/images/hero.png" alt="Featured News"
                    class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute bottom-0 left-0 p-8 md:p-12 z-20 max-w-4xl">
                    <span
                        class="bg-[#c1272d] text-white px-4 py-1 rounded-full text-sm font-bold uppercase tracking-wider mb-4 inline-block">Tournament
                        News</span>
                    <h2
                        class="text-3xl md:text-5xl font-bold text-white mb-4 leading-tight group-hover:text-[#b8860b] transition-colors">
                        AFCON 2025 Opening Ceremony: A Spectacle Awaits in Rabat</h2>
                    <p class="text-gray-200 text-lg md:text-xl line-clamp-2 mb-6">Morocco is set to host a dazzling
                        opening ceremony at the Prince Moulay Abdellah Stadium, promising a celebration of African
                        culture and football excellence.</p>
                    <span class="text-white/80 font-medium flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        2 Hours ago
                    </span>
                </div>
            </div>

            <!-- News Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                <!-- Article 1 -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col h-full">
                    <div class="relative h-64 overflow-hidden">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10">
                        </div>
                        <img src="/images/training.png" alt="Training"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <span
                            class="absolute top-4 left-4 z-20 bg-[#b8860b] text-white px-3 py-1 rounded-full text-xs font-bold uppercase">Teams</span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#c1272d] transition-colors leading-tight">
                            National Teams Arrive in Morocco as Preparations Heat Up</h3>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-3 flex-1">Teams from across the continent have
                            begun touching down in the host cities, with training camps in full swing ahead of the
                            tournament kickoff.</p>
                        <div
                            class="flex items-center justify-between text-xs text-gray-400 font-medium mt-auto pt-4 border-t border-gray-100">
                            <span>Yesterday</span>
                            <span class="flex items-center gap-1 group-hover:text-[#b8860b] transition-colors">Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg></span>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col h-full">
                    <div class="relative h-64 overflow-hidden">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10">
                        </div>
                        <img src="/images/trophy.png" alt="Trophy"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <span
                            class="absolute top-4 left-4 z-20 bg-[#1a1a1a] text-white px-3 py-1 rounded-full text-xs font-bold uppercase">History</span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#c1272d] transition-colors leading-tight">
                            The Golden Prize: A Look at the Evolution of the AFCON Trophy</h3>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-3 flex-1">Explore the history and craftsmanship
                            behind the most coveted prize in African football, waiting to be lifted in Rabat.</p>
                        <div
                            class="flex items-center justify-between text-xs text-gray-400 font-medium mt-auto pt-4 border-t border-gray-100">
                            <span>2 Days ago</span>
                            <span class="flex items-center gap-1 group-hover:text-[#b8860b] transition-colors">Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg></span>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col h-full">
                    <div class="relative h-64 overflow-hidden bg-gray-100 flex items-center justify-center">
                        <div class="text-6xl">🏟️</div>
                        <span
                            class="absolute top-4 left-4 z-20 bg-[#c1272d] text-white px-3 py-1 rounded-full text-xs font-bold uppercase">Venues</span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#c1272d] transition-colors leading-tight">
                            Stadium Guide: Inside the 6 Magnificent Host Venues</h3>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-3 flex-1">From the historic Stade Mohammed V to
                            the modern marvels in Tangier and Agadir, take a virtual tour of the battlegrounds.</p>
                        <div
                            class="flex items-center justify-between text-xs text-gray-400 font-medium mt-auto pt-4 border-t border-gray-100">
                            <span>3 Days ago</span>
                            <span class="flex items-center gap-1 group-hover:text-[#b8860b] transition-colors">Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>