<x-app-layout>
    <!-- Page Container with API Data -->
    <div class="min-h-screen relative font-sans" x-data="{ 
            matches: [], 
            loading: true, 
            filter: 'all',
            init() {
                fetch('/api/matches')
                    .then(res => res.json())
                    .then(data => {
                        this.matches = data;
                        this.loading = false;
                    })
                    .catch(err => {
                        console.error('Error fetching matches:', err);
                        this.loading = false;
                    });
            }
         }">

        <!-- Fixed Background Logo (Watermark) -->
        <div class="fixed inset-0 z-0 pointer-events-none flex items-center justify-center opacity-[0.03]">
            <img src="/images/atlas_go_logo_large.png" class="w-[800px] h-auto object-contain">
        </div>

        <!-- Zellige Top Border -->
        <div
            class="fixed top-20 inset-x-0 h-4 bg-[url('/images/zellige_fixed.png')] bg-repeat-x opacity-80 z-20 shadow-sm">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-24">

            <!-- Professional Header -->
            <div class="text-center mb-16 relative">
                <div class="inline-block relative">
                    <h1
                        class="text-6xl md:text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#b8860b] to-[#daa520] tracking-tight font-serif mb-2 drop-shadow-sm">
                        Match Center
                    </h1>
                    <div
                        class="h-1.5 w-full bg-gradient-to-r from-transparent via-[#c1272d] to-transparent rounded-full opacity-80">
                    </div>
                </div>
                <p class="text-gray-500 text-lg mt-6 font-medium tracking-widest uppercase">AFCON 2025 • Official
                    Schedule</p>
            </div>

            <!-- Filters -->
            <div class="flex justify-center gap-4 mb-16">
                <!-- Using a more modern tab switcher -->
                <div
                    class="bg-white/80 backdrop-blur-md p-1.5 rounded-full border border-gray-200 shadow-sm inline-flex">
                    <button @click="filter = 'all'"
                        class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300"
                        :class="filter === 'all' ? 'bg-[#0a1f18] text-[#daa520] shadow-md' : 'text-gray-500 hover:text-gray-800 hover:bg-gray-100'">
                        All Fixtures
                    </button>
                    <button @click="filter = 'group'"
                        class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300"
                        :class="filter === 'group' ? 'bg-[#0a1f18] text-[#daa520] shadow-md' : 'text-gray-500 hover:text-gray-800 hover:bg-gray-100'">
                        Group Stage
                    </button>
                    <button @click="filter = 'knockout'"
                        class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300"
                        :class="filter === 'knockout' ? 'bg-[#0a1f18] text-[#daa520] shadow-md' : 'text-gray-500 hover:text-gray-800 hover:bg-gray-100'">
                        Knockout
                    </button>
                </div>
            </div>

            <!-- Loading State -->
            <div x-show="loading" class="flex flex-col items-center justify-center py-20">
                <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-[#daa520]"></div>
                <p class="mt-4 text-gray-400 font-medium animate-pulse">Syncing Match Data...</p>
            </div>

            <!-- Schedule Content -->
            <div x-show="!loading" x-transition.opacity class="space-y-12">

                <template x-for="day in matches" :key="day.date">
                    <div class="relative">
                        <!-- Date Header -->
                        <div class="sticky top-24 z-30 mb-8 pointer-events-none">
                            <div
                                class="inline-flex items-center gap-3 bg-white/95 backdrop-blur-xl px-6 py-3 rounded-r-full shadow-md border-l-4 border-[#c1272d]">
                                <span class="text-[#c1272d] font-bold text-lg">📅</span>
                                <h3 class="text-xl font-bold text-gray-800" x-text="day.date"></h3>
                                <template x-if="day.is_today">
                                    <span
                                        class="bg-[#c1272d] text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider animate-pulse">Today</span>
                                </template>
                            </div>
                        </div>

                        <!-- Matches Grid -->
                        <div class="grid gap-6 md:grid-cols-1 lg:grid-cols-2">
                            <template x-for="match in day.matches" :key="match.id">
                                <div
                                    class="group relative bg-white/60 backdrop-blur-sm rounded-3xl border border-white p-6 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(218,165,32,0.1)] hover:border-[#daa520]/30 transition-all duration-300">

                                    <!-- Hover Glow -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-white via-transparent to-[#daa520]/5 opacity-0 group-hover:opacity-100 rounded-3xl transition-opacity duration-300 pointer-events-none">
                                    </div>

                                    <!-- Header: Group & Venue -->
                                    <div class="flex justify-between items-center mb-6 opacity-70">
                                        <div class="flex items-center gap-2">
                                            <div class="h-1.5 w-1.5 rounded-full bg-[#daa520]"></div>
                                            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest"
                                                x-text="match.group"></span>
                                        </div>
                                        <div class="flex items-center gap-1 text-xs font-medium text-gray-400">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <span x-text="match.venue"></span>
                                        </div>
                                    </div>

                                    <!-- Teams & Score -->
                                    <div class="flex items-center justify-between relative z-10">
                                        <!-- Home -->
                                        <div class="flex flex-col items-center gap-3 w-[30%]">
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-0 bg-gray-200 rounded-full blur opacity-20 transform scale-90">
                                                </div>
                                                <span class="text-5xl drop-shadow-sm filter"
                                                    x-text="match.home_flag"></span>
                                            </div>
                                            <span class="font-bold text-gray-800 text-lg leading-tight text-center"
                                                x-text="match.home_team"></span>
                                        </div>

                                        <!-- Score / Time -->
                                        <div class="flex flex-col items-center justify-center w-[40%]">
                                            <template x-if="match.status === 'FT' || match.status === 'LIVE'">
                                                <div
                                                    class="flex items-center gap-4 bg-white px-6 py-3 rounded-2xl border border-gray-100 shadow-inner">
                                                    <span class="text-4xl font-black text-slate-800"
                                                        x-text="match.score_home"></span>
                                                    <span class="text-gray-300 text-xl font-light mx-1">:</span>
                                                    <span class="text-4xl font-black text-slate-800"
                                                        x-text="match.score_away"></span>
                                                </div>
                                            </template>

                                            <template x-if="match.status !== 'FT' && match.status !== 'LIVE'">
                                                <div
                                                    class="bg-gray-50 px-5 py-2 rounded-xl border border-gray-100 text-[#0a1f18] font-bold text-xl tracking-wide font-mono">
                                                    <span x-text="match.time"></span>
                                                </div>
                                            </template>

                                            <div class="mt-3">
                                                <template x-if="match.status === 'FT'">
                                                    <span
                                                        class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded uppercase tracking-wider">Full
                                                        Time</span>
                                                </template>
                                                <template x-if="match.status === 'LIVE'">
                                                    <span
                                                        class="px-2 py-1 bg-red-100 text-red-600 text-[10px] font-bold rounded uppercase tracking-wider animate-pulse">●
                                                        Live</span>
                                                </template>
                                                <template
                                                    x-if="match.status === 'UPCOMING' || match.status === 'SCHEDULED'">
                                                    <span
                                                        class="px-2 py-1 bg-gray-100 text-gray-500 text-[10px] font-bold rounded uppercase tracking-wider">Upcoming</span>
                                                </template>
                                            </div>
                                        </div>

                                        <!-- Away -->
                                        <div class="flex flex-col items-center gap-3 w-[30%]">
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-0 bg-gray-200 rounded-full blur opacity-20 transform scale-90">
                                                </div>
                                                <span class="text-5xl drop-shadow-sm filter"
                                                    x-text="match.away_flag"></span>
                                            </div>
                                            <span class="font-bold text-gray-800 text-lg leading-tight text-center"
                                                x-text="match.away_team"></span>
                                        </div>
                                    </div>

                                </div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</x-app-layout>