<div x-data="roadToRabat()"
    class="relative w-full min-h-screen overflow-x-hidden font-sans text-slate-800 bg-gradient-to-br from-[#fefcf3] via-amber-50/30 to-[#f0f7ff]">

    <!-- Pattern Overlay (Zlij Effect) - Global -->
    <div class="absolute inset-0 opacity-5 pointer-events-none mix-blend-overlay z-0"
        style="background-image: url('/images/site_bg_pattern.png'); background-size: 300px;">
    </div>

    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <!-- Floating Footballs -->
        <div class="absolute top-1/4 left-5 w-8 h-8 animate-float-slow">
            <div class="w-full h-full bg-gradient-to-br from-[#c1272d] to-[#daa520] rounded-full opacity-20"></div>
        </div>
        <div class="absolute top-3/4 right-10 w-12 h-12 animate-float">
            <div class="w-full h-full bg-gradient-to-br from-[#006233] to-[#c1272d] rounded-full opacity-15"></div>
        </div>
        <div class="absolute top-1/3 right-1/4 w-6 h-6 animate-float-slower">
            <div class="w-full h-full bg-gradient-to-br from-[#daa520] to-[#006233] rounded-full opacity-20"></div>
        </div>

        <!-- Geometric African Patterns -->
        <div class="absolute -top-20 -right-20 w-96 h-96 opacity-5">
            <div class="w-full h-full" style="background-image: url('data:image/svg+xml,<svg width=\" 100\"
                height=\"100\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M20,20 L80,20 L50,80 Z\" fill=\"none\" stroke=\"%23c1272d\" stroke-width=\"2\" /></svg>');
                background-repeat: repeat;">
            </div>
        </div>

        <!-- Background Logo Watermark (Atlas Go) -->
        <div class="absolute inset-0 flex items-center justify-center opacity-15 pointer-events-none z-0">
            <img src="/images/atlas_go_logo.png" alt="Atlas Go Watermark"
                class="w-[800px] max-w-full h-auto object-contain animate-float-slow mix-blend-overlay filter sepia-[0.2]">
        </div>
    </div>

    <!-- Celebration Confetti Container -->
    <div x-show="plan" x-transition.opacity class="fixed inset-0 pointer-events-none z-40" id="confetti-container">
    </div>

    <!-- Zellige Borders Enhanced -->
    <div class="absolute top-0 left-0 w-full h-4 bg-gradient-to-r from-[#006233] via-[#daa520] to-[#c1272d] z-30"></div>
    <div class="absolute bottom-0 left-0 w-full h-4 bg-gradient-to-r from-[#c1272d] via-[#daa520] to-[#006233] z-30">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">

        <!-- Animated Header with Stadium Background -->
        <div class="relative text-center mb-12 pt-8">
            <!-- Stadium Silhouette -->
            <div class="absolute -top-10 inset-x-0 h-40 opacity-5">
                <div class="w-full h-full" style="background-image: url('data:image/svg+xml,<svg viewBox=\" 0 0 100 30\"
                    xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M0,30 Q25,15 50,15 T100,30\" fill=\"%23c1272d\" /></svg>'); background-repeat: repeat-x;">
                </div>
            </div>

            <!-- Main Logo with Celebration -->
            <!-- Logo Moved to Background -->

            <!-- Tagline with Typing Effect -->
            <div class="mt-6">
                <h1
                    class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-[#006233] via-[#daa520] to-[#c1272d] bg-clip-text text-transparent mb-4">
                    <span class="inline-block animate-wave">⚽</span> Your AFCON Journey Starts Here
                </h1>
                <p class="text-xl text-gray-600 font-light max-w-2xl mx-auto leading-relaxed">
                    Where <span class="font-bold text-[#c1272d]">passion meets precision</span> —
                    Calculate your perfect tournament experience in Morocco 2025!
                </p>
            </div>

            <!-- Celebration Stats -->
            <div class="mt-8 flex justify-center gap-6 flex-wrap">
                <div class="flex items-center gap-2 bg-white/80 px-4 py-2 rounded-full border border-amber-200">
                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-sm font-bold text-gray-700">24 Nations</span>
                </div>
                <div class="flex items-center gap-2 bg-white/80 px-4 py-2 rounded-full border border-amber-200">
                    <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                    <span class="text-sm font-bold text-gray-700">6 Host Cities</span>
                </div>
                <div class="flex items-center gap-2 bg-white/80 px-4 py-2 rounded-full border border-amber-200">
                    <div class="w-3 h-3 bg-[#daa520] rounded-full animate-pulse"></div>
                    <span class="text-sm font-bold text-gray-700">Unforgettable Moments</span>
                </div>
            </div>
        </div>

        <!-- MAIN INTERACTIVE CARD -->
        <div class="max-w-4xl mx-auto mb-16 relative">
            <!-- Floating Elements Around Card -->
            <div class="absolute -left-8 top-1/4 w-16 h-16 opacity-20 animate-float-slower">
                <div class="w-full h-full bg-[#c1272d] rounded-full"></div>
            </div>
            <div class="absolute -right-6 bottom-1/4 w-12 h-12 opacity-20 animate-float">
                <div class="w-full h-full bg-[#006233] rounded-full"></div>
            </div>

            <!-- Main Form Card -->
            <div
                class="bg-gradient-to-br from-white to-amber-50/50 rounded-3xl shadow-2xl border-2 border-white overflow-hidden relative group hover:shadow-3xl transition-all duration-500">

                <!-- Animated Border -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-[#006233] via-[#daa520] to-[#c1272d] opacity-0 group-hover:opacity-5 transition-opacity duration-500">
                </div>

                <!-- Card Content -->
                <div class="relative p-8 md:p-10">
                    <!-- Card Header -->
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-800 mb-3">
                            <span class="bg-gradient-to-r from-[#c1272d] to-[#daa520] bg-clip-text text-transparent">
                                Dream Your AFCON Adventure
                            </span>
                        </h2>
                        <p class="text-gray-600 max-w-md mx-auto">
                            Select your team and travel style. We'll craft your personalized journey to glory!
                        </p>
                    </div>

                    <form @submit.prevent="generatePlan" class="space-y-10">
                        <!-- Team Selection with Flags -->
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <label class="text-lg font-bold text-gray-700">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-[#daa520]" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Your National Team
                                    </span>
                                </label>
                                <span class="text-sm text-gray-500 font-medium">Who will you support?</span>
                            </div>

                            <div class="relative">
                                <!-- Selected Flag Preview -->
                                <div x-show="team" class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20">
                                    <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-lg">
                                        <img :src="`https://flagcdn.com/w160/${getTeamCode()}.png`" :alt="team"
                                            class="w-full h-full object-cover" onerror="this.style.display='none'">
                                    </div>
                                </div>

                                <select x-model="team" required
                                    class="w-full bg-gradient-to-r from-gray-50 to-white border-2 border-gray-200 text-gray-800 text-lg font-bold rounded-2xl pl-16 pr-5 py-5 focus:ring-0 focus:border-[#daa520] transition-all duration-300 cursor-pointer appearance-none hover:border-[#daa520] hover:shadow-lg leading-tight shadow-sm">
                                    <option value="" disabled selected>Choose your champion...</option>
                                    <template x-for="t in teams" :key="t.name">
                                        <option :value="t.name" class="font-bold" x-text="t.label"></option>
                                    </template>
                                </select>

                                <div
                                    class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-[#daa520]">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Budget Tier Selection - Enhanced -->
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <label class="text-lg font-bold text-gray-700">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-[#daa520]" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Your Travel Style
                                    </span>
                                </label>
                                <span class="text-sm text-gray-500 font-medium">How will you experience AFCON?</span>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Budget Tier -->
                                <div @click="budget_tier = 'budget'"
                                    class="relative group cursor-pointer transform transition-all duration-300 hover:-translate-y-2"
                                    :class="budget_tier === 'budget' ? 'scale-105' : ''">
                                    <div
                                        class="absolute -inset-0.5 bg-gradient-to-r from-emerald-400 to-green-600 rounded-2xl blur opacity-0 group-hover:opacity-100 transition duration-1000">
                                    </div>
                                    <div class="relative bg-white rounded-2xl p-6 border-2 transition-all duration-300"
                                        :class="budget_tier === 'budget' ? 'border-emerald-400 shadow-xl' : 'border-gray-200 group-hover:border-emerald-200'">
                                        <div class="flex flex-col items-center text-center">
                                            <div
                                                class="w-16 h-16 rounded-full bg-emerald-100 flex items-center justify-center text-2xl mb-4 shadow-inner">
                                                🚌
                                            </div>
                                            <h3 class="font-bold text-gray-800 text-lg mb-2">Budget Explorer</h3>
                                            <p class="text-sm text-gray-600 mb-4">Experience the passion without
                                                breaking the bank</p>
                                            <div class="text-emerald-600 font-bold">$50 - $100 / day</div>
                                            <div x-show="budget_tier === 'budget'"
                                                class="mt-4 w-8 h-1 bg-emerald-400 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mid Tier -->
                                <div @click="budget_tier = 'mid'"
                                    class="relative group cursor-pointer transform transition-all duration-300 hover:-translate-y-2"
                                    :class="budget_tier === 'mid' ? 'scale-105' : ''">
                                    <div
                                        class="absolute -inset-0.5 bg-gradient-to-r from-blue-400 to-blue-600 rounded-2xl blur opacity-0 group-hover:opacity-100 transition duration-1000">
                                    </div>
                                    <div class="relative bg-white rounded-2xl p-6 border-2 transition-all duration-300"
                                        :class="budget_tier === 'mid' ? 'border-blue-400 shadow-xl' : 'border-gray-200 group-hover:border-blue-200'">
                                        <div class="flex flex-col items-center text-center">
                                            <div
                                                class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center text-2xl mb-4 shadow-inner">
                                                ✈️
                                            </div>
                                            <h3 class="font-bold text-gray-800 text-lg mb-2">Comfort Voyager</h3>
                                            <p class="text-sm text-gray-600 mb-4">Balance excitement with premium
                                                comfort</p>
                                            <div class="text-blue-600 font-bold">$150 - $300 / day</div>
                                            <div x-show="budget_tier === 'mid'"
                                                class="mt-4 w-8 h-1 bg-blue-400 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Luxury Tier -->
                                <div @click="budget_tier = 'luxury'"
                                    class="relative group cursor-pointer transform transition-all duration-300 hover:-translate-y-2"
                                    :class="budget_tier === 'luxury' ? 'scale-105' : ''">
                                    <div
                                        class="absolute -inset-0.5 bg-gradient-to-r from-amber-400 to-[#daa520] rounded-2xl blur opacity-0 group-hover:opacity-100 transition duration-1000">
                                    </div>
                                    <div class="relative bg-white rounded-2xl p-6 border-2 transition-all duration-300"
                                        :class="budget_tier === 'luxury' ? 'border-amber-400 shadow-xl' : 'border-gray-200 group-hover:border-amber-200'">
                                        <div class="flex flex-col items-center text-center">
                                            <div
                                                class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center text-2xl mb-4 shadow-inner">
                                                👑
                                            </div>
                                            <h3 class="font-bold text-gray-800 text-lg mb-2">Royal Experience</h3>
                                            <p class="text-sm text-gray-600 mb-4">Live the tournament like royalty</p>
                                            <div class="text-amber-600 font-bold">$500+ / day</div>
                                            <div x-show="budget_tier === 'luxury'"
                                                class="mt-4 w-8 h-1 bg-amber-400 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="pt-8 text-center">
                            <button type="submit" :disabled="loading || !team"
                                class="relative overflow-hidden group inline-flex items-center justify-center gap-3 px-12 py-6 bg-gradient-to-r from-[#c1272d] via-[#daa520] to-[#006233] text-white text-xl font-bold rounded-full shadow-2xl hover:shadow-3xl hover:scale-105 active:scale-95 disabled:opacity-50 disabled:pointer-events-none transition-all duration-500">

                                <!-- Animated Background -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-[#006233] via-[#daa520] to-[#c1272d] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>

                                <!-- Button Content -->
                                <span x-show="!loading" class="relative z-10 flex items-center gap-3">
                                    <svg class="w-6 h-6 group-hover:animate-bounce" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    Create My Journey Plan
                                    <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>

                                <span x-show="loading" class="relative z-10 flex items-center gap-3">
                                    <svg class="animate-spin h-6 w-6" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                            stroke-width="4" />
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" />
                                    </svg>
                                    Crafting Your Experience...
                                </span>

                                <!-- Shine Effect -->
                                <div
                                    class="absolute inset-0 -translate-x-full group-hover:animate-shimmer bg-gradient-to-r from-transparent via-white/30 to-transparent">
                                </div>
                            </button>

                            <div x-show="error" x-transition.opacity
                                class="mt-4 text-red-500 text-sm font-medium bg-red-50 inline-block px-4 py-2 rounded-lg border border-red-100 shadow-sm animate-shake"
                                x-text="error"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Ticker Removed -->

        <!-- JOURNEY TIMELINE - Enhanced -->
        <div x-show="plan" x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 translate-y-20" x-transition:enter-end="opacity-100 translate-y-0"
            class="relative mb-20">

            <!-- Celebration Banner -->
            <div class="text-center mb-16 relative">
                <div
                    class="absolute inset-x-0 top-1/2 h-1 bg-gradient-to-r from-transparent via-[#daa520]/50 to-transparent">
                </div>
                <div
                    class="relative inline-block bg-gradient-to-r from-white to-amber-50 px-10 py-6 rounded-3xl shadow-2xl border-2 border-[#daa520]/30">
                    <div class="flex flex-col items-center gap-4">
                        <div class="flex items-center gap-4">
                            <img :src="`https://flagcdn.com/w160/${getTeamCode()}.png`" :alt="team"
                                class="w-12 h-12 rounded-full border-2 border-white shadow-lg"
                                onerror="this.style.display='none'">
                            <h3 class="text-4xl font-bold text-gray-800">
                                Your <span class="text-[#c1272d]" x-text="plan?.team"></span> Journey
                            </h3>
                        </div>
                        <div
                            class="text-2xl font-bold bg-gradient-to-r from-[#00ff88] to-[#00ccff] bg-clip-text text-transparent">
                            Predicted to reach: <span x-text="plan?.prediction"></span>
                        </div>
                        <div class="text-sm text-gray-500 font-medium">
                            Total Estimated Cost: <span class="text-[#daa520] font-bold text-lg"
                                x-text="formatCurrency(plan?.total_cost)"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Timeline -->
            <div class="relative">
                <!-- Timeline Line -->
                <div
                    class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-transparent via-[#daa520] to-transparent opacity-30">
                </div>

                <!-- Timeline Items -->
                <div class="space-y-20">
                    <template x-for="(stop, index) in plan?.itinerary" :key="index">
                        <div class="relative flex items-center justify-center"
                            :class="index % 2 === 0 ? 'flex-row-reverse' : ''">

                            <!-- Content Card -->
                            <div class="w-full md:w-5/12" :class="index % 2 === 0 ? 'md:pr-12' : 'md:pl-12'">
                                <div @click="openModal(stop)"
                                    class="group relative bg-white rounded-3xl p-8 shadow-2xl border-2 border-gray-100 hover:border-[#daa520] cursor-pointer transform transition-all duration-500 hover:scale-[1.02] hover:shadow-3xl">

                                    <!-- Card Decoration -->
                                    <div
                                        class="absolute -top-3 -right-3 w-12 h-12 bg-[#daa520] rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                        <span x-text="index + 1"></span>
                                    </div>

                                    <!-- Match Info -->
                                    <div class="mb-6">
                                        <div class="flex items-center justify-between mb-4">
                                            <h4 class="text-2xl font-bold text-gray-800" x-text="stop.city"></h4>
                                            <span
                                                class="bg-gradient-to-r from-[#daa520] to-[#c1272d] text-white px-4 py-1 rounded-full text-sm font-bold"
                                                x-text="stop.match.stage"></span>
                                        </div>

                                        <div class="flex items-center justify-center gap-6 py-4 bg-gray-50 rounded-xl">
                                            <div class="text-center">
                                                <img :src="getFlagUrl(plan?.team)"
                                                    class="w-10 h-10 rounded-full border-2 border-white shadow mx-auto mb-2 object-cover">
                                                <div class="font-bold text-gray-800" x-text="plan?.team"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="text-2xl text-[#c1272d] font-bold">VS</div>
                                                <div class="text-xs text-gray-500 mt-1" x-text="stop.date"></div>
                                            </div>
                                            <div class="text-center">
                                                <img :src="getFlagUrl(stop.match.opponent)"
                                                    class="w-10 h-10 rounded-full border-2 border-white shadow mx-auto mb-2 object-cover">
                                                <div class="font-bold text-gray-800" x-text="stop.match.opponent"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stadium & Budget -->
                                    <div class="space-y-4">
                                        <div class="flex items-center gap-3 text-gray-600">
                                            <svg class="w-5 h-5 text-[#daa520]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                            <span class="font-medium" x-text="stop.stadium.name"></span>
                                        </div>
                                        <div class="flex items-center gap-3 text-gray-600">
                                            <svg class="w-5 h-5 text-[#daa520]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span class="font-bold text-lg text-[#c1272d]"
                                                x-text="formatCurrency(stop.estimated_cost)"></span>
                                        </div>
                                    </div>

                                    <!-- Hover Effect -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-[#daa520]/0 to-[#c1272d]/0 group-hover:from-[#daa520]/5 group-hover:to-[#c1272d]/5 rounded-3xl transition-all duration-500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Final Trophy -->
                <div class="flex justify-center mt-20">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#ffd700] to-[#daa520] rounded-full blur-3xl opacity-30">
                        </div>
                        <div
                            class="relative bg-gradient-to-br from-[#ffd700] to-[#b8860b] w-24 h-24 rounded-full flex items-center justify-center shadow-2xl border-4 border-white animate-pulse">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 00-.565.133l-1.756 1.05a3 3 0 00-1.012 4.109A1 1 0 019 20a1 1 0 01-.989-1.28l.588-2.94a1 1 0 00-.735-1.127l-5.46-1.815zM8 4a1 1 0 00-1 1v1.323l2-1.582V4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-center mt-4">
                            <div
                                class="text-2xl font-bold bg-gradient-to-r from-[#ffd700] to-[#daa520] bg-clip-text text-transparent">
                                Glory Awaits!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sharing Section -->
        <div x-show="plan" x-transition.opacity
            class="text-center mt-20 p-8 bg-gradient-to-r from-white/80 to-amber-50/80 rounded-3xl border-2 border-[#daa520]/20">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Share Your Journey!</h3>
            <p class="text-gray-600 mb-6">Let your friends know about your AFCON adventure plan</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <button
                    class="flex items-center gap-2 bg-[#1877F2] text-white px-6 py-3 rounded-full font-bold hover:bg-[#0d65d9] transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                    Share on Facebook
                </button>
                <button
                    class="flex items-center gap-2 bg-black text-white px-6 py-3 rounded-full font-bold hover:bg-gray-800 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.213c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                    Tweet It
                </button>
            </div>
        </div>

    </div>

    <!-- Modal remains mostly the same but enhanced -->
    <div x-show="modalOpen" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
        <!-- Modal backdrop -->
        <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black/60 backdrop-blur-sm transition-opacity"></div>

        <!-- Modal content -->
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4">
                <div x-show="modalOpen" x-transition:enter="ease-out duration-500"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:w-full sm:max-w-2xl border-4 border-amber-400"
                    @click.outside="modalOpen = false">

                    <div class="p-6">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="text-3xl font-bold text-gray-800" x-text="selectedCity?.city"></h3>
                                <p class="text-gray-500 mt-1" x-text="selectedCity?.city_metadata?.description"></p>
                            </div>
                            <button @click="modalOpen = false"
                                class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Must Visit Section -->
                        <div class="mb-8">
                            <h4 class="text-xl font-bold text-[#c1272d] mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 21v-8a2 2 0 012-2h14a2 2 0 012 2v8M10 21h4m-4-10V7a3 3 0 013-3h0a3 3 0 013 3v4" />
                                </svg>
                                Must Visit Places
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <template x-for="place in selectedCity?.must_visit" :key="place.name">
                                    <div
                                        class="bg-amber-50 rounded-xl p-4 border border-amber-100 hover:border-amber-300 transition-colors">
                                        <div class="font-bold text-gray-800" x-text="place.name"></div>
                                        <div class="text-xs text-[#daa520] font-bold uppercase tracking-wider mb-2"
                                            x-text="place.category"></div>
                                        <p class="text-sm text-gray-600" x-text="place.description"></p>
                                    </div>
                                </template>
                                <div x-show="!selectedCity?.must_visit?.length"
                                    class="col-span-2 text-gray-400 italic text-center py-4">
                                    No specific recommendations available for this stop.
                                </div>
                            </div>
                        </div>

                        <!-- Match Details -->
                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">Match Details</h4>
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="text-sm text-gray-500">Opponent</div>
                                    <div class="font-bold text-xl text-[#c1272d]"
                                        x-text="selectedCity?.match?.opponent"></div>
                                </div>
                                <div class="text-right">
                                    <div class="text-sm text-gray-500">Stadium</div>
                                    <div class="font-bold text-gray-800" x-text="selectedCity?.stadium?.name"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-center">
                            <button @click="modalOpen = false"
                                class="bg-[#c1272d] text-white px-8 py-3 rounded-full font-bold hover:bg-[#a01e23] transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                Close Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PREMIUM FOOTER -->
<footer class="relative bg-gradient-to-br from-[#1a1a1a] to-[#2d2d2d] text-white pt-20 pb-10 overflow-hidden mt-20">
    <!-- Footer Pattern -->
    <div class="absolute inset-0 opacity-5 pointer-events-none mix-blend-overlay"
        style="background-image: url('/images/site_bg_pattern.png'); background-size: 150px;">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <!-- Brand Section -->
            <div class="col-span-1 md:col-span-1">
                <img src="/images/atlas_go_final_logo.png" alt="Atlas Go" class="h-24 w-auto mb-6">
                <p class="text-gray-400 leading-relaxed mb-6">
                    The ultimate companion for your AFCON 2025 journey in Morocco. Plan, explore, and
                    celebrate African football excellence.
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#c1272d] hover:text-white transition-colors duration-300">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#1DA1F2] hover:text-white transition-colors duration-300">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.213c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#E1306C] hover:text-white transition-colors duration-300">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.069-4.85.069-3.204 0-3.584-.012-4.849-.069-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-bold uppercase tracking-wider mb-6 border-l-4 border-[#daa520] pl-3">
                    Explore</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-[#daa520] transition-colors">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-[#daa520] transition-colors">AFCON
                            News</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-[#daa520] transition-colors">Match
                            Schedule</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-[#daa520] transition-colors">Host
                            Cities</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-[#daa520] transition-colors">Buy
                            Tickets</a></li>
                </ul>
            </div>

            <!-- Host Cities -->
            <div>
                <h4 class="text-white font-bold uppercase tracking-wider mb-6 border-l-4 border-[#c1272d] pl-3">
                    Destinations</h4>
                <ul class="space-y-3">
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-[#006233] rounded-full"></span><span
                            class="text-gray-400">Rabat</span></li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-[#006233] rounded-full"></span><span
                            class="text-gray-400">Casablanca</span></li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-[#006233] rounded-full"></span><span
                            class="text-gray-400">Marrakech</span></li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-[#006233] rounded-full"></span><span
                            class="text-gray-400">Tangier</span></li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-[#006233] rounded-full"></span><span
                            class="text-gray-400">Agadir</span></li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-[#006233] rounded-full"></span><span
                            class="text-gray-400">Fes</span></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h4 class="text-white font-bold uppercase tracking-wider mb-6 border-l-4 border-[#006233] pl-3">
                    Stay Updated</h4>
                <p class="text-gray-400 text-sm mb-4">Subscribe for the latest AFCON 2025 news and
                    offers.</p>
                <form class="space-y-2">
                    <input type="email" placeholder="Your Email Address"
                        class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-[#daa520] focus:ring-1 focus:ring-[#daa520] transition-all">
                    <button
                        class="w-full bg-gradient-to-r from-[#c1272d] to-[#daa520] text-white font-bold py-2 rounded-lg hover:shadow-lg hover:scale-105 transition-all">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Separator -->
        <div class="border-t border-white/10 my-8"></div>

        <!-- Bottom Footer -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-gray-500 text-sm">
                &copy; 2025 Atlas Go. All rights reserved. Not affiliated with CAF.
            </div>
            <div class="flex gap-6 text-sm">
                <a href="#" class="text-gray-500 hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="text-gray-500 hover:text-white transition-colors">Terms of
                    Service</a>
                <a href="#" class="text-gray-500 hover:text-white transition-colors">Contact</a>
            </div>
        </div>

        <!-- Bottom Decoration -->
        <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#c1272d] via-[#daa520] to-[#006233]">
        </div>
    </div>
</footer>
</div>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-15px) rotate(-5deg);
        }
    }

    @keyframes float-slower {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes shimmer {
        0% {
            transform: translateX(-100%) rotate(12deg);
        }

        100% {
            transform: translateX(100%) rotate(12deg);
        }
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes wave {

        0%,
        100% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(-10deg);
        }

        75% {
            transform: rotate(10deg);
        }
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-5px);
        }

        75% {
            transform: translateX(5px);
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: float-slow 8s ease-in-out infinite;
    }

    .animate-float-slower {
        animation: float-slower 10s ease-in-out infinite;
    }

    .animate-shimmer {
        animation: shimmer 2s infinite;
    }

    .animate-marquee {
        animation: marquee 20s linear infinite;
    }

    .animate-wave {
        animation: wave 1s ease-in-out infinite;
    }

    .animate-shake {
        animation: shake 0.5s ease-in-out;
    }

    .animate-bounce-slow {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }
</style>

<script>
    function roadToRabat() {
        return {
            loading: false,
            team: '',
            budget_tier: 'mid',
            plan: null,
            error: null,
            modalOpen: false,
            selectedCity: null,
            teams: [
                { name: 'Morocco', code: 'ma', label: '🇲🇦 Morocco (Host)' },
                { name: 'Senegal', code: 'sn', label: '🇸🇳 Senegal' },
                { name: 'Egypt', code: 'eg', label: '🇪🇬 Egypt' },
                { name: 'Nigeria', code: 'ng', label: '🇳🇬 Nigeria' },
                { name: 'Algeria', code: 'dz', label: '🇩🇿 Algeria' },
                { name: 'Ivory Coast', code: 'ci', label: '🇨🇮 Ivory Coast' },
                { name: 'Cameroon', code: 'cm', label: '🇨🇲 Cameroon' },
                { name: 'Ghana', code: 'gh', label: '🇬🇭 Ghana' },
                { name: 'Tunisia', code: 'tn', label: '🇹🇳 Tunisia' },
                { name: 'Mali', code: 'ml', label: '🇲🇱 Mali' },
                { name: 'Burkina Faso', code: 'bf', label: '🇧🇫 Burkina Faso' },
                { name: 'Guinea', code: 'gn', label: '🇬🇳 Guinea' },
                { name: 'DR Congo', code: 'cd', label: '🇨🇩 DR Congo' },
                { name: 'Zambia', code: 'zm', label: '🇿🇲 Zambia' },
                { name: 'South Africa', code: 'za', label: '🇿🇦 South Africa' },
                { name: 'Angola', code: 'ao', label: '🇦🇴 Angola' },
                { name: 'Gabon', code: 'ga', label: '🇬🇦 Gabon' },
                { name: 'Uganda', code: 'ug', label: '🇺🇬 Uganda' },
                { name: 'Ethiopia', code: 'et', label: '🇪🇹 Ethiopia' },
                { name: 'Zimbabwe', code: 'zw', label: '🇿🇼 Zimbabwe' },
                { name: 'Tanzania', code: 'tz', label: '🇹🇿 Tanzania' },
                { name: 'Sudan', code: 'sd', label: '🇸🇩 Sudan' },
                { name: 'Libya', code: 'ly', label: '🇱🇾 Libya' },
                { name: 'Benin', code: 'bj', label: '🇧🇯 Benin' }
            ],

            getTeamCode() {
                const found = this.teams.find(t => t.name === this.team);
                return found ? found.code : 'ma';
            },

            async generatePlan() {
                if (!this.team) return;

                this.loading = true;
                this.error = null;
                this.plan = null;

                try {
                    const response = await fetch('/generate-plan', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            team: this.team,
                            budget_tier: this.budget_tier
                        })
                    });

                    const data = await response.json();

                    if (!response.ok) {
                        throw new Error(data.error || data.details || 'Failed to fetch plan.');
                    }

                    if (data.error) {
                        throw new Error(data.error);
                    }

                    this.plan = data;

                    // Trigger confetti celebration
                    this.triggerConfetti();

                    // Scroll to results
                    setTimeout(() => {
                        document.querySelector('[x-show="plan"]').scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 500);

                } catch (err) {
                    this.error = err.message || 'Something went wrong. Please try again.';
                    console.error(err);
                } finally {
                    this.loading = false;
                }
            },

            triggerConfetti() {
                const colors = ['#c1272d', '#daa520', '#006233', '#ffffff'];
                const confettiContainer = document.getElementById('confetti-container');

                for (let i = 0; i < 150; i++) {
                    const confetti = document.createElement('div');
                    confetti.className = 'absolute w-2 h-2 rounded-full';
                    confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.left = Math.random() * 100 + 'vw';
                    confetti.style.top = '-10px';
                    confetti.style.opacity = '0.8';

                    confettiContainer.appendChild(confetti);

                    // Animation
                    const animation = confetti.animate([
                        { transform: `translate(0, 0) rotate(0deg)`, opacity: 1 },
                        { transform: `translate(${Math.random() * 100 - 50}px, 100vh) rotate(${Math.random() * 360}deg)`, opacity: 0 }
                    ], {
                        duration: Math.random() * 3000 + 2000,
                        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)'
                    });

                    animation.onfinish = () => confetti.remove();
                }
            },

            openModal(stop) {
                this.selectedCity = stop;
                this.modalOpen = true;
            },

            formatCurrency(amount) {
                if (!amount) return '$0';
                return new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD',
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                }).format(amount);
            },

            getFlagEmoji(countryName) {
                const flagMap = {
                    'Morocco': '🇲🇦',
                    'Senegal': '🇸🇳',
                    'Egypt': '🇪🇬',
                    'Nigeria': '🇳🇬',
                    'Algeria': '🇩🇿',
                    'Ivory Coast': '🇨🇮',
                    'Cameroon': '🇨🇲',
                    'Ghana': '🇬🇭',
                    'Tunisia': '🇹🇳',
                    'Mali': '🇲🇱',
                    'Burkina Faso': '🇧🇫',
                    'Guinea': '🇬🇳',
                    'Congo': '🇨🇬',
                    'Zambia': '🇿🇲',
                    'South Africa': '🇿🇦',
                    'Angola': '🇦🇴',
                    'Gabon': '🇬🇦',
                    'Uganda': '🇺🇬',
                    'Ethiopia': '🇪🇹',
                    'Zimbabwe': '🇿🇼',
                    'Tanzania': '🇹🇿',
                    'Sudan': '🇸🇩',
                    'Libya': '🇱🇾',
                    'Benin': '🇧🇯',
                    'Mauritania': '🇲🇷'
                };
                return flagMap[countryName] || '🏴';
            }
            ,

            getFlagUrl(countryName) {
                if (!countryName) return '';
                const found = this.teams.find(t => t.name.includes(countryName) || countryName.includes(t.name));
                const code = found ? found.code : 'ma'; // Fallback to Morocco if unknown
                return `https://flagcdn.com/w160/${code}.png`;
            }
        }
    }
</script>