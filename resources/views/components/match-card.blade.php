@props(['group', 'time', 'team1', 'flag1', 'team2', 'flag2', 'venue', 'score1' => null, 'score2' => null])

<div
    class="group bg-white rounded-2xl border border-gray-200 hover:border-[#b8860b] shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <span
                class="text-xs font-bold text-[#b8860b] uppercase tracking-wider bg-[#b8860b]/10 px-2 py-1 rounded">{{ $group }}</span>
            @if($score1 !== null && $score2 !== null)
                <span
                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gray-100 text-gray-600">FT</span>
            @else
                <span
                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gray-100 text-gray-600">{{ $time }}
                    GMT</span>
            @endif
        </div>
        <div class="flex items-center justify-between mb-6">
            <div class="flex flex-col items-center gap-2">
                <div
                    class="text-5xl border border-gray-100 rounded-full w-16 h-16 flex items-center justify-center bg-gray-50 flex-shrink-0">
                    {{ $flag1 }}</div>
                <span class="font-bold text-gray-900 text-sm text-center truncate w-20">{{ $team1 }}</span>
            </div>

            @if($score1 !== null && $score2 !== null)
                <div class="flex items-center gap-2 md:gap-4 bg-gray-50 px-4 py-2 rounded-xl border border-gray-100">
                    <span class="text-2xl md:text-3xl font-black text-gray-900">{{ $score1 }}</span>
                    <span class="text-gray-400 font-medium">-</span>
                    <span class="text-2xl md:text-3xl font-black text-gray-900">{{ $score2 }}</span>
                </div>
            @else
                <span class="text-2xl font-serif text-[#c1272d] font-bold italic">VS</span>
            @endif

            <div class="flex flex-col items-center gap-2">
                <div
                    class="text-5xl border border-gray-100 rounded-full w-16 h-16 flex items-center justify-center bg-gray-50 flex-shrink-0">
                    {{ $flag2 }}</div>
                <span class="font-bold text-gray-900 text-sm text-center truncate w-20">{{ $team2 }}</span>
            </div>
        </div>
        <div class="flex items-center justify-center gap-2 text-gray-500 text-sm border-t border-gray-100 pt-4 mt-4">
            <svg class="w-4 h-4 text-[#b8860b]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            {{ $venue }}
        </div>
    </div>
</div>