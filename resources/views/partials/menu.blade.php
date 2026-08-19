<section id="menu" class="px-4 sm:px-6 py-12 sm:py-20 border-t border-white/10 relative overflow-hidden">

    {{-- Static Watermark Logo Anchored Inside Menu Section --}}
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[280px] sm:w-[400px] md:w-[480px] max-w-[85vw] pointer-events-none z-0 opacity-[0.035]">
        <img src="{{ asset('images/logo-otewe.svg') }}" alt="Otewe Watermark" class="w-full h-auto">
    </div>

    {{-- Locked Background Real Otewe Food Photo Overlay (`otewe-real-food.jpg`) --}}
    <div class="absolute inset-0 z-0 opacity-20 pointer-events-none bg-cover bg-no-repeat filter brightness-75 contrast-110"
         style="background-image: url('{{ asset('images/otewe-real-food.jpg') }}'); background-position: center top;">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0F0D0B] via-[#0F0D0B]/80 to-[#0F0D0B]"></div>
    </div>

    <div class="max-w-6xl mx-auto relative z-10" x-data="{ tab: 'all' }">

        {{-- Section Header --}}
        <div class="mb-6 sm:mb-10 text-center fade-up">
            <span class="text-[10px] sm:text-xs font-mono text-mocha-300 uppercase tracking-widest block mb-1 sm:mb-2 font-bold">DAFTAR MENU LENGKAP</span>
            <h2 class="text-2xl sm:text-4xl md:text-5xl font-black tracking-tight text-white">Otewe Ngopi · Makan · Gelato</h2>
            <p class="text-zinc-400 text-xs sm:text-sm mt-1.5 font-medium">Pilihan menu lengkap Otewe Taman Apsari Surabaya.</p>
        </div>

        {{-- Visual Mobile Swipe Hint Indicator --}}
        <div class="flex items-center justify-center gap-1.5 text-[11px] text-mocha-300 font-mono mb-2.5 sm:hidden font-bold fade-up">
            <span>👈</span>
            <span class="tracking-wider uppercase">Geser tab menu ke samping</span>
            <span>👉</span>
        </div>

        {{-- Clean Category Tab Bar (Horizontal Swipable on Mobile) --}}
        <div class="flex overflow-x-auto no-scrollbar scroll-smooth whitespace-nowrap flex-nowrap sm:flex-wrap justify-start sm:justify-center gap-2 mb-8 sm:mb-12 pb-2 px-1 fade-up">
            <button @click="tab = 'all'" :class="tab === 'all' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                All Menu
            </button>
            <button @click="tab = 'kopi'" :class="tab === 'kopi' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Kopi
            </button>
            <button @click="tab = 'non_kopi'" :class="tab === 'non_kopi' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Non Kopi
            </button>
            <button @click="tab = 'chocolate'" :class="tab === 'chocolate' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Chocolate
            </button>
            <button @click="tab = 'tea_series'" :class="tab === 'tea_series' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Tea Series
            </button>
            <button @click="tab = 'gelato'" :class="tab === 'gelato' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Gelato
            </button>
            <button @click="tab = 'dessert'" :class="tab === 'dessert' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Dessert
            </button>
            <button @click="tab = 'snack'" :class="tab === 'snack' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Snack
            </button>
            <button @click="tab = 'toast'" :class="tab === 'toast' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Toast
            </button>
            <button @click="tab = 'rice_bowl'" :class="tab === 'rice_bowl' ? 'bg-mocha-400 text-zinc-950 font-bold shadow-[0_0_15px_rgba(192,132,82,0.4)]' : 'border border-white/10 bg-zinc-900/80 backdrop-blur-md text-zinc-300 hover:text-white hover:bg-white/10 font-semibold'" class="px-4 py-2 rounded-full text-xs transition-all duration-300 shrink-0">
                Rice Bowl
            </button>
        </div>

        {{-- COMPACT MULTI-COLUMN GRID MENU (1 COL MOBILE, 2 COLS TABLET, 3 COLS DESKTOP) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 md:gap-8 min-h-[420px]">

            {{-- KOPI --}}
            <div
                x-show="tab === 'all' || tab === 'kopi'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Kopi</h3>
                    <div class="flex gap-4 text-[10px] font-mono font-bold text-mocha-300">
                        <span class="w-8 text-center">HOT</span>
                        <span class="w-8 text-right">ICE</span>
                    </div>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['kopi'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <div class="flex items-center gap-4 font-mono">
                                <span class="w-8 text-center text-zinc-400">{{ $item['price_hot'] ? $item['price_hot'].'k' : '-' }}</span>
                                <span class="w-8 text-right font-bold text-mocha-300">{{ $item['price_ice'] ? $item['price_ice'].'k' : '-' }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- NON KOPI --}}
            <div
                x-show="tab === 'all' || tab === 'non_kopi'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Non Kopi</h3>
                    <div class="flex gap-4 text-[10px] font-mono font-bold text-mocha-300">
                        <span class="w-8 text-center">HOT</span>
                        <span class="w-8 text-right">ICE</span>
                    </div>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['non_kopi'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <div class="flex items-center gap-4 font-mono">
                                <span class="w-8 text-center text-zinc-400">{{ $item['price_hot'] ? $item['price_hot'].'k' : '-' }}</span>
                                <span class="w-8 text-right font-bold text-mocha-300">{{ $item['price_ice'] ? $item['price_ice'].'k' : '-' }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- CHOCOLATE --}}
            <div
                x-show="tab === 'all' || tab === 'chocolate'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Chocolate</h3>
                    <div class="flex gap-4 text-[10px] font-mono font-bold text-mocha-300">
                        <span class="w-8 text-center">HOT</span>
                        <span class="w-8 text-right">ICE</span>
                    </div>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['chocolate'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <div class="flex items-center gap-4 font-mono">
                                <span class="w-8 text-center text-zinc-400">{{ $item['price_hot'] ? $item['price_hot'].'k' : '-' }}</span>
                                <span class="w-8 text-right font-bold text-mocha-300">{{ $item['price_ice'] ? $item['price_ice'].'k' : '-' }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- TEA SERIES --}}
            <div
                x-show="tab === 'all' || tab === 'tea_series'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Tea Series</h3>
                    <div class="flex gap-4 text-[10px] font-mono font-bold text-mocha-300">
                        <span class="w-8 text-center">HOT</span>
                        <span class="w-8 text-right">ICE</span>
                    </div>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['tea_series'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <div class="flex items-center gap-4 font-mono">
                                <span class="w-8 text-center text-zinc-400">{{ $item['price_hot'] ? $item['price_hot'].'k' : '-' }}</span>
                                <span class="w-8 text-right font-bold text-mocha-300">{{ $item['price_ice'] ? $item['price_ice'].'k' : '-' }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- GELATO --}}
            <div
                x-show="tab === 'all' || tab === 'gelato'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Gelato</h3>
                    <span class="text-[10px] font-mono font-bold text-mocha-300">HARGA</span>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['gelato'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <span class="font-mono font-bold text-mocha-300">{{ $item['price'] }}k</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- DESSERT --}}
            <div
                x-show="tab === 'all' || tab === 'dessert'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Dessert</h3>
                    <span class="text-[10px] font-mono font-bold text-mocha-300">HARGA</span>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['dessert'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <span class="font-mono font-bold text-mocha-300">{{ $item['price'] }}k</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- SNACK --}}
            <div
                x-show="tab === 'all' || tab === 'snack'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Snack</h3>
                    <span class="text-[10px] font-mono font-bold text-mocha-300">HARGA</span>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['snack'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <span class="font-mono font-bold text-mocha-300">{{ $item['price'] }}k</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- TOAST --}}
            <div
                x-show="tab === 'all' || tab === 'toast'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Toast</h3>
                    <span class="text-[10px] font-mono font-bold text-mocha-300">HARGA</span>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['toast'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <span class="font-mono font-bold text-mocha-300">{{ $item['price'] }}k</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- RICE BOWL --}}
            <div
                x-show="tab === 'all' || tab === 'rice_bowl'"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col bg-zinc-950/80 backdrop-blur-md p-4 sm:p-5 rounded-2xl border border-white/10 shadow-lg"
            >
                <div class="flex items-center justify-between border-b-2 border-mocha-400/40 pb-2 mb-3">
                    <h3 class="text-base sm:text-lg font-black tracking-tight text-white uppercase">Rice Bowl</h3>
                    <span class="text-[10px] font-mono font-bold text-mocha-300">HARGA</span>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach ($menu['rice_bowl'] as $item)
                        <div class="py-2 flex items-center justify-between hover:bg-white/5 px-1 rounded transition-colors text-xs">
                            <span class="font-medium text-white">{{ $item['name'] }}</span>
                            <span class="font-mono font-bold text-mocha-300">{{ $item['price'] }}k</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- Direct Info & Reservation WA Banner --}}
        <div class="mt-10 sm:mt-16 rounded-2xl sm:rounded-3xl border border-white/15 bg-zinc-950/90 backdrop-blur-2xl p-5 sm:p-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left shadow-xl fade-up">
            <div>
                <h4 class="text-base sm:text-lg font-bold text-white">Ada Pertanyaan seputar Menu atau Mau Reservasi Meja?</h4>
                <p class="text-xs text-zinc-400 mt-1 font-medium">WhatsApp resmi kami melayani informasi tempat, ketersediaan meja, dan booking tempat nongkrong.</p>
            </div>
            <a
                href="https://wa.me/{{ $cafe['phone_wa'] ?? '6281326428553' }}?text=Halo%20Otewe%2C%20saya%20mau%20tanya%20info%20dan%20reservasi%20tempat"
                target="_blank" rel="noopener"
                class="w-full sm:w-auto text-center rounded-full bg-mocha-400 text-zinc-950 px-6 py-3 sm:py-2.5 text-xs sm:text-sm font-bold hover:bg-mocha-300 transition-all shrink-0 shadow-[0_10px_20px_rgba(192,132,82,0.25)]"
            >
                💬 Chat Info & Reservasi WA
            </a>
        </div>

    </div>
</section>
