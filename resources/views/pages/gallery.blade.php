@extends('layouts.app')

@section('title', 'Live Event Gallery & Work Portfolio | Patna Caterer & Patna Tent House')
@section('meta_description', 'Explore real photographs of our wedding catering buffets, luxury floral mandaps, German hangar AC pandals, and live food counters across Boring Road, Bailey Road, and Patna. Call 7717702563.')

@section('content')
    <!-- Gallery Hero Section -->
    <section class="pt-12 pb-14 sm:pt-16 sm:pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                15+ Years Event Legacy in Patna
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-950 tracking-tight mb-4">
                Live Event & Work Gallery
            </h1>
            <p class="text-sm sm:text-base text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Explore real photography of our grand wedding mandaps, lavish catering buffets, live chaat stalls, and waterproof German hangars crafted across Patna.
            </p>

            <!-- Justdial Verification Badge -->
            <div class="mt-6 inline-flex flex-wrap items-center justify-center gap-3 p-2 bg-white/80 backdrop-blur-md rounded-2xl border border-slate-200 shadow-xs">
                <span class="text-xs text-slate-600 flex items-center gap-1.5 px-3 py-1">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span>Justdial Verified Business (DT-47WRSUKTS1G)</span>
                </span>
                <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer"
                   class="px-3.5 py-1.5 bg-amber-500 hover:bg-amber-600 text-white font-semibold text-xs rounded-xl transition inline-flex items-center gap-1.5">
                    <span>View 90+ Photos on Justdial</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Filter Bar & Grid -->
    <section class="pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter Tabs -->
            <div class="flex flex-wrap items-center justify-center gap-2 mb-12" id="gallery-filters">
                <button type="button" onclick="filterGallery('all', this)"
                        class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-slate-950 text-white transition shadow-sm">
                    All Setups (16)
                </button>
                <button type="button" onclick="filterGallery('mandap', this)"
                        class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 transition">
                    Mandap & Decor (3)
                </button>
                <button type="button" onclick="filterGallery('buffet', this)"
                        class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 transition">
                    Catering Buffets (5)
                </button>
                <button type="button" onclick="filterGallery('live', this)"
                        class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 transition">
                    Live Counters (2)
                </button>
                <button type="button" onclick="filterGallery('hangar', this)"
                        class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 transition">
                    German Hangar & Lighting (4)
                </button>
                <button type="button" onclick="filterGallery('sweets', this)"
                        class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 transition">
                    Sweets & Drinks (2)
                </button>
            </div>

            <!-- Photos Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="gallery-container">
                
                <!-- 1: Mandap Grand -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="mandap"
                     onclick="openLightbox('/images/gallery/mandap-grand.jpg', 'Royal Floral Mandap Architecture', 'Mandap & Decor', 'Boring Road, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/mandap-grand.jpg') }}" alt="Royal Floral Mandap in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Mandap & Decor
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Royal Floral Mandap</h3>
                            <p class="text-[11px] text-amber-200">Boring Road, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 2: Buffet Spread -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="buffet"
                     onclick="openLightbox('/images/gallery/buffet-spread.jpg', 'Gourmet 32-Course Wedding Buffet', 'Catering Buffets', 'Bailey Road, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/buffet-spread.jpg') }}" alt="Gourmet Wedding Buffet in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Catering Buffets
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">32-Course Wedding Buffet</h3>
                            <p class="text-[11px] text-amber-200">Bailey Road, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 3: Live Chaat -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="live"
                     onclick="openLightbox('/images/gallery/live-chaat.jpg', 'Live Banarasi Chaat & Golgappa Stall', 'Live Counters', 'Patliputra Colony, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/live-chaat.jpg') }}" alt="Live Banarasi Chaat in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Live Counters
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Banarasi Chaat Stall</h3>
                            <p class="text-[11px] text-amber-200">Patliputra Colony, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 4: German Hangar -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="hangar"
                     onclick="openLightbox('/images/gallery/german-hangar.jpg', 'Waterproof German Hangar AC Structure', 'German Hangar & Lighting', 'Danapur Cantonment, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/german-hangar.jpg') }}" alt="Waterproof German Hangar Pandal in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            German Hangar
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Waterproof AC Hangar</h3>
                            <p class="text-[11px] text-amber-200">Danapur Cantonment, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 5: Mandap Floral -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="mandap"
                     onclick="openLightbox('/images/gallery/mandap-floral.jpg', 'Traditional Marigold & Jasmine Mandap', 'Mandap & Decor', 'Rajendra Nagar, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/mandap-floral.jpg') }}" alt="Traditional Marigold Mandap in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Mandap & Decor
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Vedic Floral Mandap</h3>
                            <p class="text-[11px] text-amber-200">Rajendra Nagar, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 6: Tandoor Station -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="live"
                     onclick="openLightbox('/images/gallery/tandoor-station.jpg', 'Live Charcoal Tandoor & Fresh Naan Counter', 'Live Counters', 'Saguna More, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/tandoor-station.jpg') }}" alt="Live Charcoal Tandoor in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Live Counters
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Live Tandoor & Breads</h3>
                            <p class="text-[11px] text-amber-200">Saguna More, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 7: Dining Setup -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="buffet"
                     onclick="openLightbox('/images/gallery/dining-setup.jpg', 'VIP Royal Banquet Table Setup', 'Catering Buffets', 'Bailey Road, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/dining-setup.jpg') }}" alt="Royal Banquet Table in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Catering Buffets
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">VIP Dining Setup</h3>
                            <p class="text-[11px] text-amber-200">Bailey Road, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 8: Haldi Decor -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="mandap"
                     onclick="openLightbox('/images/gallery/haldi-decor.jpg', 'Yellow Theme Haldi & Mehendi Stage', 'Mandap & Decor', 'Kankarbagh, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/haldi-decor.jpg') }}" alt="Haldi and Mehendi Decor in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Mandap & Decor
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Haldi & Mehendi Stage</h3>
                            <p class="text-[11px] text-amber-200">Kankarbagh, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 9: Stage Lighting -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="hangar"
                     onclick="openLightbox('/images/gallery/stage-lighting.jpg', 'Warm Fairy Illumination & Stage Decor', 'German Hangar & Lighting', 'Boring Road, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/stage-lighting.jpg') }}" alt="Stage Lighting in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Lighting & Decor
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Fairy Illumination Stage</h3>
                            <p class="text-[11px] text-amber-200">Boring Road, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 10: Biryani Curry -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="buffet"
                     onclick="openLightbox('/images/gallery/biryani-curry.jpg', 'Dum Biryani & Royal Shahi Gravies', 'Catering Buffets', 'Bihta, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/biryani-curry.jpg') }}" alt="Dum Biryani Counter in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Catering Buffets
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Awadhi Dum Biryani Handi</h3>
                            <p class="text-[11px] text-amber-200">Bihta, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 11: Lawn Ambience -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="hangar"
                     onclick="openLightbox('/images/gallery/lawn-ambience.jpg', 'Open Lawn Warm Chandelier Lighting', 'German Hangar & Lighting', 'Ashiana Nagar, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/lawn-ambience.jpg') }}" alt="Open Lawn Lighting in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Lawn Lighting
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Open Lawn Chandeliers</h3>
                            <p class="text-[11px] text-amber-200">Ashiana Nagar, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 12: Traditional Feast -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="buffet"
                     onclick="openLightbox('/images/gallery/traditional-feast.jpg', 'Authentic Bihari Champaran Handi & Dal Tadka', 'Catering Buffets', 'Boring Road, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/traditional-feast.jpg') }}" alt="Bihari Traditional Feast in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Catering Buffets
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Champaran Handi Counter</h3>
                            <p class="text-[11px] text-amber-200">Boring Road, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 13: Fine Dining -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="buffet"
                     onclick="openLightbox('/images/gallery/fine-dining.jpg', 'Fine Bone China Buffet Service', 'Catering Buffets', 'Patliputra, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/fine-dining.jpg') }}" alt="Bone China Buffet Service in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Catering Buffets
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Bone China Buffet Setup</h3>
                            <p class="text-[11px] text-amber-200">Patliputra, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 14: Lounge Stage -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="hangar"
                     onclick="openLightbox('/images/gallery/lounge-stage.jpg', 'Luxury Sofa Lounge & Reception Stage', 'German Hangar & Lighting', 'Bailey Road, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/lounge-stage.jpg') }}" alt="Reception Stage in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Lounge & Stage
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Reception Stage & Lounge</h3>
                            <p class="text-[11px] text-amber-200">Bailey Road, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 15: Dessert Delights -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="sweets"
                     onclick="openLightbox('/images/gallery/dessert-delights.jpg', 'Artisan Indian Sweets & Royal Dessert Counter', 'Sweets & Drinks', 'Danapur, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/dessert-delights.jpg') }}" alt="Indian Sweets in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Sweets & Drinks
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Royal Dessert Spread</h3>
                            <p class="text-[11px] text-amber-200">Danapur, Patna</p>
                        </div>
                    </div>
                </div>

                <!-- 16: Welcome Mocktails -->
                <div class="gallery-item group motion-card glass-card rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all cursor-pointer"
                     data-category="sweets"
                     onclick="openLightbox('/images/gallery/welcome-mocktails.jpg', 'Refreshing Welcome Mocktails & Fruit Bar', 'Sweets & Drinks', 'Boring Road, Patna')">
                    <div class="relative aspect-4/3 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/gallery/welcome-mocktails.jpg') }}" alt="Welcome Drinks in Patna"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-slate-900 px-2.5 py-1 rounded-md">
                            Sweets & Drinks
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <h3 class="text-sm font-bold">Welcome Mocktail Bar</h3>
                            <p class="text-[11px] text-amber-200">Boring Road, Patna</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Justdial Full Gallery Card -->
            <div class="mt-16 glass-card rounded-3xl p-8 sm:p-10 border border-slate-200 bg-white shadow-sm flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-2xl">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                        Official Justdial Listing
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-950 mt-3 mb-2">
                        Looking for 90+ More Live Photos & Customer Reviews?
                    </h2>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        We update our Justdial business page with daily photographs from ongoing weddings, haldi ceremonies, receptions, and corporate banquets across Patna.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 shrink-0 w-full sm:w-auto">
                    <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer"
                       class="px-6 py-3.5 bg-amber-500 hover:bg-amber-600 text-white font-semibold text-xs rounded-full transition shadow-sm text-center inline-flex items-center justify-center gap-2">
                        <span>Open Justdial Album</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="px-6 py-3.5 bg-slate-950 hover:bg-slate-800 text-white font-semibold text-xs rounded-full transition shadow-sm text-center">
                        Book a Consultation
                    </a>
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
        function filterGallery(category, btnElement) {
            document.querySelectorAll('.gallery-filter-btn').forEach(btn => {
                btn.classList.remove('bg-slate-950', 'text-white');
                btn.classList.add('bg-white', 'text-slate-700', 'hover:bg-slate-100', 'border', 'border-slate-200');
            });
            btnElement.classList.add('bg-slate-950', 'text-white');
            btnElement.classList.remove('bg-white', 'text-slate-700', 'hover:bg-slate-100', 'border', 'border-slate-200');

            if (typeof window.gsapFilterTransition === 'function') {
                window.gsapFilterTransition('#gallery-container', '.gallery-item', function(item) {
                    return category === 'all' || item.getAttribute('data-category') === category;
                });
            } else {
                const items = document.querySelectorAll('.gallery-item');
                items.forEach(item => {
                    item.style.display = (category === 'all' || item.getAttribute('data-category') === category) ? 'block' : 'none';
                });
            }
        }

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

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeLightbox();
        });
    </script>
    @endpush
@endsection
