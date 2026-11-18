<?php

namespace Tests\Feature;

use App\Models\Inquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InquiryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the homepage loads successfully.
     */
    public function test_homepage_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Patna Caterer');
    }

    /**
     * Test that users can submit an inquiry.
     */
    public function test_user_can_submit_inquiry(): void
    {
        $response = $this->post('/inquiry', [
            'name' => 'Himanshu Kumar',
            'phone' => '7717702563',
            'event_type' => 'Wedding',
            'event_date' => '2026-12-15',
            'guests_count' => 350,
            'service_needed' => 'Catering & Tent House',
            'food_preference' => 'Veg & Non-Veg',
            'message' => 'Please share menu and pricing quotation.',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('inquiries', [
            'name' => 'Himanshu Kumar',
            'phone' => '7717702563',
            'guests_count' => 350,
        ]);
    }
}
