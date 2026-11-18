@extends('layouts.app')

@section('title', 'Tent House & Mandap Decor | Patna Caterer & Patna Tent House')
@section('meta_description', 'Patna Tent House - Luxury German hangar waterproof tents, Vedic mandap art, grand entrance gates, LED stages, truss lighting & DG sets in Patna. Call 7717702563.')

@section('content')
    <!-- Tent House Header -->
    <section class="pt-12 pb-16 sm:pt-16 sm:pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                100% In-House Structural Inventory
            </span>
            <h1 class="text-4xl sm:text-6xl font-black text-slate-950 uppercase tracking-tight mb-4">
                Patna Tent House & Event Decor
            </h1>
            <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                We transform empty grounds, banquet lawns, and farmhouses across Patna into magnificent palaces. Engineered for all weather conditions with heavy-duty German hangars and royal aesthetics.
            </p>
        </div>
    </section>

    <!-- Capabilities Grid -->
    <section class="pb-20">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- 01: German Hangar -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-amber-100 text-amber-900 flex items-center justify-center font-black text-lg rounded-xl mb-6">
                            01
                        </div>
                        <h3 class="text-xl font-black uppercase text-slate-950 mb-3">German Hangar Waterproof Tents</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            All-weather clear-span aluminum structures with zero center pillar obstructions. 100% waterproof heavy PVC fabric ensuring complete protection from rain, wind, and harsh sun.
                        </p>
                        <ul class="space-y-2 text-xs text-slate-700 mb-6 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Span sizes up to 50,000 sq ft</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Clean white interior ceiling lining</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Fire-retardant & high wind tolerance</span>
                            </li>
                        </ul>
                    </div>
                    <span class="block text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1.5 rounded text-center">
                        All-Weather Guarantee
                    </span>
                </div>

                <!-- 02: Royal Mandap -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-amber-100 text-amber-900 flex items-center justify-center font-black text-lg rounded-xl mb-6">
                            02
                        </div>
                        <h3 class="text-xl font-black uppercase text-slate-950 mb-3">Royal Wedding Mandap Art</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Sacred Vedic mandaps customized to your heritage. Hand-carved pillars, fresh floral canopies (Orchids, Roses, Marigold), crystal chandeliers, and ritual havan seating.
                        </p>
                        <ul class="space-y-2 text-xs text-slate-700 mb-6 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Rajputana, Floral, & Lotus Mandap themes</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Fresh daily floral arrangements</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Dedicated seating for pandit & family</span>
                            </li>
                        </ul>
                    </div>
                    <span class="block text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1.5 rounded text-center">
                        Sacred Vedic Standards
                    </span>
                </div>

                <!-- 03: Grand Entrance -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-amber-100 text-amber-900 flex items-center justify-center font-black text-lg rounded-xl mb-6">
                            03
                        </div>
                        <h3 class="text-xl font-black uppercase text-slate-950 mb-3">Entrance Gates & Walkways</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            A majestic welcome for your guests. Illuminated fairy-light tunnels, mirror-work arches, botanical green walls, and plush red-carpet pathways.
                        </p>
                        <ul class="space-y-2 text-xs text-slate-700 mb-6 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Grand 30-foot entry gate fabrication</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Warm atmospheric walkway lighting</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Photogenic selfie & photo-booth points</span>
                            </li>
                        </ul>
                    </div>
                    <span class="block text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1.5 rounded text-center">
                        Unforgettable First Impression
                    </span>
                </div>

                <!-- 04: Designer Stage -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-amber-100 text-amber-900 flex items-center justify-center font-black text-lg rounded-xl mb-6">
                            04
                        </div>
                        <h3 class="text-xl font-black uppercase text-slate-950 mb-3">Designer Stage & LED Walls</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Elevated stage structures with acoustic carpeting, high-definition LED video backdrop walls, floral borders, and royal Maharaja throne seating.
                        </p>
                        <ul class="space-y-2 text-xs text-slate-700 mb-6 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Custom stage dimensions (up to 60 ft)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>High-res P3 LED screen integration</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Plush velvet bride-groom seating</span>
                            </li>
                        </ul>
                    </div>
                    <span class="block text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1.5 rounded text-center">
                        Cinematic Photography
                    </span>
                </div>

                <!-- 05: Lighting & Sound -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-amber-100 text-amber-900 flex items-center justify-center font-black text-lg rounded-xl mb-6">
                            05
                        </div>
                        <h3 class="text-xl font-black uppercase text-slate-950 mb-3">Lighting & Truss Systems</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Professional metal truss fabrication, warm ambient floodlights, moving head beam lights, fairy light sky canopies, and crystal chandeliers.
                        </p>
                        <ul class="space-y-2 text-xs text-slate-700 mb-6 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Full night bright illumination</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>JBL Sound DJ & wireless mics</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>DMX controller lighting patterns</span>
                            </li>
                        </ul>
                    </div>
                    <span class="block text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1.5 rounded text-center">
                        Vibrant Night Atmosphere
                    </span>
                </div>

                <!-- 06: Climate & Power -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-amber-100 text-amber-900 flex items-center justify-center font-black text-lg rounded-xl mb-6">
                            06
                        </div>
                        <h3 class="text-xl font-black uppercase text-slate-950 mb-3">AC, Cooling & DG Sets</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Heavy commercial tower air conditioners, industrial high-velocity mist cooling fans for summers, patio heaters for winters, and silent DG generator sets.
                        </p>
                        <ul class="space-y-2 text-xs text-slate-700 mb-6 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>100% uninterrupted power supply</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Sound-proof 62.5kVA / 125kVA generators</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Complete thermal comfort for guests</span>
                            </li>
                        </ul>
                    </div>
                    <span class="block text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1.5 rounded text-center">
                        Zero Power Failure Guarantee
                    </span>
                </div>

            </div>

            <!-- On-Site Inspection CTA -->
            <div class="mt-16 glass-card p-8 sm:p-12 rounded-3xl border border-slate-200 text-center">
                <h3 class="text-2xl sm:text-3xl font-black uppercase text-slate-950 mb-3">
                    Need a Venue Inspection in Patna?
                </h3>
                <p class="text-slate-600 text-sm max-w-xl mx-auto mb-6">
                    Our structural team visits your ground or lawn anywhere in Patna to take exact measurements and propose custom 3D layout options.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="tel:7717702563" class="px-8 py-3.5 bg-slate-950 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:bg-amber-600 transition">
                        Call 7717702563 for Inspection
                    </a>
                    <a href="{{ route('contact') }}" class="px-8 py-3.5 bg-amber-500 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:bg-amber-600 transition shadow">
                        Book Online Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
