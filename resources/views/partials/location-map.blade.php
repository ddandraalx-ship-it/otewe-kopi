<section id="lokasi" class="px-4 sm:px-6 py-12 sm:py-20 border-t border-white/10">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3 sm:gap-4 mb-6 sm:mb-8 fade-up">
            <div>
                <span class="text-[10px] sm:text-xs font-mono text-mocha-300 uppercase tracking-widest block mb-1 sm:mb-2 font-bold">LOKASI KAMI</span>
                <h2 class="text-2xl sm:text-4xl md:text-5xl font-bold tracking-tight text-white">Mampir ke Otewe</h2>
            </div>
            <p class="text-zinc-300 text-xs sm:text-sm max-w-xs font-medium">
                Lokasi di pusat kota Surabaya. Taman Apsari No. 25, Embong Kaliasin.
            </p>
        </div>

        <div class="fade-up group relative rounded-2xl sm:rounded-3xl overflow-hidden border border-white/20 shadow-2xl">

            <iframe
                src="{{ $cafe['maps_embed_src'] }}"
                class="w-full h-[360px] sm:h-[420px] grayscale contrast-125 brightness-90 group-hover:grayscale-0 group-hover:brightness-100 transition-all duration-700"
                style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            ></iframe>

            {{-- Glass Info Card --}}
            <div class="absolute bottom-4 left-4 right-4 md:right-auto md:w-[380px] rounded-2xl border border-white/20 bg-zinc-950/95 backdrop-blur-2xl p-4 sm:p-5 shadow-2xl"
                 x-data="{ copied: false }">
                <div class="flex items-center justify-between mb-1.5">
                    <h3 class="font-bold text-base sm:text-xl text-white">Otewe Taman Apsari</h3>
                    <span class="px-2 py-0.5 rounded-full text-[9px] sm:text-[10px] font-mono bg-mocha-400/20 border border-mocha-400/30 text-mocha-300 font-bold">SURABAYA</span>
                </div>
                <p class="text-zinc-300 text-[11px] sm:text-xs mb-4 font-normal leading-relaxed">{{ $cafe['address'] }}</p>

                <div class="flex items-center gap-2.5">
                    <a
                        href="{{ $cafe['maps_link'] }}"
                        target="_blank" rel="noopener"
                        class="rounded-full bg-mocha-400 text-zinc-950 px-3.5 py-1.5 sm:px-4 sm:py-2 text-[11px] sm:text-xs font-bold hover:bg-mocha-300 transition-all shadow-md"
                    >
                        🗺️ Google Maps →
                    </a>
                    <button 
                        @click="navigator.clipboard.writeText('{{ $cafe['address'] }}'); copied = true; setTimeout(() => copied = false, 2500)"
                        class="rounded-full border border-white/20 bg-white/5 px-3.5 py-1.5 sm:px-4 sm:py-2 text-[11px] sm:text-xs font-medium text-white hover:bg-white/10 transition-all"
                    >
                        <span x-show="!copied">📋 Copy Alamat</span>
                        <span x-show="copied" x-cloak class="text-mocha-300 font-bold">✓ Tersalin!</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>
