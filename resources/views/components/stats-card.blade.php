@props(['title', 'value', 'icon', 'trend' => null, 'trendColor' => 'text-green-600', 'subtext' => null])

<div class="bg-white rounded-xl shadow-sm border border-slate-100 p-5 flex items-start justify-between">
    <div>
        <p class="text-sm font-medium text-slate-500">{{ $title }}</p>
        <p class="text-2xl font-bold text-slate-900 mt-1">{{ $value }}</p>
        @if($trend)
            <span class="text-xs font-medium {{ $trendColor }} flex items-center mt-1">
                {{ $trend }}
                <span class="text-slate-400 ml-1 font-normal">vs last month</span>
            </span>
        @endif
        @if($subtext)
            <p class="text-xs text-slate-400 mt-1">{{ $subtext }}</p>
        @endif
    </div>
    <div class="p-2 bg-slate-50 rounded-lg text-afcon-emerald">
        @if($icon == 'currency-dollar')
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        @elseif($icon == 'calendar')
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        @endif
    </div>
</div>
