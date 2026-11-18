<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Store a newly created inquiry from the website.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
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

        $inquiry = Inquiry::create($validated);

        // Pre-build WhatsApp text for easy forwarding
        $waMessage = "Namaste Patna Caterer & Tent House,\n"
            . "New Booking Inquiry from Website:\n"
            . "• Name: " . $inquiry->name . "\n"
            . "• Phone: " . $inquiry->phone . "\n"
            . "• Event: " . ($inquiry->event_type ?? 'Not Specified') . "\n"
            . "• Date: " . ($inquiry->event_date ?? 'To be decided') . "\n"
            . "• Guests: " . ($inquiry->guests_count ?? 'Not specified') . "\n"
            . "• Service: " . ($inquiry->service_needed ?? 'Catering & Tent') . "\n"
            . "• Food: " . ($inquiry->food_preference ?? 'Veg / Non-Veg') . "\n"
            . "• Notes: " . ($inquiry->message ?? 'None');

        $waUrl = 'https://wa.me/917717702563?text=' . urlencode($waMessage);

        return redirect()->to(url()->previous() . '#inquiry-form')
            ->with('success', 'Aapka inquiry request save ho gaya hai! Hum jald hi 7717702563 se call karenge.')
            ->with('wa_url', $waUrl);
    }
}
