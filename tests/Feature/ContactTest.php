<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_contacts_successful_response()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/contacts');

        $response->assertStatus(200);
    }
}