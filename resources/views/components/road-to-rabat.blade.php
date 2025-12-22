<div x-data="roadToRabat()" class="relative w-full min-h-[600px] bg-slate-50 overflow-hidden font-sans">
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 z-0 opacity-[0.15] pointer-events-none" 
         style="background-image: url('/images/afconn-background.png'); background-size: cover; background-position: center;">
    </div>
    
    <!-- Gradient Overlay to ensure text readability if pattern is dark -->
    <div class="absolute inset-0 z-0 bg-gradient-to-b from-white/80 to-slate-50/90 mix-blend-overlay"></div>

    <div class="relative z-10 max-w-5xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        
        <!-- Header & Input Section -->
        <div class="text-center mb-16 space-y-6 bg-white/80 backdrop-blur-md p-8 rounded-3xl shadow-lg border border-white/50">
            <h2 class="text-4xl font-extrabold text-emerald-900 tracking-tight sm:text-5xl drop-shadow-sm">
                Road to <span class="text-red-700">Rabat</span>
            </h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Discover your team's path to glory. Enter your nation below to reveal a personalized AFCON 2025 journey.
            </p>

            <!-- Input Form -->
            <form @submit.prevent="generatePlan" class="max-w-2xl mx-auto relative group mt-8">
                <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 via-amber-400 to-red-600 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative flex flex-col sm:flex-row shadow-lg rounded-xl overflow-hidden bg-white ring-1 ring-gray-200">
                    <div class="flex-1 min-w-0">
                        <label for="team-input" class="sr-only">Team Name</label>
                        <input 
                            id="team-input"
                            type="text" 
                            x-model="team" 
                            placeholder="Enter Country Name (e.g., Morocco)" 
                            class="block w-full border-0 py-4 pl-6 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:text-sm sm:leading-6 bg-transparent"
                            required
                        >
                    </div>
                    <div class="border-t sm:border-t-0 sm:border-l border-gray-200 bg-gray-50/50 sm:w-48">
                        <label for="budget-select" class="sr-only">Budget</label>
                        <select 
                            id="budget-select"
                            x-model="budget_tier" 
                            class="block w-full border-0 py-4 pl-4 pr-10 text-gray-900 bg-transparent focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:text-sm sm:leading-6 cursor-pointer"
                        >
                            <option value="budget">Budget Saver</option>
                            <option value="mid">Standard</option>
                            <option value="luxury">Luxury</option>
                        </select>
                    </div>
                    <button 
                        type="submit" 
                        :disabled="loading"
                        class="relative inline-flex items-center justify-center gap-x-1.5 px-8 py-4 text-sm font-bold text-white bg-emerald-700 hover:bg-emerald-800 disabled:opacity-70 disabled:cursor-not-allowed transition-all duration-200 sm:rounded-none focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2"
                    >
                        <span x-show="!loading">Generate</span>
                        <span x-show="loading">
                             <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
                    </button>
                </div>
                <!-- Error Message -->
                <p x-show="error" x-transition.opacity class="absolute top-full left-0 mt-2 text-sm text-red-600 font-medium bg-white/90 px-2 py-1 rounded shadow-sm" x-text="error"></p>
            </form>
        </div>

        <!-- Timeline Section -->
        <div x-show="plan" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0" class="relative">
            
            <!-- Result Prediction Header -->
            <div class="text-center mb-12">
                <span class="inline-flex items-center rounded-full bg-amber-50 px-4 py-1 text-xs font-medium text-amber-700 ring-1 ring-inset ring-amber-600/20 mb-2">Prediction</span>
                <h3 class="text-2xl font-bold text-gray-900">
                    <span x-text="plan?.team"></span> is predicted to reach the <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-red-600" x-text="plan?.prediction"></span>
                </h3>
            </div>

            <!-- Vertical Timeline Container -->
            <div class="relative wrap overflow-hidden h-full pb-10">
                <!-- Center Line (Desktop) / Left Line (Mobile implementation handled via CSS mostly, doing center for now with response classes) -->
                <!-- Gradient Line -->
                <div class="absolute border-opacity-20 border-gray-700 h-full border text-center" 
                     style="left: 50%; border: 0; width: 4px; background: linear-gradient(to bottom, #059669, #eab308, #b91c1c); transform: translateX(-50%);">
                </div>

                <!-- Timeline Items -->
                <template x-for="(stop, index) in plan?.itinerary" :key="index">
                    <div class="mb-12 flex justify-between items-center w-full right-timeline group"
                         :class="index % 2 === 0 ? 'flex-row-reverse' : ''">
                         <!-- Empty Half -->
                        <div class="order-1 w-5/12 hidden md:block"></div>
                        
                        <!-- Node Circle -->
                        <div class="z-20 flex items-center order-1 shadow-xl w-10 h-10 rounded-full border-4 border-slate-50 bg-white transition duration-300 transform group-hover:scale-110 group-hover:border-amber-400">
                            <div class="mx-auto font-semibold text-lg text-emerald-800" x-text="index + 1"></div>
                        </div>
                        
                        <!-- Content Card -->
                        <div class="order-1 w-full md:w-5/12 px-6 py-4 shadow-lg rounded-2xl bg-white border border-slate-100 hover:shadow-xl transition-all duration-300 cursor-pointer relative overflow-hidden"
                             @click="openModal(stop)">
                             <!-- Decorative side strip -->
                             <div class="absolute top-0 bottom-0 w-1.5 left-0" 
                                  :class="index % 2 !== 0 ? 'bg-emerald-500' : 'bg-red-600 right-0 left-auto'"></div>
                             
                            <div class="flex flex-col space-y-2">
                                <div class="flex justify-between items-start">
                                    <h4 class="font-bold text-lg text-gray-800" x-text="stop.city"></h4>
                                    <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10" x-text="stop.date"></span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="text-sm text-gray-800 font-semibold flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                        <span x-text="stop.match.opponent"></span>
                                    </p>
                                    <span class="text-[10px] uppercase tracking-wider text-gray-500 font-medium" x-text="stop.match.stage"></span>
                                </div>
                                <p class="text-xs text-gray-500 flex items-center gap-1 mt-1">
                                    <svg class="h-3 w-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                                    <span class="truncate" x-text="stop.stadium.name"></span>
                                </p>
                                <div class="mt-2 pt-2 border-t border-gray-100 flex justify-between items-center text-xs">
                                     <span class="text-amber-600 font-semibold" x-text="'Est. ' + formatCurrency(stop.costs?.total, plan?.currency)"></span>
                                     <span class="text-emerald-600 flex items-center group-hover:translate-x-1 transition-transform">
                                        Must Visit <svg class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                     </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            
             <!-- Final Trophy Node -->
             <div class="flex justify-center mt-[-30px] relative z-20">
                 <div class="w-16 h-16 bg-gradient-to-br from-amber-300 to-amber-500 rounded-full flex items-center justify-center shadow-lg border-4 border-white animate-bounce-slow">
                     <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 00-.565.133l-1.756 1.05a3 3 0 00-1.012 4.109A1 1 0 019 20a1 1 0 01-.989-1.28l.588-2.94a1 1 0 00-.735-1.127l-5.46-1.815zM8 4a1 1 0 00-1 1v1.323l2-1.582V4z" clip-rule="evenodd"></path></svg>
                 </div>
             </div>
        </div>

        <!-- Initial Placeholder State (Optional) -->
        <div x-show="!plan && !loading" class="mt-8 text-center opacity-50">
             <div class="mx-auto h-48 w-48 opacity-20 bg-[url('/images/afcon2025_logo_land_color-v1.webp')] bg-contain bg-no-repeat bg-center"></div>
        </div>

    </div>

    <!-- Modal -->
    <div x-show="modalOpen" 
         class="relative z-50 transition-all" 
         aria-labelledby="modal-title" 
         role="dialog" 
         aria-modal="true"
         style="display: none;"
    >
        <div x-show="modalOpen" 
             x-transition:enter="ease-out duration-300" 
             x-transition:enter-start="opacity-0" 
             x-transition:enter-end="opacity-100" 
             x-transition:leave="ease-in duration-200" 
             x-transition:leave-start="opacity-100" 
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-900/75 backdrop-blur-sm transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div x-show="modalOpen" 
                     x-transition:enter="ease-out duration-300" 
                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                     x-transition:leave="ease-in duration-200" 
                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border-t-8 border-emerald-600"
                     @click.outside="modalOpen = false">
                    
                    <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
                        <button type="button" @click="modalOpen = false" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                        </button>
                    </div>

                    <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                             <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-emerald-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">
                                <h3 class="text-2xl font-bold leading-6 text-gray-900" id="modal-title" x-text="selectedCity ? 'Must Visit: ' + selectedCity.city : 'City Details'"></h3>
                                <p class="mt-1 text-sm text-gray-500" x-text="selectedCity?.city_metadata?.description"></p>
                                
                                <div class="mt-6">
                                    <h4 class="text-sm font-semibold text-emerald-800 uppercase tracking-wide mb-3">Tourist Hotspots</h4>
                                    <ul class="space-y-4">
                                        <template x-for="spot in (selectedCity?.must_visit || [])">
                                            <li class="flex items-start bg-slate-50 p-3 rounded-lg border border-slate-100">
                                                <span class="flex-shrink-0 h-8 w-8 rounded-full bg-amber-100 flex items-center justify-center mr-3 mt-0.5 border border-amber-200 text-amber-700">
                                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                </span>
                                                <div>
                                                    <div class="flex items-center gap-2">
                                                        <span class="text-gray-800 font-bold text-base" x-text="spot.name"></span>
                                                        <span class="inline-flex items-center rounded-full bg-emerald-50 px-2 py-0.5 text-xs font-medium text-emerald-700 ring-1 ring-inset ring-emerald-600/20" x-text="spot.category"></span>
                                                    </div>
                                                    <p class="text-sm text-gray-600 mt-0.5 leading-snug" x-text="spot.description"></p>
                                                </div>
                                            </li>
                                        </template>
                                        <template x-if="!selectedCity?.must_visit?.length">
                                            <li class="italic text-gray-500 text-center py-4">No specific spots listed for this location.</li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" @click="modalOpen = false">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

            async generatePlan() {
                if (!this.team) return;
                
                this.loading = true;
                this.error = null;
                this.plan = null;

                try {
                    // Using 127.0.0.1 is critical for Windows browsers (0.0.0.0 is server-only)
                    const response = await fetch('http://127.0.0.1:8000/generate-plan', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            team: this.team,
                            budget_tier: this.budget_tier
                        })
                    });

                    if (!response.ok) {
                        throw new Error('Failed to fetch plan. Ensure the AI Agent is running on Port 8000.');
                    }

                    const data = await response.json();
                    
                    if (data.error) {
                         throw new Error(data.error);
                    }
                    this.plan = data;
                } catch (err) {
                    this.error = err.message || 'Something went wrong. Please try again.';
                    console.error(err);
                    alert('Error: ' + this.error);
                } finally {
                    this.loading = false;
                }
            },

            openModal(stop) {
                this.selectedCity = stop;
                this.modalOpen = true;
            },
            
            formatCurrency(amount, currency) {
                return new Intl.NumberFormat('en-US', { style: 'currency', currency: currency || 'USD' }).format(amount);
            }
        }
    }
</script>
