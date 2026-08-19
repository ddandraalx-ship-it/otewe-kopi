<section id="live-band" class="px-4 sm:px-6 py-12 sm:py-20 border-t border-white/10 bg-zinc-950/60 relative overflow-hidden">

    {{-- Background Real Otewe Outdoor Lounge Photo Overlay (`otewe-real-ambience.jpg`) --}}
    <div class="absolute inset-0 z-0 opacity-25 pointer-events-none">
        <img src="{{ asset('images/otewe-real-ambience.jpg') }}" alt="Otewe Real Outdoor Lounge & Beanbag Seating" class="w-full h-full object-cover filter brightness-75 contrast-105">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0F0D0B] via-[#0F0D0B]/85 to-[#0F0D0B]"></div>
    </div>

    <div class="max-w-6xl mx-auto grid lg:grid-cols-12 gap-8 lg:gap-10 items-center relative z-10">

        {{-- Left Announcement Info --}}
        <div class="lg:col-span-7 fade-up text-center lg:text-left">
            <span class="inline-flex items-center gap-2 rounded-full border border-mocha-400/40 bg-mocha-400/10 px-3.5 py-1 text-[11px] sm:text-xs font-bold text-mocha-300 mb-3 sm:mb-4">
                🎸 OTEWE ENTERTAINMENT
            </span>

            <h2 class="text-2xl sm:text-4xl md:text-5xl font-black tracking-tight text-white leading-tight mb-3 sm:mb-4">
                Bakal ada live band session juga loh!
            </h2>

            <p class="text-zinc-300 text-xs sm:text-base leading-relaxed max-w-lg mx-auto lg:mx-0 mb-6 font-normal">
                Nongkrong di Otewe Taman Apsari Surabaya makin seru. Kamu bisa nikmati santap malam, gelato manis, dan seduhan kopi hangat sambil ditemani penampilan live music session dari band-band lokal.
            </p>

            <div class="rounded-2xl border border-white/15 bg-zinc-900/70 p-4 sm:p-5 max-w-lg mx-auto lg:mx-0 mb-6 sm:mb-8 backdrop-blur-md text-left">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🎤</span>
                    <div>
                        <p class="text-xs sm:text-sm font-bold text-white">Suasana Nongkrong Seru & Asyik</p>
                        <p class="text-[11px] sm:text-xs text-zinc-400 mt-0.5">Pantau info penampilan live band terbaru di Instagram resmi kami.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3">
                <a
                    href="https://wa.me/{{ $cafe['phone_wa'] ?? '6281326428553' }}?text=Halo%20Otewe%2C%20saya%20mau%20tanya%20info%20jadwal%20Live%20Band"
                    target="_blank" rel="noopener"
                    class="w-full sm:w-auto text-center rounded-full bg-mocha-400 text-zinc-950 px-6 py-3 text-xs sm:text-sm font-bold hover:bg-mocha-300 transition-all shadow-[0_10px_20px_rgba(192,132,82,0.25)]"
                >
                    💬 Info Meja via WA
                </a>
                <a
                    href="https://instagram.com/{{ $cafe['instagram'] ?? 'otewe.kopi' }}"
                    target="_blank" rel="noopener"
                    class="w-full sm:w-auto text-center rounded-full border border-white/20 bg-white/5 px-6 py-3 text-xs sm:text-sm font-bold text-white hover:bg-white/10 transition-all"
                >
                    📷 Cek Info Instagram
                </a>
            </div>
        </div>

        {{-- Right Soundwave Visual --}}
        <div class="lg:col-span-5 fade-up">
            <div class="rounded-2xl sm:rounded-3xl border border-white/15 bg-zinc-900/70 backdrop-blur-2xl p-5 sm:p-6 relative shadow-xl">
                <div class="aspect-square rounded-2xl bg-zinc-950 flex items-center justify-center p-6 sm:p-8 relative overflow-hidden">
                    <svg viewBox="0 0 300 300" class="w-full h-full text-mocha-300" fill="none">
                        <g stroke="currentColor" stroke-width="2.5" stroke-linecap="round" opacity="0.9">
                            <path d="M30 150 L50 150 L65 100 L80 200 L95 80 L110 220 L125 110 L140 190 L150 150 L165 150 L180 90 L195 210 L210 130 L225 170 L240 150 L270 150"/>
                        </g>
                        <circle cx="150" cy="150" r="115" stroke="currentColor" stroke-width="1" opacity="0.2" stroke-dasharray="6 6" />
                        <circle cx="150" cy="150" r="75" stroke="currentColor" stroke-width="1" opacity="0.4" />
                    </svg>
                </div>
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-[11px] sm:text-xs font-bold text-zinc-300">ACOUSTIC & POP SESSION</span>
                    <span class="text-[10px] sm:text-xs font-bold text-mocha-300 bg-mocha-400/10 px-2.5 py-1 rounded-full border border-mocha-400/20">FREE ADMISSION</span>
                </div>
            </div>
        </div>

    </div>
</section>
