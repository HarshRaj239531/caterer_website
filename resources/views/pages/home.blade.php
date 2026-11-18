@extends('layouts.app')

@section('title', 'Patna Caterer & Patna Tent House | Premier Catering & Event Infrastructure in Patna')
@section('meta_description', 'Patna Caterer & Patna Tent House - Boring Road, Patna. Premium wedding catering, Champaran Ahuna Handi, live chaat, German hangar waterproof tents, Vedic mandaps, and corporate banquets. Call 7717702563.')

@section('content')
    <!-- 1. HERO SECTION (High-End Split Layout with Visual Showcase & Framer Motion) -->
    <section class="relative pt-6 pb-16 sm:pt-12 sm:pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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
                        <span>Near A.N. College, Boring Road</span>
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
                            <span class="font-medium">Office: Boring Road, Near A.N. College, Patna</span>
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
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4">
                    <p class="text-3xl sm:text-4xl font-extrabold text-slate-950 font-mono">1,200+</p>
                    <p class="text-xs uppercase tracking-wider text-amber-700 font-bold mt-1">Events Hosted</p>
                    <p class="text-[11px] text-slate-400 mt-0.5">Weddings, Receptions & Banquets</p>
                </div>
                <div class="p-4">
                    <p class="text-3xl sm:text-4xl font-extrabold text-slate-950 font-mono">15+ Years</p>
                    <p class="text-xs uppercase tracking-wider text-amber-700 font-bold mt-1">Heritage in Patna</p>
                    <p class="text-[11px] text-slate-400 mt-0.5">Near A.N. College, Boring Road</p>
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
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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
                <a href="{{ route('packages') }}" class="text-xs font-bold text-amber-600 hover:text-amber-700 flex items-center gap-1">
                    <span>View All Packages</span>
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
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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

    <!-- 6. CURATED PACKAGES STRIP -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80 bg-white/50 backdrop-blur-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Transparent Options
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950 mt-3 mb-2">
                    Curated Event Packages
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm">
                    Transparent per-plate estimates tailored to your guest count and chosen specifications.
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
                        View Details →
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
                        View Details →
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
                        View Details →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. INTERACTIVE BUDGET ESTIMATOR -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80 bg-white/40">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Instant Planning Tool
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-950 mt-3 mb-2">
                    Live Event Cost Calculator
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm">
                    Move the sliders to project approximate budget estimates for your Patna celebration.
                </p>
            </div>

            <div class="glass-card p-6 sm:p-8 rounded-3xl border border-slate-200 shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- Controls -->
                    <div class="space-y-5">
                        <!-- Guests -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label for="calc-guests" class="text-xs font-bold uppercase tracking-wider text-slate-800">
                                    Number of Guests:
                                </label>
                                <span id="guest-count-label" class="text-sm font-black font-mono bg-amber-500 text-white px-2.5 py-0.5 rounded-lg">
                                    350 Guests
                                </span>
                            </div>
                            <input id="calc-guests" type="range" min="50" max="1500" step="25" value="350"
                                   class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-amber-500">
                            <div class="flex justify-between text-[11px] text-slate-400 mt-1">
                                <span>50 Guests</span>
                                <span>750 Guests</span>
                                <span>1500+ Guests</span>
                            </div>
                        </div>

                        <!-- Event Type -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-2">
                                Event Type:
                            </label>
                            <div class="grid grid-cols-3 gap-2">
                                <button type="button" onclick="setEventType('Wedding', 1.2, this)" class="event-btn border-2 border-amber-500 bg-amber-50 text-amber-900 py-2 px-2 text-xs font-bold uppercase rounded-lg text-center">
                                    Wedding
                                </button>
                                <button type="button" onclick="setEventType('Reception', 1.0, this)" class="event-btn border border-slate-300 bg-white text-slate-800 py-2 px-2 text-xs font-bold uppercase rounded-lg text-center hover:border-amber-400">
                                    Reception
                                </button>
                                <button type="button" onclick="setEventType('Birthday', 0.8, this)" class="event-btn border border-slate-300 bg-white text-slate-800 py-2 px-2 text-xs font-bold uppercase rounded-lg text-center hover:border-amber-400">
                                    Birthday/Puja
                                </button>
                            </div>
                        </div>

                        <!-- Food Preference -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-2">
                                Food Preference:
                            </label>
                            <div class="grid grid-cols-2 gap-3">
                                <button type="button" onclick="setFoodType('Pure Veg', 600, this)" class="food-btn border border-slate-300 bg-white text-slate-800 py-2 px-3 text-xs font-bold uppercase rounded-lg text-center hover:border-amber-400">
                                    Pure Vegetarian
                                </button>
                                <button type="button" onclick="setFoodType('Veg & Non-Veg', 850, this)" class="food-btn border-2 border-amber-500 bg-amber-50 text-amber-900 py-2 px-3 text-xs font-bold uppercase rounded-lg text-center">
                                    Veg & Non-Veg
                                </button>
                            </div>
                        </div>

                        <!-- Tent Option -->
                        <div>
                            <label class="flex items-center gap-3 p-3 border border-slate-200 bg-white rounded-xl cursor-pointer hover:border-amber-400 transition">
                                <input type="checkbox" id="calc-tent" checked onchange="calculateEstimate()" class="w-4 h-4 accent-amber-500 rounded">
                                <span class="text-xs font-semibold text-slate-800">Include Complete Tent House, Mandap & Stage Decor</span>
                            </label>
                        </div>
                    </div>

                    <!-- Output Card -->
                    <div class="bg-slate-950 text-white p-7 rounded-2xl shadow-xl flex flex-col justify-between h-full">
                        <div>
                            <span class="inline-block text-[10px] font-bold uppercase tracking-widest text-amber-400 border border-slate-800 px-2.5 py-0.5 rounded-full mb-3">
                                Projected Budget Range
                            </span>
                            <div id="estimated-total" class="text-3xl font-extrabold text-white font-mono my-1">
                                ₹3,75,000 - ₹4,40,000
                            </div>
                            <div id="estimated-per-plate" class="text-xs text-amber-300 font-mono mb-4 pb-4 border-b border-slate-800">
                                Approx ₹950 - ₹1,150 / guest (All inclusive)
                            </div>

                            <div class="space-y-1.5 text-xs text-slate-300 mb-5">
                                <div class="flex justify-between">
                                    <span>Food Spread:</span>
                                    <span id="summary-food" class="text-white font-semibold">Veg & Non-Veg Multi-Cuisine</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Guest Count:</span>
                                    <span id="summary-guests" class="text-white font-semibold">350 Guests</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Infrastructure:</span>
                                    <span id="summary-tent" class="text-white font-semibold">Mandap, Stage & Lighting Included</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a id="calc-whatsapp-btn" href="#" target="_blank" rel="noopener noreferrer"
                               class="w-full py-3 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition flex items-center justify-center gap-2 shadow">
                                <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                                <span>Forward Estimate to WhatsApp</span>
                            </a>
                            <p class="text-[10px] text-slate-400 mt-2 text-center">Custom dishes and lawn area will finalize final quotation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. WHY CHOOSE US (6 PILLARS) -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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

    <!-- 10. FREQUENTLY ASKED QUESTIONS -->
    <section class="motion-section py-16 sm:py-20 border-t border-slate-200/80">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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
                                <span>Near A.N. College, Boring Road, Patna, Bihar - 800013</span>
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

                    <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-4">
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
                                <select id="home-event_type" name="event_type" class="w-full px-3 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">
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
                                       class="w-full px-3 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">
                            </div>
                            <div>
                                <label for="home-guests_count" class="block text-xs font-bold text-slate-700 mb-1">Guests Count</label>
                                <input type="number" id="home-guests_count" name="guests_count" value="{{ old('guests_count', 300) }}"
                                       class="w-full px-3 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label for="home-message" class="block text-xs font-bold text-slate-700 mb-1">Venue Location or Notes</label>
                            <textarea id="home-message" name="message" rows="2" placeholder="e.g. Near Bailey Road lawn, Champaran Handi required..."
                                      class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-xl focus:border-amber-500 focus:outline-none">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="w-full sm:w-auto px-7 py-3 bg-slate-950 hover:bg-slate-800 text-white font-semibold text-xs rounded-full transition shadow-xs">
                            Submit Inquiry
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        let currentEventType = 'Wedding';
        let eventMultiplier = 1.2;
        let currentFoodType = 'Veg & Non-Veg';
        let basePlateCost = 850;

        function setEventType(type, multiplier, btnElement) {
            currentEventType = type;
            eventMultiplier = multiplier;

            document.querySelectorAll('.event-btn').forEach(b => {
                b.classList.remove('border-2', 'border-amber-500', 'bg-amber-50', 'text-amber-900');
                b.classList.add('border', 'border-slate-300', 'bg-white', 'text-slate-800');
            });
            btnElement.classList.remove('border', 'border-slate-300', 'bg-white', 'text-slate-800');
            btnElement.classList.add('border-2', 'border-amber-500', 'bg-amber-50', 'text-amber-900');

            calculateEstimate();
        }

        function setFoodType(type, plateCost, btnElement) {
            currentFoodType = type;
            basePlateCost = plateCost;

            document.querySelectorAll('.food-btn').forEach(b => {
                b.classList.remove('border-2', 'border-amber-500', 'bg-amber-50', 'text-amber-900');
                b.classList.add('border', 'border-slate-300', 'bg-white', 'text-slate-800');
            });
            btnElement.classList.remove('border', 'border-slate-300', 'bg-white', 'text-slate-800');
            btnElement.classList.add('border-2', 'border-amber-500', 'bg-amber-50', 'text-amber-900');

            calculateEstimate();
        }

        function calculateEstimate() {
            const guestSlider = document.getElementById('calc-guests');
            if (!guestSlider) return;
            const guests = parseInt(guestSlider.value);
            const includeTent = document.getElementById('calc-tent').checked;

            document.getElementById('guest-count-label').innerText = guests + ' Guests';
            document.getElementById('summary-guests').innerText = guests + ' Guests';
            document.getElementById('summary-food').innerText = currentFoodType;
            document.getElementById('summary-tent').innerText = includeTent ? 'Mandap, Stage & Lighting Included' : 'Food Catering Only';

            const minFoodPlate = Math.round(basePlateCost * (eventMultiplier > 1 ? 1.05 : 0.95));
            const maxFoodPlate = Math.round(minFoodPlate * 1.2);

            let minTotal = guests * minFoodPlate;
            let maxTotal = guests * maxFoodPlate;

            if (includeTent) {
                const tentCostMin = Math.max(45000, guests * 180);
                const tentCostMax = Math.max(70000, guests * 240);
                minTotal += tentCostMin;
                maxTotal += tentCostMax;
            }

            const perPlateMin = Math.round(minTotal / guests);
            const perPlateMax = Math.round(maxTotal / guests);

            const formatINR = (num) => '₹' + num.toLocaleString('en-IN');

            document.getElementById('estimated-total').innerText = formatINR(minTotal) + ' - ' + formatINR(maxTotal);
            document.getElementById('estimated-per-plate').innerText = 'Approx ' + formatINR(perPlateMin) + ' - ' + formatINR(perPlateMax) + ' / guest (' + (includeTent ? 'Food + Tent Decor' : 'Catering Only') + ')';

            const waText = encodeURIComponent(
                "Namaste Patna Caterer & Tent House,\n" +
                "I calculated an estimate on your website:\n" +
                "• Event: " + currentEventType + "\n" +
                "• Guests: " + guests + "\n" +
                "• Food Choice: " + currentFoodType + "\n" +
                "• Tent & Decor Included: " + (includeTent ? "Yes" : "No") + "\n" +
                "• Estimated Range: " + formatINR(minTotal) + " - " + formatINR(maxTotal) + "\n\n" +
                "Please share your detailed dish options and confirm date availability!"
            );
            document.getElementById('calc-whatsapp-btn').href = "https://wa.me/917717702563?text=" + waText;
        }

        const guestSlider = document.getElementById('calc-guests');
        if (guestSlider) {
            guestSlider.addEventListener('input', calculateEstimate);
            calculateEstimate();
        }
    </script>
    @endpush
@endsection
