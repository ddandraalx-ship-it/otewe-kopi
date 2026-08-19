<section id="jam-buka" class="px-4 sm:px-6 py-12 sm:py-20 border-t border-white/10 relative overflow-hidden">

    {{-- Background Aesthetic Coffee Beans Photo Overlay (`beans-bg.png`) --}}
    <div class="absolute inset-0 z-0 opacity-15 pointer-events-none">
        <img src="{{ asset('images/beans-bg.png') }}" alt="Aesthetic Coffee Beans Texture" class="w-full h-full object-cover filter brightness-75">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0F0D0B] via-[#0F0D0B]/85 to-[#0F0D0B]"></div>
    </div>

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6 sm:gap-8 relative z-10">

        {{-- Hours Panel --}}
        <div class="fade-up rounded-2xl sm:rounded-3xl border border-white/15 bg-zinc-900/70 backdrop-blur-xl p-5 sm:p-8 flex flex-col justify-between shadow-xl">
            <div>
                <div class="flex items-center gap-2 mb-3 sm:mb-4">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                    <span class="text-[10px] sm:text-xs font-mono tracking-wider text-mocha-300 font-bold">OPERATIONAL HOURS</span>
                </div>

                <h3 class="text-xl sm:text-2xl font-bold text-white mb-4 sm:mb-6">Jam Operasional</h3>

                <div class="space-y-3 sm:space-y-4 mb-6 sm:mb-8">
                    @foreach ($cafe['hours'] as $h)
                        <div class="flex items-center justify-between border-b border-white/10 pb-2.5">
                            <span class="text-zinc-300 font-medium text-xs sm:text-sm">{{ $h['days'] }}</span>
                            <span class="font-mono text-xs sm:text-sm font-bold text-mocha-300">{{ $h['time'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/5 p-3.5 sm:p-4 flex items-center gap-3">
                <span class="text-base sm:text-lg">🌙</span>
                <p class="text-[11px] sm:text-xs text-zinc-300 font-medium">
                    Buka sampai jam 03.00 pagi di akhir pekan! Tempat pas untuk nongkrong malam di Surabaya.
                </p>
            </div>
        </div>

        {{-- Reservation Panel --}}
        <div class="fade-up rounded-2xl sm:rounded-3xl border border-white/15 bg-zinc-900/70 backdrop-blur-xl p-5 sm:p-8 flex flex-col justify-between shadow-xl">
            <div>
                <span class="text-[10px] sm:text-xs font-mono tracking-wider text-mocha-300 mb-3 sm:mb-4 block font-bold">RESERVASI MEJA</span>
                <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 sm:mb-3">Mau Booking Tempat?</h3>
                <p class="text-zinc-300 text-xs sm:text-sm leading-relaxed mb-6 font-medium">
                    Hubungi tim Otewe via WhatsApp untuk reservasi tempat duduk, acara ulang tahun, kumpul komunitas, atau sekadar tanya info lokasi & menu.
                </p>

                <div class="rounded-2xl border border-white/15 bg-zinc-950 p-4 mb-6 sm:mb-8 flex items-center justify-between">
                    <div>
                        <span class="text-[10px] sm:text-xs text-zinc-400 block font-semibold">WHATSAPP OFFICIAL</span>
                        <span class="text-lg sm:text-xl font-bold text-mocha-300">{{ $cafe['phone_display'] }}</span>
                    </div>
                    <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-emerald-400 animate-pulse"></span>
                </div>
            </div>

            <a
                href="https://wa.me/{{ $cafe['phone_wa'] }}?text=Halo%20Otewe%2C%20saya%20mau%20tanya%20info%20dan%20reservasi%20meja"
                target="_blank" rel="noopener"
                class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-mocha-400 text-zinc-950 px-6 py-3.5 text-xs sm:text-sm font-bold hover:bg-mocha-300 transition-all shadow-[0_10px_20px_rgba(192,132,82,0.25)] text-center"
            >
                💬 Chat Info & Reservasi WhatsApp
            </a>
        </div>

    </div>
</section>
