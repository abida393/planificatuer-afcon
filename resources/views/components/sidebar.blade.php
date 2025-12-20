<aside class="w-full md:w-64 bg-slate-900 text-white flex-shrink-0 flex flex-col h-auto md:h-screen sticky top-0 z-50">
    <div class="p-6 flex items-center justify-between md:justify-center border-b border-slate-800">
        <div class="flex items-end gap-0.5 select-none text-3xl font-bold font-sans tracking-tight text-[#E0E7FF] overflow-hidden">
            <span class="animate-letter" style="animation-delay: 0.1s">A</span>
            <span class="animate-letter" style="animation-delay: 0.15s">t</span>
            <span class="animate-letter" style="animation-delay: 0.2s">l</span>
            <span class="animate-letter" style="animation-delay: 0.25s">a</span>
            <span class="animate-letter" style="animation-delay: 0.3s">s</span>
            <span class="animate-letter" style="animation-delay: 0.35s">G</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" class="animate-letter text-afcon-gold mb-1 ml-0.5" style="animation-delay: 0.4s" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                <path d="M2 12h20"></path>
            </svg>
        </div>
        <button class="md:hidden text-gray-400 hover:text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <nav id="mobile-menu" class="hidden md:flex flex-col flex-1 p-4 gap-2 overflow-y-auto">
        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-afcon-emerald/20 text-afcon-emerald border border-afcon-emerald/30 font-medium transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            My Journey
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-400 hover:text-white hover:bg-slate-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Matches
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-400 hover:text-white hover:bg-slate-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Budget
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-400 hover:text-white hover:bg-slate-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Local Gems
        </a>
    </nav>
    
    <div class="p-6 border-t border-slate-800 hidden md:block">
        <div class="bg-gradient-to-r from-afcon-emerald to-teal-600 rounded-lg p-4 relative overflow-hidden">
             <div class="absolute top-0 right-0 -mt-2 -mr-2 bg-white/20 w-16 h-16 rounded-full blur-xl"></div>
             <p class="text-xs text-white/80 uppercase tracking-wider font-semibold mb-1">Next Match</p>
             <p class="text-white font-bold leading-tight">Morocco vs Zambia</p>
             <p class="text-xs text-white/90 mt-2 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                In 2 days
             </p>
        </div>
    </div>
</aside>
