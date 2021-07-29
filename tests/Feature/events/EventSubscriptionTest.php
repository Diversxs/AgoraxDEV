<?php

namespace Tests\Feature\events;

use App\Models\Events;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class EventSubscriptionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ifUserIsLoggedCanSubscribe()
    {
        $event = Events::factory()->create();
        $user = User::factory()->create();
        // dd($user);

        $this->actingAs($user);

        $response = $this->get(route('subscribe', $event));

        $response->assertStatus(302);
    }
}
