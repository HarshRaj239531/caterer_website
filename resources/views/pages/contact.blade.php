@extends('layouts.app')

@section('title', 'Contact & Booking | Patna Caterer & Patna Tent House')
@section('meta_description', 'Contact Patna Caterer & Patna Tent House near A.N. College, Boring Road, Patna. Call 7717702563 for booking inquiries, menu tasting, and event planning.')

@section('content')
    <!-- Contact Header -->
    <section class="pt-12 pb-16 sm:pt-16 sm:pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                We Are Available All 7 Days (8 AM - 10:30 PM)
            </span>
            <h1 class="text-4xl sm:text-6xl font-black text-slate-950 uppercase tracking-tight mb-4">
                Get in Touch & Book Your Date
            </h1>
            <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Connect with our senior event team near Boring Road, Patna. We are happy to share samples, menus, pricing, and conduct on-site inspections.
            </p>
        </div>
    </section>

    <!-- Contact & Form Grid -->
    <section class="pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                <!-- Left Column: Contact Channels & Location (Glassmorphic Card) -->
                <div class="lg:col-span-5 glass-card p-8 sm:p-10 rounded-3xl border border-slate-200/90 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                            Direct Contacts
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-black uppercase text-slate-950 mt-4 mb-2">
                            Patna Caterer & Patna Tent House
                        </h2>
                        <p class="text-xs text-slate-600 leading-relaxed mb-8">
                            Reach out by phone, WhatsApp, or drop by our office near A.N. College for a detailed personal consultation.
                        </p>

                        <div class="space-y-6 text-xs text-slate-700">
                            <!-- Address -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <span class="block font-bold text-slate-900 uppercase text-[11px] tracking-wider">Office & Central Kitchen</span>
                                    <span class="text-slate-600">Near A.N. College, Boring Road, Patna, Bihar - 800013, India</span>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                                </div>
                                <div>
                                    <span class="block font-bold text-slate-900 uppercase text-[11px] tracking-wider">Direct Call</span>
                                    <a href="tel:7717702563" class="text-base font-black text-amber-700 hover:underline">+91 7717702563</a>
                                    <span class="block text-[11px] text-slate-500">Fast assistance for quotes and bookings</span>
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-900 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 fill-current text-emerald-700" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                                </div>
                                <div>
                                    <span class="block font-bold text-slate-900 uppercase text-[11px] tracking-wider">WhatsApp Instant Chat</span>
                                    <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20am%20inquiring%20about%20your%20services"
                                       target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-emerald-700 hover:underline">
                                        Chat with Event Manager
                                    </a>
                                </div>
                            </div>

                            <!-- Online Profile -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-900 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                </div>
                                <div>
                                    <span class="block font-bold text-slate-900 uppercase text-[11px] tracking-wider">Official Online Profile</span>
                                    <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer" class="text-slate-700 hover:text-amber-600 underline">
                                        Justdial Profile: DT-47WRSUKTS1G
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Coverage Areas -->
                    <div class="mt-8 pt-6 border-t border-slate-200">
                        <span class="block text-[11px] font-bold uppercase tracking-wider text-slate-900 mb-2">Service Hubs in Patna:</span>
                        <p class="text-[11px] text-slate-500 leading-relaxed">
                            Boring Road • Bailey Road • Kankarbagh • Patliputra • Rajendra Nagar • Danapur • Ashiana Nagar • Saguna More • Exhibition Road • Raja Bazar • Bihta • Hajipur
                        </p>
                    </div>
                </div>

                <!-- Right Column: Interactive Booking Form (Glassmorphic Card) -->
                <div class="lg:col-span-7 glass-card p-8 sm:p-10 rounded-3xl border border-slate-200/90 shadow-xl">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                        Online Booking & Estimate
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-black uppercase tracking-tight text-slate-950 mt-4 mb-2">
                        Send Your Event Requirements
                    </h3>
                    <p class="text-xs text-slate-600 mb-6">
                        Provide your details below. We will calculate estimated pricing and contact you promptly.
                    </p>

                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="mb-6 p-5 bg-emerald-50 border border-emerald-300 text-emerald-900 rounded-2xl">
                            <div class="flex items-center gap-2 mb-2 font-bold text-sm">
                                <span>✓</span>
                                <span>{{ session('success') }}</span>
                            </div>
                            @if (session('wa_url'))
                                <a href="{{ session('wa_url') }}" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 mt-2 px-4 py-2 bg-emerald-600 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:bg-emerald-700 transition shadow">
                                    <span>Forward details directly on WhatsApp now</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            @endif
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-rose-50 border border-rose-300 text-rose-800 text-xs rounded-xl">
                            <p class="font-bold mb-1">Please fix the following:</p>
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-1">
                                    Your Name *
                                </label>
                                <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                       placeholder="e.g. Himanshu Kumar"
                                       class="w-full px-4 py-2.5 text-xs bg-white border border-slate-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:outline-none rounded-xl">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-1">
                                    Phone Number *
                                </label>
                                <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}"
                                       placeholder="e.g. 7717702563"
                                       class="w-full px-4 py-2.5 text-xs bg-white border border-slate-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:outline-none rounded-xl">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <!-- Event Type -->
                            <div>
                                <label for="event_type" class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-1">
                                    Event Type
                                </label>
                                <select id="event_type" name="event_type"
                                        class="w-full px-4 py-2.5 text-xs bg-white border border-slate-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:outline-none rounded-xl">
                                    <option value="Wedding">Wedding</option>
                                    <option value="Reception">Reception</option>
                                    <option value="Ring Ceremony / Tilak">Ring Ceremony / Tilak</option>
                                    <option value="Birthday Party">Birthday Party</option>
                                    <option value="Corporate Event">Corporate Event</option>
                                    <option value="Puja / Religious Bhoj">Puja / Religious Bhoj</option>
                                    <option value="Other Celebration">Other Celebration</option>
                                </select>
                            </div>

                            <!-- Tentative Date -->
                            <div>
                                <label for="event_date" class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-1">
                                    Tentative Date
                                </label>
                                <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}"
                                       class="w-full px-4 py-2.5 text-xs bg-white border border-slate-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:outline-none rounded-xl">
                            </div>

                            <!-- Guest Count -->
                            <div>
                                <label for="guests_count" class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-1">
                                    Estimated Guests
                                </label>
                                <input type="number" id="guests_count" name="guests_count" min="20" max="10000" value="{{ old('guests_count', 300) }}"
                                       class="w-full px-4 py-2.5 text-xs bg-white border border-slate-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:outline-none rounded-xl">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Service Needed -->
                            <div>
                                <label for="service_needed" class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-1">
                                    Service Needed
                                </label>
                                <select id="service_needed" name="service_needed"
                                        class="w-full px-4 py-2.5 text-xs bg-white border border-slate-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:outline-none rounded-xl">
                                    <option value="Both Catering & Tent House">Both Catering & Tent House</option>
                                    <option value="Catering Service Only">Catering Service Only</option>
                                    <option value="Tent House & Decor Only">Tent House & Decor Only</option>
                                    <option value="Full Event Management">Full Event Management</option>
                                </select>
                            </div>

                            <!-- Food Preference -->
                            <div>
                                <label for="food_preference" class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-1">
                                    Food Preference
                                </label>
                                <select id="food_preference" name="food_preference"
                                        class="w-full px-4 py-2.5 text-xs bg-white border border-slate-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:outline-none rounded-xl">
                                    <option value="Veg & Non-Veg (Mutton/Chicken/Fish)">Veg & Non-Veg (Mutton/Chicken/Fish)</option>
                                    <option value="Pure Vegetarian (Jain Available)">Pure Vegetarian (Jain Available)</option>
                                    <option value="Special Champaran Ahuna Handi Included">Special Champaran Ahuna Handi Included</option>
                                </select>
                            </div>
                        </div>

                        <!-- Special Requests -->
                        <div>
                            <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-800 mb-1">
                                Event Venue or Special Requirements
                            </label>
                            <textarea id="message" name="message" rows="3"
                                      placeholder="e.g. Lawn location, preferred dishes, mandap theme, or specific budget considerations..."
                                      class="w-full px-4 py-2.5 text-xs bg-white border border-slate-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 focus:outline-none rounded-xl">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit -->
                        <div class="pt-2 flex flex-col sm:flex-row items-center gap-3">
                            <button type="submit"
                                    class="w-full sm:w-auto px-8 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:from-amber-600 hover:to-amber-700 transition shadow-lg shadow-amber-500/20">
                                Submit Booking Inquiry
                            </button>
                            <span class="text-xs text-slate-500">Or call us directly at <a href="tel:7717702563" class="font-bold text-amber-700 underline">7717702563</a></span>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Accordion -->
    <section class="pb-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Quick Answers
                </span>
                <h3 class="text-3xl font-black uppercase text-slate-950 mt-3 mb-2">
                    Common Questions
                </h3>
            </div>

            <div class="space-y-4">
                <details class="glass-card p-6 rounded-2xl border border-slate-200 [&_summary::-webkit-details-marker]:hidden open:border-amber-400 transition">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-sm sm:text-base text-slate-900">
                        <span>Do you offer food tasting sessions before booking a wedding?</span>
                        <span class="text-amber-600 group-open:rotate-180 transition-transform">▼</span>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-4 leading-relaxed border-t border-slate-100 pt-3">
                        Yes! For large wedding bookings (250+ guests), we organize a personalized tasting session at our kitchen near Boring Road so your family can sample the gravies, breads, and sweets before finalizing the menu.
                    </p>
                </details>

                <details class="glass-card p-6 rounded-2xl border border-slate-200 [&_summary::-webkit-details-marker]:hidden open:border-amber-400 transition">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-sm sm:text-base text-slate-900">
                        <span>Can we book only the Tent House or only the Catering service?</span>
                        <span class="text-amber-600 group-open:rotate-180 transition-transform">▼</span>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-4 leading-relaxed border-t border-slate-100 pt-3">
                        Yes, absolutely. You can book either our catering services independently or our tent house, German hangar, and lighting setups independently.
                    </p>
                </details>

                <details class="glass-card p-6 rounded-2xl border border-slate-200 [&_summary::-webkit-details-marker]:hidden open:border-amber-400 transition">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-sm sm:text-base text-slate-900">
                        <span>What is your advance payment policy to block our event date?</span>
                        <span class="text-amber-600 group-open:rotate-180 transition-transform">▼</span>
                    </summary>
                    <p class="text-xs sm:text-sm text-slate-600 mt-4 leading-relaxed border-t border-slate-100 pt-3">
                        A nominal booking advance reserves your date and blocks equipment. The remaining balance is structured in clear milestones leading up to the celebration date, with full receipts provided.
                    </p>
                </details>
            </div>
        </div>
    </section>
@endsection
