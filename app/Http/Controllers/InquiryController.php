<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Store a newly created inquiry from the website and forward to WhatsApp (7717702563).
     *
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     */
    public function store(Request $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:20'],
            'event_type' => ['nullable', 'string', 'max:100'],
            'event_date' => ['nullable', 'date'],
            'guests_count' => ['nullable', 'integer', 'min:10', 'max:50000'],
            'service_needed' => ['nullable', 'string', 'max:100'],
            'food_preference' => ['nullable', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        try {
            Inquiry::create($validated);
        } catch (\Throwable $e) {
            // Gracefully ignore write errors on serverless read-only storage (e.g. Vercel)
        }

        $name = $validated['name'];
        $phone = $validated['phone'];
        $eventType = $validated['event_type'] ?? 'Wedding / Celebration';
        $eventDate = $validated['event_date'] ?? 'To be decided';
        $guestsCount = $validated['guests_count'] ?? '300';
        $serviceNeeded = $validated['service_needed'] ?? 'Both Catering & Tent House';
        $foodPreference = $validated['food_preference'] ?? 'Veg & Non-Veg';
        $notes = $validated['message'] ?? 'Near Patna';

        // Pre-build WhatsApp text for number 7717702563
        $waMessage = "Namaste Patna Caterer & Patna Tent House,\n"
            . "I would like to submit an Event Booking Inquiry:\n"
            . "• Name: " . $name . "\n"
            . "• Phone: " . $phone . "\n"
            . "• Event Type: " . $eventType . "\n"
            . "• Tentative Date: " . $eventDate . "\n"
            . "• Estimated Guests: " . $guestsCount . " Guests\n"
            . "• Service Needed: " . $serviceNeeded . "\n"
            . "• Food Preference: " . $foodPreference . "\n"
            . "• Venue / Notes: " . $notes . "\n\n"
            . "Please confirm date availability and share quotation!";

        $waUrl = 'https://wa.me/917717702563?text=' . urlencode($waMessage);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'wa_url' => $waUrl,
                'message' => 'Inquiry saved successfully. Redirecting to WhatsApp...',
            ]);
        }

        return redirect()->away($waUrl);
    }
}
