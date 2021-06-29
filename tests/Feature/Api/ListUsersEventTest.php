<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Events;
use App\Models\User;


class ListUsersEventTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_CheckIfEventsAreListedInJson()
    {
        Events::factory(2)-> create();

        $response = $this->get('api/events');

        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfEventHasBookedByUsers()

    {
        $event1 = Events::factory() -> create();

        $user = User::factory() -> create([
            'name'=>'user1',
            'email'=>'123@mail.com'
        ]);
        $user2 = User::factory() -> create([
            'name'=>'user2',
            'email'=>'1234@mail.com'
        ]);

        $event1->bookedInUsers()->attach($user);
        $event1->bookedInUsers()->attach($user2);

        $response = $this->get('/api/events/1/subscribers');

        $response->assertStatus(200)
                 ->assertJsonCount(2)
                 ->assertJsonFragment(['name'=>'user1',
                 'email'=>'123@mail.com']);


    }

}
