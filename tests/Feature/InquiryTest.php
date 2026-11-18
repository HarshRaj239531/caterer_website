<?php

namespace Tests\Feature;

use App\Models\Inquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InquiryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that all dedicated website pages load successfully with 200 OK.
     */
    public function test_all_pages_load_successfully(): void
    {
        $pages = [
            '/' => 'Patna Caterer',
            '/catering' => 'Authentic Cuisines',
            '/tent-house' => 'German Hangar',
            '/packages' => 'Transparent Packages',
            '/about' => 'Our Story',
            '/contact' => 'Get in Touch',
        ];

        foreach ($pages as $url => $expectedContent) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertSee($expectedContent);
        }
    }

    /**
     * Test that users can submit an inquiry through the booking form.
     */
    public function test_user_can_submit_inquiry(): void
    {
        $response = $this->post('/inquiry', [
            'name' => 'Himanshu Kumar',
            'phone' => '7717702563',
            'event_type' => 'Wedding',
            'event_date' => '2026-12-15',
            'guests_count' => 350,
            'service_needed' => 'Both Catering & Tent House',
            'food_preference' => 'Veg & Non-Veg (Mutton/Chicken/Fish)',
            'message' => 'Please share menu and pricing quotation for Boring Road event.',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('inquiries', [
            'name' => 'Himanshu Kumar',
            'phone' => '7717702563',
            'guests_count' => 350,
        ]);
    }
}
