@extends('layouts.app')

@section('title', 'Patna Caterer & Patna Tent House | Premier Catering & Event Infrastructure in Patna')

@section('content')
    <!-- HERO SECTION (Staggered Motion Entrance) -->
    <section class="relative pt-10 pb-20 sm:pt-16 sm:pb-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Highlight Pill -->
                <div class="motion-hero-item inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/95 border border-amber-300 shadow-sm text-amber-900 text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                    Patna's Premier Catering & Event Infrastructure
                </div>

                <!-- Main Hero Headline -->
                <h1 class="motion-hero-item text-4xl sm:text-6xl lg:text-7xl font-black tracking-tight text-slate-950 uppercase leading-[1.08] mb-6">
                    Grand Taste. <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 via-amber-500 to-orange-600">Royal Hospitality.</span> <br>
                    Flawless Celebrations.
                </h1>

                <!-- Sub-headline -->
                <p class="motion-hero-item text-base sm:text-xl text-slate-600 max-w-2xl mx-auto font-normal leading-relaxed mb-10">
                    From authentic Champaran Ahuna Handi and live chaat counters to royal German hangars and Vedic floral mandaps — we host Patna's most memorable weddings and banquets.
                </p>

                <!-- Call To Action Buttons -->
                <div class="motion-hero-item flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                    <a href="{{ route('contact') }}"
                       class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 text-white font-black text-xs uppercase tracking-wider rounded-xl hover:from-amber-600 hover:to-amber-700 transition shadow-lg shadow-amber-500/25 flex items-center justify-center gap-2">
                        <span>Get Free Event Quote</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>

                    <a href="tel:7717702563"
                       class="w-full sm:w-auto px-8 py-4 bg-white border border-slate-300 text-slate-900 font-black text-xs uppercase tracking-wider rounded-xl hover:bg-slate-50 hover:border-amber-400 transition shadow-sm flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 text-amber-600" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                        <span>Call 7717702563</span>
                    </a>

                    <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20please%20share%20your%20catering%20menu%20and%20pricing"
                       target="_blank" rel="noopener noreferrer"
                       class="w-full sm:w-auto px-6 py-4 bg-emerald-50 border border-emerald-300 text-emerald-800 font-bold text-xs uppercase tracking-wider rounded-xl hover:bg-emerald-100 transition shadow-sm flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 fill-current text-emerald-600" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                        <span>WhatsApp Menu</span>
                    </a>
                </div>

                <!-- Trust Metrics Strip -->
                <div class="motion-hero-item grid grid-cols-2 md:grid-cols-4 gap-4 pt-4">
                    <div class="glass-card glass-card-hover p-6 rounded-2xl text-center">
                        <p class="text-3xl sm:text-4xl font-black text-slate-900 font-mono">1,200+</p>
                        <p class="text-xs uppercase tracking-wider text-amber-700 mt-1 font-bold">Events Executed</p>
                        <p class="text-[11px] text-slate-500 mt-1">Weddings & Banquets</p>
                    </div>
                    <div class="glass-card glass-card-hover p-6 rounded-2xl text-center">
                        <p class="text-3xl sm:text-4xl font-black text-slate-900 font-mono">15+ Years</p>
                        <p class="text-xs uppercase tracking-wider text-amber-700 mt-1 font-bold">Patna Heritage</p>
                        <p class="text-[11px] text-slate-500 mt-1">Boring Road, Patna</p>
                    </div>
                    <div class="glass-card glass-card-hover p-6 rounded-2xl text-center">
                        <p class="text-3xl sm:text-4xl font-black text-slate-900 font-mono">45+ Dishes</p>
                        <p class="text-xs uppercase tracking-wider text-amber-700 mt-1 font-bold">Multi-Cuisines</p>
                        <p class="text-[11px] text-slate-500 mt-1">Bihari, Mughlai, Sweets</p>
                    </div>
                    <div class="glass-card glass-card-hover p-6 rounded-2xl text-center">
                        <p class="text-3xl sm:text-4xl font-black text-slate-900 font-mono">4.8 / 5.0</p>
                        <p class="text-xs uppercase tracking-wider text-amber-700 mt-1 font-bold">Justdial Rating</p>
                        <p class="text-[11px] text-slate-500 mt-1">Verified Top Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TWO CORE DIVISIONS: CATERING vs TENT HOUSE (Motion Section) -->
    <section class="motion-section py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                        Comprehensive Event Services
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-black tracking-tight text-slate-950 uppercase mt-3">
                        Two Master Divisions. <br>One Trusted Team.
                    </h2>
                </div>
                <p class="text-slate-600 max-w-md text-sm leading-relaxed">
                    No need to coordinate with multiple conflicting vendors. We handle everything from the welcome drinks and live counters to German hangars and royal seating under one roof.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Division 1: Catering -->
                <div class="motion-card glass-card glass-card-hover p-8 sm:p-10 rounded-2xl border border-slate-200/90 relative flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-extrabold uppercase tracking-wider px-3 py-1 bg-amber-100 text-amber-900 rounded-lg">
                                Division 01
                            </span>
                            <span class="text-xs font-bold text-slate-500">
                                Food & Hospitality
                            </span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black uppercase text-slate-950 mb-3">
                            Patna Catering Services
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Authentic taste crafted by master halwais and Mughlai chefs. Prepared in 100% pure desi ghee and branded spices under strict sanitary standards.
                        </p>

                        <div class="space-y-3 text-xs sm:text-sm font-medium text-slate-700 mb-8">
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span><strong>Champaran Ahuna Handi Mutton:</strong> Earthen-pot slow cooked on wood coal.</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span><strong>Traditional Bihari Litti Chokha:</strong> Charcoal roasted with pure desi ghee.</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span><strong>Live Street Food & Chaat:</strong> Banarasi Tamatar Chaat, Kolkata Puchka, Tikkis.</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span><strong>Halwai Desserts:</strong> Live Jalebi-Rabri, Moong Dal Halwa, Matka Kulfi.</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-200 flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-500">Capacity: 50 to 5,000+ Guests</span>
                        <a href="{{ route('catering') }}" class="text-xs uppercase font-extrabold tracking-wider text-amber-600 hover:text-amber-700 flex items-center gap-1.5 group">
                            <span>Explore Full Menu</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Division 2: Tent House -->
                <div class="motion-card glass-card glass-card-hover p-8 sm:p-10 rounded-2xl border border-slate-200/90 relative flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-extrabold uppercase tracking-wider px-3 py-1 bg-amber-100 text-amber-900 rounded-lg">
                                Division 02
                            </span>
                            <span class="text-xs font-bold text-slate-500">
                                Infrastructure & Decor
                            </span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black uppercase text-slate-950 mb-3">
                            Patna Tent House & Event Decor
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Transform any ground, lawn, or open space into a grand royal venue with all-weather German hangars, ambient lighting, and floral stage decor.
                        </p>

                        <div class="space-y-3 text-xs sm:text-sm font-medium text-slate-700 mb-8">
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span><strong>German Hangar Waterproof Pandal:</strong> All-weather storm-safe structures.</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span><strong>Royal Wedding Mandap:</strong> Vedic lotus & contemporary floral arches.</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span><strong>Designer Reception Stage:</strong> LED video walls & VIP bridal seating.</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span><strong>Climate & Generator Backup:</strong> Tower ACs, mist fans & heavy DG sets.</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-200 flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-500">100% In-House Inventory</span>
                        <a href="{{ route('tent-house') }}" class="text-xs uppercase font-extrabold tracking-wider text-amber-600 hover:text-amber-700 flex items-center gap-1.5 group">
                            <span>Explore Tent Infrastructure</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED PACKAGES STRIP (Motion Section) -->
    <section class="motion-section py-16 sm:py-24 bg-white/70 backdrop-blur-md border-y border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Transparent Options
                </span>
                <h2 class="text-3xl sm:text-4xl font-black uppercase tracking-tight text-slate-950 mt-3 mb-3">
                    Curated Event Packages
                </h2>
                <p class="text-slate-600 text-sm">
                    Tailored for different party sizes with clear per-plate pricing and full customizability.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Silver -->
                <div class="motion-card glass-card glass-card-hover p-8 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-600">Silver Package</span>
                            <span class="text-[11px] bg-slate-100 text-slate-700 font-semibold px-2 py-0.5 rounded">Intimate</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-950 uppercase mb-2">Birthday, Tilak & Puja</h3>
                        <p class="text-xs text-slate-500 mb-6">50 to 200 Guests with complete buffet spread and neat canopy decor.</p>
                        <div class="text-2xl font-black text-slate-900 font-mono mb-6">
                            ₹450 - ₹650 <span class="text-xs text-slate-500 font-sans font-normal">/ per plate</span>
                        </div>
                    </div>
                    <a href="{{ route('packages') }}" class="w-full text-center py-3 bg-slate-100 hover:bg-slate-200 text-slate-900 font-bold text-xs uppercase tracking-wider rounded-xl transition">
                        View Package Details →
                    </a>
                </div>

                <!-- Gold -->
                <div class="motion-card glass-card glass-card-hover p-8 rounded-2xl border-2 border-amber-400 relative shadow-xl shadow-amber-500/10 flex flex-col justify-between">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-amber-500 text-white text-[11px] font-black uppercase tracking-widest px-3.5 py-1 rounded-full shadow">
                        Most Popular in Patna
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-4 mt-1">
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Gold Package</span>
                            <span class="text-[11px] bg-amber-100 text-amber-800 font-semibold px-2 py-0.5 rounded">Grand Wedding</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-950 uppercase mb-2">Wedding & Reception</h3>
                        <p class="text-xs text-slate-500 mb-6">200 to 800 Guests with 32+ dishes, live chaat stalls, and royal mandap.</p>
                        <div class="text-2xl font-black text-amber-600 font-mono mb-6">
                            ₹750 - ₹1,150 <span class="text-xs text-slate-500 font-sans font-normal">/ per plate</span>
                        </div>
                    </div>
                    <a href="{{ route('packages') }}" class="w-full text-center py-3 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition shadow">
                        View Package Details →
                    </a>
                </div>

                <!-- Platinum -->
                <div class="motion-card glass-card glass-card-hover p-8 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-600">Platinum Royal</span>
                            <span class="text-[11px] bg-slate-100 text-slate-700 font-semibold px-2 py-0.5 rounded">VIP / Luxury</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-950 uppercase mb-2">Celebrity Gala & Destination</h3>
                        <p class="text-xs text-slate-500 mb-6">500+ Guests with German hangar, Ahuna meat live counter, and luxury decor.</p>
                        <div class="text-2xl font-black text-slate-900 font-mono mb-6">
                            ₹1,350 - ₹2,200 <span class="text-xs text-slate-500 font-sans font-normal">/ per plate</span>
                        </div>
                    </div>
                    <a href="{{ route('packages') }}" class="w-full text-center py-3 bg-slate-100 hover:bg-slate-200 text-slate-900 font-bold text-xs uppercase tracking-wider rounded-xl transition">
                        View Package Details →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- REAL CUSTOMER TESTIMONIALS (Motion Section) -->
    <section class="motion-section py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                        Verified Reviews
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-black uppercase tracking-tight text-slate-950 mt-3">
                        Loved by Families Across Patna
                    </h2>
                </div>
                <div class="flex items-center gap-3">
                    <div class="text-amber-500 text-2xl font-bold">★★★★★</div>
                    <span class="text-slate-600 text-sm font-semibold">4.8 / 5.0 on Justdial</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="motion-card glass-card glass-card-hover p-8 rounded-2xl flex flex-col justify-between">
                    <div>
                        <div class="text-amber-500 text-sm mb-3">★★★★★</div>
                        <p class="text-sm text-slate-700 leading-relaxed italic mb-6">
                            "Humne apne bete ki shaadi ke liye hire kiya tha near Bailey Road. Champaran Handi mutton aur hot jalebi-rabri ka swaad sabhi guests ne tareef kiya. Pandal ka decor bhi royal tha!"
                        </p>
                    </div>
                    <div class="border-t border-slate-100 pt-4">
                        <p class="text-xs font-bold text-slate-900 uppercase">Dr. Rajeshwar Prasad</p>
                        <p class="text-[11px] text-slate-500">Wedding at Bailey Road, Patna</p>
                    </div>
                </div>

                <div class="motion-card glass-card glass-card-hover p-8 rounded-2xl flex flex-col justify-between">
                    <div>
                        <div class="text-amber-500 text-sm mb-3">★★★★★</div>
                        <p class="text-sm text-slate-700 leading-relaxed italic mb-6">
                            "For our corporate annual meet in Patliputra, their buffet management was top class. Punctual setup, polite uniformed staff, and super fresh North Indian and Chinese spread."
                        </p>
                    </div>
                    <div class="border-t border-slate-100 pt-4">
                        <p class="text-xs font-bold text-slate-900 uppercase">Anand Srivastava</p>
                        <p class="text-[11px] text-slate-500">Corporate Meet, Patliputra Colony</p>
                    </div>
                </div>

                <div class="motion-card glass-card glass-card-hover p-8 rounded-2xl flex flex-col justify-between">
                    <div>
                        <div class="text-amber-500 text-sm mb-3">★★★★★</div>
                        <p class="text-sm text-slate-700 leading-relaxed italic mb-6">
                            "7717702563 par contact kiya tha ring ceremony ke liye. Budget transparent tha aur koi hidden charges nahi liye. Live Banarasi Tamatar chaat aur Dal Makhani were superb!"
                        </p>
                    </div>
                    <div class="border-t border-slate-100 pt-4">
                        <p class="text-xs font-bold text-slate-900 uppercase">Pooja Kumari & Family</p>
                        <p class="text-[11px] text-slate-500">Ring Ceremony, Kankarbagh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK CALLOUT TO CONTACT PAGE -->
    <section class="pb-16 sm:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-amber-500 via-amber-600 to-orange-600 rounded-3xl p-8 sm:p-14 text-white shadow-xl shadow-amber-500/20 text-center relative overflow-hidden">
                <div class="relative z-10 max-w-2xl mx-auto">
                    <span class="inline-block px-3.5 py-1 rounded-full bg-white/20 text-white text-xs font-extrabold uppercase tracking-widest mb-4">
                        Lock Your Event Date
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-black uppercase tracking-tight mb-4">
                        Planning an Event in Patna?
                    </h2>
                    <p class="text-amber-100 text-sm sm:text-base leading-relaxed mb-8">
                        Call us directly or send an inquiry to check date availability, request a menu tasting, or arrange an on-site venue inspection near Boring Road.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-3.5 bg-white text-slate-950 font-black text-xs uppercase tracking-wider rounded-xl hover:bg-slate-100 transition shadow">
                            Send Booking Inquiry
                        </a>
                        <a href="tel:7717702563" class="w-full sm:w-auto px-8 py-3.5 bg-slate-950 text-white font-black text-xs uppercase tracking-wider rounded-xl hover:bg-slate-900 transition flex items-center justify-center gap-2">
                            <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                            <span>Call +91 7717702563</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
