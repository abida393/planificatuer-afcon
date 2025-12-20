<div class="mb-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Welcome Section -->
    <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm zellige-border p-6 relative overflow-hidden">
        <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                 <h2 class="text-2xl font-bold font-display text-slate-900">Welcome, Fan!</h2>
                 <p class="text-slate-500 mt-1">Ready for AFCON 2025? Here's your tournament summary.</p>
                 
                 <div class="mt-6 flex items-center gap-4">
                     <div class="flex-shrink-0">
                         <span class="text-xs uppercase font-bold text-slate-400 block mb-1">Follow Team</span>
                         <select class="form-select bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 text-sm focus:ring-afcon-emerald focus:border-afcon-emerald outline-none w-48">
                             <option>Morocco (Host)</option>
                             <option>Egypt</option>
                             <option>Senegal</option>
                             <option>Nigeria</option>
                             <option>Algeria</option>
                         </select>
                     </div>
                     <div class="h-10 w-px bg-slate-200"></div>
                     <div>
                         <span class="text-xs uppercase font-bold text-slate-400 block mb-1">Status</span>
                         <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                             Qualified
                         </span>
                     </div>
                 </div>
            </div>
            
            <!-- Gauge Visual (CSS/SVG) -->
            <div class="relative w-32 h-32 flex-shrink-0">
                 <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                     <circle cx="50" cy="50" r="45" fill="none" class="text-slate-100 stroke-current" stroke-width="8"></circle>
                     <circle cx="50" cy="50" r="45" fill="none" class="text-afcon-gold stroke-current" stroke-width="8" stroke-dasharray="283" stroke-dashoffset="70" stroke-linecap="round"></circle>
                 </svg>
                 <div class="absolute inset-0 flex flex-col items-center justify-center">
                     <span class="text-2xl font-bold text-slate-900">75%</span>
                     <span class="text-[0.6rem] uppercase tracking-wide text-slate-400 font-semibold">Win Prob</span>
                 </div>
            </div>
        </div>
        
        <!-- Decoration -->
        <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-afcon-emerald/5 rounded-full blur-2xl"></div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6">
        <!-- Budget Card -->
        <x-stats-card title="Total Budget" value="$2,450" icon="currency-dollar" trend="+12%" trendColor="text-green-600" />
        
        <!-- Days Card -->
        <x-stats-card title="Days To Go" value="14" icon="calendar" subtext="Opening Ceremony" />
    </div>
</div>
