@extends('layouts.app')

@section('title', 'Patna Caterer & Patna Tent House | Premier Catering & Event Infrastructure in Patna')
@section('meta_description', 'Patna Caterer & Patna Tent House - Boring Road, Patna. Premium wedding catering, Champaran Ahuna Handi, live chaat, German hangar waterproof tents, Vedic mandaps, and corporate banquets. Call 7717702563.')

@section('content')
    <!-- 1. HERO SECTION (High-End Split Layout with Visual Showcase & Framer Motion) -->
    <section class="relative pt-6 pb-16 sm:pt-12 sm:pb-20">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
                
                <!-- Left Column: Editorial Headline & Actions -->
                <div class="lg:col-span-7 space-y-5 text-center lg:text-left">
                    <!-- Eyebrow Badge -->
                    <div class="motion-hero-item inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/90 border border-amber-300 shadow-xs text-amber-900 text-xs font-semibold">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                        <span>Patna's Premier Wedding & Event Specialists</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="motion-hero-item text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12]">
                        Royal Catering & <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 via-amber-500 to-orange-600">
                            Luxury Event Decor
                        </span> <br class="hidden sm:inline">
                        in Patna
                    </h1>

                    <!-- Subtitle -->
                    <p class="motion-hero-item text-base sm:text-lg text-slate-600 font-normal leading-relaxed max-w-xl mx-auto lg:mx-0">
                        From authentic Champaran Ahuna Handi feasts and live street chaat counters to royal German hangars and Vedic floral mandaps — we host Patna's most memorable celebrations with flawless hospitality.
                    </p>

                    <!-- Primary Actions -->
                    <div class="motion-hero-item flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 pt-2">
                        <a href="#inquiry-section"
                           class="w-full sm:w-auto px-7 py-3.5 bg-slate-950 hover:bg-slate-800 text-white font-semibold text-xs tracking-wide rounded-full transition shadow-md shadow-slate-950/10 flex items-center justify-center gap-2 group">
                            <span>Request Free Event Quote</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <a href="tel:7717702563"
                           class="w-full sm:w-auto px-6 py-3.5 bg-white/80 hover:bg-white border border-slate-300 hover:border-amber-400 text-slate-800 font-semibold text-xs tracking-wide rounded-full transition shadow-xs flex items-center justify-center gap-2">
                            <svg class="w-3.5 h-3.5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                            <span>Call 7717702563</span>
                        </a>

                        <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20please%20share%20your%20catering%20menu%20and%20pricing"
                           target="_blank" rel="noopener noreferrer"
                           class="w-full sm:w-auto px-5 py-3.5 bg-emerald-50 border border-emerald-300 text-emerald-800 font-semibold text-xs rounded-full hover:bg-emerald-100 transition shadow-xs flex items-center justify-center gap-2">
                            <svg class="w-3.5 h-3.5 fill-current text-emerald-600" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                            <span>WhatsApp Menu</span>
                        </a>
                    </div>

                    <!-- Trust Proof Line -->
                    <div class="motion-hero-item pt-3 flex flex-wrap items-center justify-center lg:justify-start gap-3 text-xs text-slate-500">
                        <div class="flex items-center gap-1.5">
                            <span class="text-amber-500 font-bold">★ 4.8</span>
                            <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer" class="hover:underline text-slate-700 font-medium">Justdial Verified (DT-47WRSUKTS1G)</a>
                        </div>
                        <span class="text-slate-300">•</span>
                        <span>1,200+ Events Hosted</span>
                        <span class="text-slate-300">•</span>
                        <span>233, Rajesh Petrol Building, A N College, Boring Road</span>
                    </div>
                </div>

                <!-- Right Column: Visual Showcase (Glassmorphic Feature Cards) -->
                <div class="lg:col-span-5 relative space-y-4">
                    <!-- Showcase Card 1: Catering -->
                    <div class="motion-card bg-white/90 backdrop-blur-xl border border-slate-200/90 rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-amber-800 bg-amber-50 border border-amber-200 px-2.5 py-0.5 rounded-full">
                                Catering Division
                            </span>
                            <span class="text-xs font-semibold text-slate-400">40+ Signature Dishes</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1">
                            Royal Catering Feasts
                        </h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-4">
                            Authentic Champaran Ahuna Handi slow-cooked in clay pots, charcoal Litti Chokha with pure desi ghee, live chaat stalls, and hot Halwai sweets.
                        </p>
                        <div class="flex items-center justify-between text-xs pt-3 border-t border-slate-100">
                            <span class="text-slate-500 font-medium">100% Pure Desi Ghee & FSSAI Standards</span>
                            <a href="{{ route('catering') }}" class="font-bold text-amber-600 hover:text-amber-700">Explore Menu →</a>
                        </div>
                    </div>

                    <!-- Showcase Card 2: Tent & Decor -->
                    <div class="motion-card bg-white/90 backdrop-blur-xl border border-slate-200/90 rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-amber-800 bg-amber-50 border border-amber-200 px-2.5 py-0.5 rounded-full">
                                Infrastructure Division
                            </span>
                            <span class="text-xs font-semibold text-slate-400">All-Weather Storm Safe</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1">
                            Grand Tent House & Decor
                        </h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-4">
                            Aluminum German hangar waterproof pandals, Vedic floral mandaps, fairy-light tunnels, designer stages, tower ACs, and silent DG gensets.
                        </p>
                        <div class="flex items-center justify-between text-xs pt-3 border-t border-slate-100">
                            <span class="text-slate-500 font-medium">100% In-House Inventory</span>
                            <a href="{{ route('tent-house') }}" class="font-bold text-amber-600 hover:text-amber-700">View Setups →</a>
                        </div>
                    </div>

                    <!-- Floating Office Location Pill -->
                    <div class="motion-card flex items-center justify-between bg-white/80 border border-slate-200 rounded-xl px-4 py-2.5 text-xs text-slate-600">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            <span class="font-medium">Office: 233, Rajesh Petrol Building, A N College, Boring Road, Patna</span>
                        </div>
                        <a href="https://wa.me/917717702563" target="_blank" rel="noopener noreferrer" class="font-bold text-emerald-600 hover:underline">
                            WhatsApp Us
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. TRUST METRICS STRIP -->
    <section class="motion-section py-8 border-y border-slate-200/80 bg-white/70 backdrop-blur-md">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4">
                    <p class="text-3xl sm:text-4xl font-extrabold text-slate-950 font-mono">1,200+</p>
                    <p class="text-xs uppercase tracking-wider text-amber-700 font-bold mt-1">Events Hosted</p>
                    <p class="text-[11px] text-slate-400 mt-0.5">Weddings, Receptions & Banquets</p>
                </div>
                <div class="p-4">
                    <p class="text-3xl sm:text-4xl font-extrabold text-slate-950 font-mono">15+ Years</p>
                    <p class="text-xs uppercase tracking-wider text-amber-700 font-bold mt-1">Heritage in Patna</p>
                    <p class="text-[11px] text-slate-400 mt-0.5">233, Rajesh Petrol Building, Boring Road</p>
                </div>
                <div class="p-4">
                    <p class="text-3xl sm:text-4xl font-extrabold text-slate-950 font-mono">5,000+</p>
                    <p class="text-xs uppercase tracking-wider text-amber-700 font-bold mt-1">Guest Capacity</p>
                    <p class="text-[11px] text-slate-400 mt-0.5">Scalable Large Gatherings</p>
                </div>
                <div class="p-4">
                    <p class="text-3xl sm:text-4xl font-extrabold text-slate-950 font-mono">4.8 / 5.0</p>
                    <p class="text-xs uppercase tracking-wider text-amber-700 font-bold mt-1">Justdial Rating</p>
                    <p class="text-[11px] text-slate-400 mt-0.5">Hundreds of Verified Reviews</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CORE DIVISIONS (CATERING VS TENT HOUSE) -->
    <section class="motion-section py-16 sm:py-20">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                        Turnkey Event Solutions
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950 mt-3">
                        Two Master Divisions. One Seamless Experience.
                    </h2>
                    <p class="text-slate-500 text-xs sm:text-sm mt-1">
                        No middleman markups. Patna Caterer & Tent House owns 100% of the food, decor, and structural inventory.
                    </p>
                </div>
                <a href="{{ route('gallery') }}" class="text-xs font-bold text-amber-600 hover:text-amber-700 flex items-center gap-1">
                    <span>View Event Gallery</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Catering Division Card -->
                <div class="motion-card glass-card p-8 rounded-2xl border border-slate-200/90 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold text-amber-800 bg-amber-100 px-2.5 py-1 rounded-md">Division 01: Food & Hospitality</span>
                            <span class="text-xs text-slate-400">50 to 5,000+ Guests</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-950 mb-2">Patna Catering Services</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Delight your guests with exquisite flavours crafted by certified chefs, seasoned Halwais, and Mughlai Ustads. Prepared under strict hygiene standards using 100% pure Desi Ghee.
                        </p>
                        <ul class="space-y-3 text-xs text-slate-700 font-medium mb-6">
                            <li class="flex items-start gap-2.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                                <span><strong>Champaran Ahuna Handi Mutton:</strong> Earthen-pot slow cooked on wood coal with whole spices.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                                <span><strong>Traditional Bihari Litti Chokha:</strong> Charcoal-roasted, submerged in steaming pure desi ghee.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                                <span><strong>Interactive Live Chaat Counters:</strong> Banarasi Tamatar Chaat, Kolkata Puchka, Dahi Bhalla.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                                <span><strong>Halwai Desserts & Mithai:</strong> Hot Jalebi with thick Rabdi, Gajar/Moong Dal Halwa, Matka Kulfi.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-semibold text-slate-500">Pure Veg & Non-Veg Menus</span>
                        <a href="{{ route('catering') }}" class="text-xs font-bold text-amber-600 hover:text-amber-700">Explore Catering Menus →</a>
                    </div>
                </div>

                <!-- Tent & Decor Division Card -->
                <div class="motion-card glass-card p-8 rounded-2xl border border-slate-200/90 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold text-amber-800 bg-amber-100 px-2.5 py-1 rounded-md">Division 02: Infrastructure & Decor</span>
                            <span class="text-xs text-slate-400">100% In-House Inventory</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-950 mb-2">Patna Tent House & Event Decor</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Turn open grounds, banquet lawns, and farmhouses into royal palaces. Complete structural engineering with all-weather German hangars, grand entrance gates, and atmospheric lighting.
                        </p>
                        <ul class="space-y-3 text-xs text-slate-700 font-medium mb-6">
                            <li class="flex items-start gap-2.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                                <span><strong>German Hangar Waterproof Pandal:</strong> All-weather clear-span aluminum structures up to 50,000 sq ft.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                                <span><strong>Royal Wedding Mandap Art:</strong> Vedic Lotus, Rajputana carvings, fresh floral drapes & havan altar.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                                <span><strong>Grand Entrance Arches & Tunnels:</strong> Walkthrough fairy-light tunnels, mirror-work gates, red carpet.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                                <span><strong>Climate & Generator Power:</strong> Heavy tower ACs, mist cooling fans, and sound-proof 125kVA DG sets.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-semibold text-slate-500">Zero Sub-Contracting</span>
                        <a href="{{ route('tent-house') }}" class="text-xs font-bold text-amber-600 hover:text-amber-700">Explore Tent Infrastructure →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SIGNATURE CUISINES & FOOD PREVIEW -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80 bg-white/60">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Gastronomic Excellence
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950 mt-3 mb-2">
                    Signature Cuisines Crafted for Patna Celebrations
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm">
                    Authentic spices, unadulterated oils, and fresh local ingredients. Tailored for vegetarian and non-vegetarian palates.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Cuisine 1 -->
                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-0.5 rounded">Patna Specialty</span>
                    <h3 class="text-base font-bold text-slate-900 mt-3 mb-1">Authentic Bihari Flavours</h3>
                    <p class="text-xs text-slate-500 mb-4">Slow-cooked in clay pots with whole garlic cloves and mustard oil.</p>
                    <ul class="text-xs text-slate-700 space-y-1.5 font-medium">
                        <li>• Champaran Ahuna Handi Mutton</li>
                        <li>• Coal-Roasted Desi Ghee Litti Chokha</li>
                        <li>• Bihari Mustard Fish Curry</li>
                        <li>• Dal Puri, Chana Ghooghni & Kheer</li>
                    </ul>
                </div>

                <!-- Cuisine 2 -->
                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-0.5 rounded">Royal Awadh</span>
                    <h3 class="text-base font-bold text-slate-900 mt-3 mb-1">North Indian & Mughlai</h3>
                    <p class="text-xs text-slate-500 mb-4">Overnight slow-cooked gravies, clay oven breads, and fragrant dum rice.</p>
                    <ul class="text-xs text-slate-700 space-y-1.5 font-medium">
                        <li>• Dal Makhani (White Butter)</li>
                        <li>• Shahi Paneer / Paneer Lababdar</li>
                        <li>• Lucknowi Dum Biryani with Raita</li>
                        <li>• Live Garlic Naan & Stuffed Kulchas</li>
                    </ul>
                </div>

                <!-- Cuisine 3 -->
                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-0.5 rounded">Live Stalls</span>
                    <h3 class="text-base font-bold text-slate-900 mt-3 mb-1">Live Street Food & Chaat</h3>
                    <p class="text-xs text-slate-500 mb-4">Piping hot, tangy, crisp, and fresh items prepared directly in front of guests.</p>
                    <ul class="text-xs text-slate-700 space-y-1.5 font-medium">
                        <li>• Banarasi Tamatar Chaat in Kulhad</li>
                        <li>• Kolkata Puchka (4 Signature Waters)</li>
                        <li>• Delhi Dahi Papdi & Moong Bhalla</li>
                        <li>• Tawa Aloo Tikki with Ragda</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('catering') }}" class="inline-flex items-center gap-1.5 px-6 py-2.5 bg-slate-950 text-white font-semibold text-xs rounded-full hover:bg-slate-800 transition">
                    <span>View Complete 40+ Dish Menu</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. OUR 6-STEP FLAWLESS EXECUTION PROCESS -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-14">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    How We Work
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950 mt-3 mb-2">
                    Our 6-Step Flawless Event Process
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm">
                    From initial consultation to the final guest farewell, here is how we ensure zero chaos.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-2xl font-black text-amber-500 font-mono">01</span>
                    <h3 class="text-sm font-bold text-slate-900 mt-2 mb-1">Requirement & Date Check</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        We listen to your guest count, event date, venue choice, and personal food preferences to propose an initial structure.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-2xl font-black text-amber-500 font-mono">02</span>
                    <h3 class="text-sm font-bold text-slate-900 mt-2 mb-1">Menu Tasting Session</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        For confirmed weddings, we invite you to sample our gravies, Champaran handi, breads, and sweets at our Boring Road kitchen.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-2xl font-black text-amber-500 font-mono">03</span>
                    <h3 class="text-sm font-bold text-slate-900 mt-2 mb-1">On-Site Ground Inspection</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Our structural engineers take exact measurements of your lawn or ground to design the German hangar, mandap, and buffet pathways.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-2xl font-black text-amber-500 font-mono">04</span>
                    <h3 class="text-sm font-bold text-slate-900 mt-2 mb-1">Fresh Procurement & Cooking</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Ingredients sourced on the event morning: AGMARK spices, certified desi ghee, and fresh meats/vegetables prepared under hygiene SOPs.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-2xl font-black text-amber-500 font-mono">05</span>
                    <h3 class="text-sm font-bold text-slate-900 mt-2 mb-1">3-Hour Punctual Setup</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        All tent structures, air conditioning, and buffet chaffing dishes are 100% operational 3 hours before guest arrival time.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-2xl font-black text-amber-500 font-mono">06</span>
                    <h3 class="text-sm font-bold text-slate-900 mt-2 mb-1">Uniformed Service & Cleanup</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Polite uniformed stewards serve your guests attentively. Complete sanitary disposal and ground restoration after the event.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. LIVE EVENT WORK & PHOTO GALLERY -->
    <section class="motion-section py-16 sm:py-24 border-t border-slate-200/80 bg-white/60 backdrop-blur-sm">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="max-w-2xl">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3.5 py-1 rounded-full inline-block mb-3">
                        Live Event Work Showcase
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-bold tracking-tight text-slate-950 mb-3">
                        Glimpses of Our Setups & Grand Feasts
                    </h2>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Authentic photography from grand weddings, luxury mandaps, live catering stalls, and waterproof German hangars crafted across Patna.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ route('gallery') }}" class="px-5 py-2.5 bg-slate-950 hover:bg-slate-800 text-white font-semibold text-xs rounded-full transition shadow-sm inline-flex items-center gap-2">
                        <span>Explore Full Gallery (16+ Photos)</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Featured 8 Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div onclick="openLightbox('/images/gallery/mandap-grand.jpg', 'Royal Floral Mandap Architecture', 'Grand Mandap & Decor', 'Boring Road, Patna')"
                     class="group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/mandap-grand.jpg') }}" alt="Royal Floral Mandap Architecture in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Mandap & Decor
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold drop-shadow">Royal Floral Mandap</h3>
                            <p class="text-[11px] text-amber-200 flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                <span>Boring Road, Patna</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div onclick="openLightbox('/images/gallery/buffet-spread.jpg', 'Gourmet Banquet Buffet Spread', 'Royal Catering Feast', 'Bailey Road, Patna')"
                     class="group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/buffet-spread.jpg') }}" alt="Gourmet Banquet Buffet in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Catering Buffet
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold drop-shadow">32-Dish Royal Feast</h3>
                            <p class="text-[11px] text-amber-200 flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                <span>Bailey Road, Patna</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div onclick="openLightbox('/images/gallery/live-chaat.jpg', 'Live Banarasi Chaat & Street Food Counter', 'Live Food Counters', 'Patliputra Colony, Patna')"
                     class="group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/live-chaat.jpg') }}" alt="Live Banarasi Chaat Counter in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Live Counters
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold drop-shadow">Banarasi Chaat Stall</h3>
                            <p class="text-[11px] text-amber-200 flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                <span>Patliputra Colony</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div onclick="openLightbox('/images/gallery/german-hangar.jpg', 'All-Weather German Hangar Pandal Setup', 'Tent House Infrastructure', 'Danapur Cantonment, Patna')"
                     class="group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/german-hangar.jpg') }}" alt="German Hangar Pandal in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            German Hangar
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold drop-shadow">Waterproof AC Pandal</h3>
                            <p class="text-[11px] text-amber-200 flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                <span>Danapur, Patna</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div onclick="openLightbox('/images/gallery/stage-lighting.jpg', 'Warm Fairy Illumination & Stage Decor', 'Theme Lighting', 'Kankarbagh, Patna')"
                     class="group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/stage-lighting.jpg') }}" alt="Stage Lighting and Decor in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Lighting & Stage
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold drop-shadow">Warm Ambient Stage</h3>
                            <p class="text-[11px] text-amber-200 flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                <span>Kankarbagh, Patna</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div onclick="openLightbox('/images/gallery/tandoor-station.jpg', 'Live Charcoal Tandoor & Kebabs', 'Live Food Counters', 'Saguna More, Patna')"
                     class="group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/tandoor-station.jpg') }}" alt="Live Tandoor Counter in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Live Counters
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold drop-shadow">Live Tandoor & Kebabs</h3>
                            <p class="text-[11px] text-amber-200 flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                <span>Saguna More, Patna</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div onclick="openLightbox('/images/gallery/dining-setup.jpg', 'VIP Royal Dining & Banquet Seating', 'Catering Logistics', 'Rajendra Nagar, Patna')"
                     class="group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/dining-setup.jpg') }}" alt="VIP Dining Arrangement in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Seating & Decor
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold drop-shadow">VIP Dining Lounge</h3>
                            <p class="text-[11px] text-amber-200 flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                <span>Rajendra Nagar, Patna</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div onclick="openLightbox('/images/gallery/dessert-delights.jpg', 'Artisan Indian Sweets & Royal Desserts', 'Sweets & Desserts', 'Ashiana Nagar, Patna')"
                     class="group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/dessert-delights.jpg') }}" alt="Royal Indian Desserts in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Royal Sweets
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold drop-shadow">Artisan Sweets Bar</h3>
                            <p class="text-[11px] text-amber-200 flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                <span>Ashiana Nagar, Patna</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Justdial Verified Business Link Banner -->
            <div class="mt-12 glass-card rounded-3xl p-6 sm:p-8 border border-amber-200/90 bg-gradient-to-r from-amber-50/60 via-white to-orange-50/50 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500 text-white flex items-center justify-center font-bold text-lg shadow-sm shrink-0">
                        JD
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-950">
                                Want to browse 90+ live raw photos of our setups?
                            </h3>
                            <span class="hidden md:inline-flex text-[10px] bg-emerald-100 text-emerald-800 font-bold px-2 py-0.5 rounded-full">
                                Verified DT-47WRSUKTS1G
                            </span>
                        </div>
                        <p class="text-xs text-slate-600 mt-1">
                            Browse unedited client event albums, mandap decor, chafing setups, and venue lawns on our Justdial verified business profile.
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-3 shrink-0 w-full sm:w-auto">
                    <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer"
                       class="flex-1 sm:flex-initial text-center px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white font-semibold text-xs rounded-full transition shadow-sm inline-flex items-center justify-center gap-1.5">
                        <span>Open Justdial Album</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                    <a href="{{ route('gallery') }}"
                       class="flex-1 sm:flex-initial text-center px-5 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-full transition shadow-sm">
                        View All 16 Photos →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. WHY CHOOSE US (6 PILLARS) -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Our Guarantees
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950 mt-3 mb-2">
                    Why Patna Families Trust Our Service
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm">
                    In an industry prone to delays and shortages, we maintain an uncompromising 15-year reputation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-xs font-bold text-amber-600 font-mono">01</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-1">100% In-House Inventory</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        We own our German hangars, chafing dishes, fine bone china, luxury sofa lounges, and generators. No third-party dependency.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-xs font-bold text-amber-600 font-mono">02</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-1">Pure Desi Ghee & Freshness</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        No adulterated oils or synthetic spices. We use certified AGMARK spices, verified dairy, and fresh local produce every morning.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-xs font-bold text-amber-600 font-mono">03</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-1">On-Time Execution Guarantee</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Buffets and decor are 100% operational at least 3 hours prior to guest arrival. Zero last-minute scrambling or embarrassment.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-xs font-bold text-amber-600 font-mono">04</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-1">Master Halwais & Ustads</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Traditional Bihari halwais for sweets & litti, Awadhi ustads for biryani and rich gravies, and Chinese wok masters for live counters.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-xs font-bold text-amber-600 font-mono">05</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-1">Uniformed & Polite Staff</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        All service personnel wear clean uniforms, hairnets, and gloves. Attentive table hospitality with regular plate clearance.
                    </p>
                </div>

                <div class="motion-card glass-card p-6 rounded-2xl border border-slate-200">
                    <span class="text-xs font-bold text-amber-600 font-mono">06</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-1">Patna-Wide Rapid Support</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Dedicated logistics across Boring Road, Bailey Road, Kankarbagh, Danapur, Patliputra, Ashiana, Bihta, and Hajipur.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. TESTIMONIALS -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80 bg-white/50 backdrop-blur-sm">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
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

    <!-- 10. FREQUENTLY ASKED QUESTIONS -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80">
        <div class="max-w-5xl 2xl:max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Clear Answers
                </span>
                <h3 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950 mt-3 mb-2">
                    Frequently Asked Questions
                </h3>
            </div>

            <div class="space-y-3">
                <details class="glass-card p-5 rounded-2xl border border-slate-200 [&_summary::-webkit-details-marker]:hidden open:border-amber-400 transition">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-xs sm:text-sm text-slate-900">
                        <span>Do you offer food tasting sessions before booking a wedding?</span>
                        <span class="text-amber-600 group-open:rotate-180 transition-transform">▼</span>
                    </summary>
                    <p class="text-xs text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-2.5">
                        Yes! For large wedding bookings (250+ guests), we organize a personalized tasting session at our kitchen near Boring Road so your family can sample the gravies, breads, and sweets before finalizing the menu.
                    </p>
                </details>

                <details class="glass-card p-5 rounded-2xl border border-slate-200 [&_summary::-webkit-details-marker]:hidden open:border-amber-400 transition">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-xs sm:text-sm text-slate-900">
                        <span>Can we book only the Tent House or only the Catering service?</span>
                        <span class="text-amber-600 group-open:rotate-180 transition-transform">▼</span>
                    </summary>
                    <p class="text-xs text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-2.5">
                        Yes, absolutely. You can book either our catering services independently or our tent house, German hangar, and lighting setups independently.
                    </p>
                </details>

                <details class="glass-card p-5 rounded-2xl border border-slate-200 [&_summary::-webkit-details-marker]:hidden open:border-amber-400 transition">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-xs sm:text-sm text-slate-900">
                        <span>How do your German hangars withstand heavy rain or wind in open grounds?</span>
                        <span class="text-amber-600 group-open:rotate-180 transition-transform">▼</span>
                    </summary>
                    <p class="text-xs text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-2.5">
                        Our German hangars use heavy-duty aluminum trusses and fire-retardant, 100% waterproof heavy PVC membrane fabric with deep water drainage channels to keep guests and food totally dry.
                    </p>
                </details>

                <details class="glass-card p-5 rounded-2xl border border-slate-200 [&_summary::-webkit-details-marker]:hidden open:border-amber-400 transition">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-xs sm:text-sm text-slate-900">
                        <span>What is your booking advance and payment schedule?</span>
                        <span class="text-amber-600 group-open:rotate-180 transition-transform">▼</span>
                    </summary>
                    <p class="text-xs text-slate-600 mt-3 leading-relaxed border-t border-slate-100 pt-2.5">
                        A nominal booking advance reserves your date and blocks equipment. The remaining balance is structured in clear milestones leading up to the celebration date, with full receipts provided.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- 11. INQUIRY & BOOKING FORM SECTION -->
    <section id="inquiry-section" class="motion-section py-16 sm:py-20 border-t border-slate-200/80 bg-white/60">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left: Contact Details Card -->
                <div class="lg:col-span-5 glass-card p-8 rounded-3xl border border-slate-200/90 space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                            Get In Touch
                        </span>
                        <h3 class="text-xl font-bold text-slate-950 mt-3 mb-1">
                            Patna Caterer & Tent House
                        </h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Visit our Boring Road kitchen or call our senior event planners directly for fast quotes.
                        </p>
                    </div>

                    <div class="space-y-4 text-xs text-slate-700">
                        <div class="flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                            <div>
                                <strong class="block text-slate-900">Office & Commissary Kitchen:</strong>
                                <span>233, Rajesh Petrol Building, An Collage, A N College, Boring Road, Patna-800001, Bihar</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 mt-1.5 shrink-0"></span>
                            <div>
                                <strong class="block text-slate-900">Direct Phone:</strong>
                                <a href="tel:7717702563" class="text-amber-700 font-bold hover:underline text-sm">+91 7717702563</a>
                                <span class="block text-[11px] text-slate-400">Available 8:00 AM - 10:30 PM (All 7 Days)</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-blue-500 mt-1.5 shrink-0"></span>
                            <div>
                                <strong class="block text-slate-900">Justdial Verified:</strong>
                                <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-amber-600 underline">
                                    Rating 4.8 / 5.0 (DT-47WRSUKTS1G)
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20want%20to%20discuss%20an%20event%20booking"
                           target="_blank" rel="noopener noreferrer"
                           class="w-full py-2.5 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs rounded-xl transition flex items-center justify-center gap-2 shadow-xs">
                            <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                            <span>Chat on WhatsApp Instantly</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Interactive Booking Form -->
                <div class="lg:col-span-7 glass-card p-8 rounded-3xl border border-slate-200/90 shadow-sm">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                        Fast Quote
                    </span>
                    <h3 class="text-xl font-bold text-slate-950 mt-3 mb-1">
                        Send Your Requirement
                    </h3>
                    <p class="text-xs text-slate-500 mb-6">
                        Fill in your event details. We will calculate estimated pricing and contact you promptly.
                    </p>

                    @if (session('success'))
                        <div class="mb-5 p-4 bg-emerald-50 border border-emerald-300 text-emerald-900 rounded-xl text-xs">
                            <p class="font-bold mb-1">✓ {{ session('success') }}</p>
                            @if (session('wa_url'))
                                <a href="{{ session('wa_url') }}" target="_blank" rel="noopener noreferrer" class="font-bold underline text-emerald-700 mt-1 inline-block">
                                    Forward this directly on WhatsApp now →
                                </a>
                            @endif
                        </div>
                    @endif

                    <form id="home-inquiry-form" action="{{ route('inquiry.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="home-name" class="block text-xs font-bold text-slate-700 mb-1">Your Name *</label>
                                <input type="text" id="home-name" name="name" required value="{{ old('name') }}" placeholder="e.g. Himanshu Kumar"
                                       class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">
                            </div>
                            <div>
                                <label for="home-phone" class="block text-xs font-bold text-slate-700 mb-1">Phone Number *</label>
                                <input type="tel" id="home-phone" name="phone" required value="{{ old('phone') }}" placeholder="e.g. 7717702563"
                                       class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label for="home-event_type" class="block text-xs font-bold text-slate-700 mb-1">Event Type</label>
                                <select id="home-event_type" name="event_type" class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">
                                    <option value="Wedding">Wedding</option>
                                    <option value="Reception">Reception</option>
                                    <option value="Ring Ceremony / Tilak">Ring Ceremony / Tilak</option>
                                    <option value="Birthday Party">Birthday Party</option>
                                    <option value="Corporate Event">Corporate Event</option>
                                    <option value="Puja / Bhoj">Puja / Bhoj</option>
                                </select>
                            </div>
                            <div>
                                <label for="home-event_date" class="block text-xs font-bold text-slate-700 mb-1">Tentative Date</label>
                                <input type="date" id="home-event_date" name="event_date" value="{{ old('event_date') }}"
                                       class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">
                            </div>
                            <div>
                                <label for="home-guests_count" class="block text-xs font-bold text-slate-700 mb-1">Guests Count</label>
                                <input type="number" id="home-guests_count" name="guests_count" value="{{ old('guests_count', 300) }}"
                                       class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label for="home-message" class="block text-xs font-bold text-slate-700 mb-1">Venue Location or Notes</label>
                            <textarea id="home-message" name="message" rows="2" placeholder="e.g. Near Bailey Road lawn, Champaran Handi required..."
                                      class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">{{ old('message') }}</textarea>
                        </div>

                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <button type="submit" id="home-submit-btn"
                                    class="w-full sm:w-auto px-7 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition shadow-md shadow-emerald-600/20 inline-flex items-center justify-center gap-2 cursor-pointer">
                                <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                                <span>Submit Inquiry on WhatsApp (7717702563)</span>
                            </button>
                            <span class="text-xs text-slate-500">Directly opens WhatsApp to <strong>7717702563</strong></span>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Lightbox Modal for Photo Inspection -->
    <div id="image-lightbox" class="fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-md hidden items-center justify-center p-4">
        <div class="relative max-w-4xl w-full bg-white rounded-3xl overflow-hidden shadow-2xl border border-slate-200">
            <button onclick="closeLightbox()" type="button"
                    class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-white/90 text-slate-800 hover:bg-slate-100 flex items-center justify-center shadow transition"
                    aria-label="Close modal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="md:col-span-2 bg-slate-950 flex items-center justify-center max-h-[70vh]">
                    <img id="lightbox-img" src="" alt="Enlarged setup view" class="max-h-[70vh] w-full object-contain">
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between bg-white">
                    <div>
                        <span id="lightbox-category" class="text-[10px] font-bold uppercase tracking-wider bg-amber-100 text-amber-900 px-2.5 py-1 rounded-md inline-block mb-3">
                            Category
                        </span>
                        <h3 id="lightbox-title" class="text-xl font-bold text-slate-950 mb-2 leading-snug">
                            Title
                        </h3>
                        <p id="lightbox-location" class="text-xs text-slate-500 flex items-center gap-1.5 mb-4">
                            <svg class="w-3.5 h-3.5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            <span>Location</span>
                        </p>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Crafted by the in-house team at Patna Caterer & Patna Tent House. All structural frames, linen, cutlery, and culinary stations are owned and maintained by us.
                        </p>
                    </div>

                    <div class="pt-6 border-t border-slate-100 space-y-2.5">
                        <a id="lightbox-whatsapp" href="https://wa.me/917717702563" target="_blank" rel="noopener noreferrer"
                           class="w-full py-2.5 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs rounded-xl flex items-center justify-center gap-2 transition shadow-xs">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                            <span>Inquire for this Setup</span>
                        </a>
                        <button onclick="closeLightbox()" type="button"
                                class="w-full py-2 px-4 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs rounded-xl transition">
                            Back to Gallery
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function openLightbox(imgSrc, title, category, location) {
            const modal = document.getElementById('image-lightbox');
            if (!modal) return;
            document.getElementById('lightbox-img').src = imgSrc;
            document.getElementById('lightbox-title').innerText = title;
            document.getElementById('lightbox-category').innerText = category;
            document.getElementById('lightbox-location').querySelector('span').innerText = location;
            
            const waText = encodeURIComponent("Namaste Patna Caterer,\nI loved this setup from your gallery:\n" + title + " (" + category + " at " + location + ").\nPlease share availability and quote for my upcoming event.");
            document.getElementById('lightbox-whatsapp').href = "https://wa.me/917717702563?text=" + waText;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';

            if (window.gsap) {
                gsap.fromTo(modal.firstElementChild, 
                    { scale: 0.92, opacity: 0, y: 20 },
                    { scale: 1, opacity: 1, y: 0, duration: 0.35, ease: "power3.out" }
                );
            }
        }

        function closeLightbox() {
            const modal = document.getElementById('image-lightbox');
            if (!modal) return;
            if (window.gsap) {
                gsap.to(modal.firstElementChild, {
                    scale: 0.94,
                    opacity: 0,
                    y: 10,
                    duration: 0.2,
                    ease: "power2.in",
                    onComplete: () => {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                        document.body.style.overflow = 'auto';
                    }
                });
            } else {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }
        }

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeLightbox();
        });

        // Home Inquiry Form WhatsApp Handler
        const homeForm = document.getElementById('home-inquiry-form');
        const homeBtn = document.getElementById('home-submit-btn');
        if (homeForm && homeBtn) {
            homeForm.addEventListener('submit', function (e) {
                if (homeBtn.disabled) return;
                const name = document.getElementById('home-name').value.trim();
                const phone = document.getElementById('home-phone').value.trim();
                if (!name || !phone) return;

                e.preventDefault();
                homeBtn.innerHTML = `
                    <svg class="animate-spin w-4 h-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span>Connecting to WhatsApp (7717702563)...</span>
                `;
                homeBtn.disabled = true;

                fetch(homeForm.action, {
                    method: 'POST',
                    body: new FormData(homeForm),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data && data.wa_url) {
                        window.location.href = data.wa_url;
                    } else {
                        homeForm.submit();
                    }
                })
                .catch(() => {
                    homeForm.submit();
                });
            });
        }
    </script>
    @endpush
@endsection
