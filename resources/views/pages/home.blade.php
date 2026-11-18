@extends('layouts.app')

@section('title', 'Patna Caterer & Patna Tent House | Premier Catering & Event Infrastructure in Patna')

@section('content')
    <!-- HERO SECTION (High-End Split Layout with Visual Showcase & Framer Motion) -->
    <section class="relative pt-8 pb-16 sm:pt-14 sm:pb-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Left Column: Editorial Headline & Actions -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <!-- Eyebrow Badge -->
                    <div class="motion-hero-item inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/90 border border-amber-300 shadow-xs text-amber-900 text-xs font-semibold">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                        <span>Patna's Premier Event Specialist</span>
                    </div>

                    <!-- Main Headline (Clean Editorial Title Case) -->
                    <h1 class="motion-hero-item text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12]">
                        Royal Catering & <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-orange-600">
                            Luxury Event Decor
                        </span> <br class="hidden sm:inline">
                        in Patna
                    </h1>

                    <!-- Subtitle -->
                    <p class="motion-hero-item text-base sm:text-lg text-slate-600 font-normal leading-relaxed max-w-xl mx-auto lg:mx-0">
                        From authentic Champaran Ahuna Handi feasts and live chaat counters to royal German hangars and Vedic mandaps — we bring flawless hospitality to your celebrations.
                    </p>

                    <!-- Two Clean Primary Actions -->
                    <div class="motion-hero-item flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 pt-2">
                        <a href="{{ route('contact') }}"
                           class="w-full sm:w-auto px-7 py-3.5 bg-slate-950 hover:bg-slate-800 text-white font-semibold text-xs tracking-wide rounded-full transition shadow-md shadow-slate-950/10 flex items-center justify-center gap-2 group">
                            <span>Request Event Quote</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <a href="tel:7717702563"
                           class="w-full sm:w-auto px-6 py-3.5 bg-white/80 hover:bg-white border border-slate-300 hover:border-amber-400 text-slate-800 font-semibold text-xs tracking-wide rounded-full transition shadow-xs flex items-center justify-center gap-2">
                            <svg class="w-3.5 h-3.5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                            <span>Call 7717702563</span>
                        </a>
                    </div>

                    <!-- Trust Proof Line -->
                    <div class="motion-hero-item pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-4 text-xs text-slate-500">
                        <div class="flex items-center gap-1.5">
                            <span class="text-amber-500 font-bold">★ 4.8</span>
                            <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer" class="hover:underline text-slate-700 font-medium">Justdial Verified</a>
                        </div>
                        <span class="text-slate-300">•</span>
                        <span>1,200+ Events Hosted</span>
                        <span class="text-slate-300">•</span>
                        <span>15+ Years in Boring Road</span>
                    </div>
                </div>

                <!-- Right Column: Visual Showcase (High-End Glassmorphic Feature Cards) -->
                <div class="lg:col-span-5 relative">
                    <div class="space-y-4">
                        <!-- Showcase Card 1: Royal Catering -->
                        <div class="motion-card bg-white/90 backdrop-blur-xl border border-slate-200/90 rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-amber-800 bg-amber-50 border border-amber-200 px-2.5 py-0.5 rounded-full">
                                    Catering Division
                                </span>
                                <span class="text-xs font-semibold text-slate-400">40+ Dishes</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1">
                                Royal Catering Feasts
                            </h3>
                            <p class="text-xs text-slate-500 leading-relaxed mb-4">
                                Signature Champaran Ahuna Handi mutton, Desi Ghee Litti Chokha, Banarasi chaat counters, and Halwai sweets.
                            </p>
                            <div class="flex items-center justify-between text-xs pt-3 border-t border-slate-100">
                                <span class="text-slate-500">Pure Desi Ghee & FSSAI Standards</span>
                                <a href="{{ route('catering') }}" class="font-semibold text-amber-600 hover:text-amber-700">Explore Menu →</a>
                            </div>
                        </div>

                        <!-- Showcase Card 2: Tent House & Decor -->
                        <div class="motion-card bg-white/90 backdrop-blur-xl border border-slate-200/90 rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-amber-800 bg-amber-50 border border-amber-200 px-2.5 py-0.5 rounded-full">
                                    Infrastructure Division
                                </span>
                                <span class="text-xs font-semibold text-slate-400">All-Weather</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1">
                                Grand Tent House & Decor
                            </h3>
                            <p class="text-xs text-slate-500 leading-relaxed mb-4">
                                German hangar waterproof tents, Vedic floral mandaps, fairy truss lighting, commercial tower ACs, and silent DG sets.
                            </p>
                            <div class="flex items-center justify-between text-xs pt-3 border-t border-slate-100">
                                <span class="text-slate-500">100% In-House Equipment</span>
                                <a href="{{ route('tent-house') }}" class="font-semibold text-amber-600 hover:text-amber-700">View Setups →</a>
                            </div>
                        </div>

                        <!-- Floating Location Pill -->
                        <div class="motion-card flex items-center justify-between bg-white/80 border border-slate-200 rounded-xl px-4 py-2.5 text-xs text-slate-600">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                <span class="font-medium">Near A.N. College, Boring Road, Patna</span>
                            </div>
                            <a href="https://wa.me/917717702563" target="_blank" rel="noopener noreferrer" class="font-semibold text-emerald-600 hover:underline">
                                WhatsApp Us
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CORE SERVICES OVERVIEW (Motion Section) -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80 bg-white/50 backdrop-blur-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950">
                        Two Master Divisions, One Seamless Host
                    </h2>
                    <p class="text-slate-500 text-sm mt-1">
                        Complete event solutions without the hassle of coordinating conflicting third-party vendors.
                    </p>
                </div>
                <a href="{{ route('packages') }}" class="text-xs font-semibold text-amber-600 hover:text-amber-700 flex items-center gap-1">
                    <span>View Pricing Packages</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Catering Card -->
                <div class="motion-card glass-card p-8 rounded-2xl border border-slate-200/90 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold text-amber-800 bg-amber-50 px-2.5 py-1 rounded-md">Food & Catering</span>
                            <span class="text-xs text-slate-400">50 to 5,000+ Guests</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-950 mb-2">Patna Catering Services</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Prepared with pure desi ghee and hand-ground spices by master Halwais and Awadhi ustads.
                        </p>
                        <ul class="space-y-2.5 text-xs text-slate-700 font-medium mb-6">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">•</span>
                                <span>Champaran Ahuna Handi Mutton (Slow-cooked in clay pots)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">•</span>
                                <span>Traditional Bihari Litti Chokha with Desi Ghee</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">•</span>
                                <span>Live Chaat Counters (Banarasi Tamatar Chaat, Kolkata Puchka)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">•</span>
                                <span>Halwai Desserts (Hot Jalebi with Rabdi, Gajar Halwa, Kulfi)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-semibold text-slate-500">Pure Veg & Non-Veg Menus</span>
                        <a href="{{ route('catering') }}" class="text-xs font-bold text-amber-600 hover:text-amber-700">Explore Catering →</a>
                    </div>
                </div>

                <!-- Tent House Card -->
                <div class="motion-card glass-card p-8 rounded-2xl border border-slate-200/90 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold text-amber-800 bg-amber-50 px-2.5 py-1 rounded-md">Tent & Infrastructure</span>
                            <span class="text-xs text-slate-400">100% In-House</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-950 mb-2">Patna Tent House & Decor</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Engineered for safety and royal elegance. All-weather structures for banquets and open lawns.
                        </p>
                        <ul class="space-y-2.5 text-xs text-slate-700 font-medium mb-6">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">•</span>
                                <span>German Hangar Waterproof Pandal (All-weather safety)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">•</span>
                                <span>Royal Wedding Mandap (Floral arches, Rajputana & Vedic themes)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">•</span>
                                <span>Designer Reception Stage & High-Definition LED Walls</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">•</span>
                                <span>Tower ACs, Mist Cooling Fans & Soundproof DG Generator Sets</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-semibold text-slate-500">Zero Third-Party Dependency</span>
                        <a href="{{ route('tent-house') }}" class="text-xs font-bold text-amber-600 hover:text-amber-700">Explore Tent Setups →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PACKAGES OVERVIEW (Motion Section) -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Transparent Estimates
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950 mt-3 mb-2">
                    Curated Event Packages
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm">
                    Transparent per-plate pricing tailored to your guest count and chosen specifications.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Silver -->
                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-bold text-slate-600">Silver Package</span>
                            <span class="text-[10px] bg-slate-100 px-2 py-0.5 rounded font-medium">50-200 Guests</span>
                        </div>
                        <h4 class="text-base font-bold text-slate-950 mb-1">Birthday, Tilak & Puja</h4>
                        <p class="text-xs text-slate-500 mb-4">Complete buffet spread with neat canopy decor and lighting.</p>
                        <div class="text-xl font-bold text-slate-900 font-mono mb-4">
                            ₹450 - ₹650 <span class="text-xs font-normal text-slate-500 font-sans">/ plate</span>
                        </div>
                    </div>
                    <a href="{{ route('packages') }}" class="w-full text-center py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-900 font-semibold text-xs rounded-xl transition">
                        View Details
                    </a>
                </div>

                <!-- Gold -->
                <div class="motion-card glass-card p-6 rounded-2xl border-2 border-amber-400 relative shadow-sm flex flex-col justify-between">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-amber-500 text-white text-[10px] font-bold uppercase tracking-wider px-3 py-0.5 rounded-full">
                        Popular Choice
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-3 mt-1">
                            <span class="text-xs font-bold text-amber-700">Gold Package</span>
                            <span class="text-[10px] bg-amber-100 text-amber-800 px-2 py-0.5 rounded font-medium">200-800 Guests</span>
                        </div>
                        <h4 class="text-base font-bold text-slate-950 mb-1">Grand Wedding & Reception</h4>
                        <p class="text-xs text-slate-500 mb-4">32+ course menu, live chaat stalls, floral mandap, and VIP seating.</p>
                        <div class="text-xl font-bold text-amber-600 font-mono mb-4">
                            ₹750 - ₹1,150 <span class="text-xs font-normal text-slate-500 font-sans">/ plate</span>
                        </div>
                    </div>
                    <a href="{{ route('packages') }}" class="w-full text-center py-2.5 bg-slate-950 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl transition shadow-xs">
                        View Details
                    </a>
                </div>

                <!-- Platinum -->
                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-bold text-slate-600">Platinum Royal</span>
                            <span class="text-[10px] bg-slate-100 px-2 py-0.5 rounded font-medium">500+ Guests</span>
                        </div>
                        <h4 class="text-base font-bold text-slate-950 mb-1">Turnkey Luxury Gala</h4>
                        <p class="text-xs text-slate-500 mb-4">German hangar AC pandal, Champaran live counter, and luxury decor.</p>
                        <div class="text-xl font-bold text-slate-900 font-mono mb-4">
                            ₹1,350 - ₹2,200 <span class="text-xs font-normal text-slate-500 font-sans">/ plate</span>
                        </div>
                    </div>
                    <a href="{{ route('packages') }}" class="w-full text-center py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-900 font-semibold text-xs rounded-xl transition">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS (Motion Section) -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80 bg-white/40">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-3">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950">
                        What Patna Families Say
                    </h2>
                    <p class="text-slate-500 text-xs sm:text-sm mt-1">Real feedback from clients across Bailey Road, Boring Road, and Kankarbagh.</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-amber-500 font-bold text-base">★★★★★</span>
                    <span class="text-xs font-semibold text-slate-700">4.8 / 5.0 Justdial Rating</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="motion-card glass-card p-6 rounded-2xl flex flex-col justify-between">
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic mb-4">
                        "Humne apne bete ki shaadi ke liye hire kiya tha near Bailey Road. Champaran Handi mutton aur hot jalebi-rabri ka swaad sabhi guests ne tareef kiya. Pandal ka decor bhi royal tha!"
                    </p>
                    <div class="border-t border-slate-100 pt-3">
                        <p class="text-xs font-bold text-slate-900">Dr. Rajeshwar Prasad</p>
                        <p class="text-[11px] text-slate-400">Wedding at Bailey Road, Patna</p>
                    </div>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl flex flex-col justify-between">
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic mb-4">
                        "For our corporate annual meet in Patliputra, their buffet management was top class. Punctual setup, polite uniformed staff, and super fresh North Indian and Chinese spread."
                    </p>
                    <div class="border-t border-slate-100 pt-3">
                        <p class="text-xs font-bold text-slate-900">Anand Srivastava</p>
                        <p class="text-[11px] text-slate-400">Corporate Meet, Patliputra Colony</p>
                    </div>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl flex flex-col justify-between">
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic mb-4">
                        "7717702563 par contact kiya tha ring ceremony ke liye. Budget transparent tha aur koi hidden charges nahi liye. Live Banarasi Tamatar chaat aur Dal Makhani were superb!"
                    </p>
                    <div class="border-t border-slate-100 pt-3">
                        <p class="text-xs font-bold text-slate-900">Pooja Kumari & Family</p>
                        <p class="text-[11px] text-slate-400">Ring Ceremony, Kankarbagh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CLEAN CTA BANNER -->
    <section class="pb-16 sm:pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-amber-500 to-amber-600 rounded-3xl p-8 sm:p-12 text-white shadow-lg shadow-amber-500/15 text-center">
                <div class="max-w-xl mx-auto space-y-4">
                    <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                        Planning an Event in Patna?
                    </h3>
                    <p class="text-amber-100 text-xs sm:text-sm leading-relaxed">
                        Call us directly or request an estimate online to check date availability and arrange a food tasting session at our Boring Road kitchen.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2">
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto px-7 py-3 bg-white text-slate-950 font-bold text-xs rounded-full hover:bg-slate-100 transition shadow-sm">
                            Get Free Quote
                        </a>
                        <a href="tel:7717702563" class="w-full sm:w-auto px-6 py-3 bg-slate-950 text-white font-bold text-xs rounded-full hover:bg-slate-900 transition flex items-center justify-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                            <span>+91 7717702563</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
