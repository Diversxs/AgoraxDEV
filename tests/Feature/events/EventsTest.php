<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Events;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class EventsTest extends TestCase
{
    use RefreshDatabase;




    public function test_if_an_event_can_be_created()
    {
        $this->withExceptionHandling();
        $admin = User::factory()->create([
            'name' => 'root',
            'email' => '123@mail.com',
            'isAdmin' => true
        ]);
        $this->actingAs($admin);
        $newEvent = $this->post('/events/store', [
            'title' => 'event1',
            'description' => 'cool event',
            'picture' => 'aaa',
            'date' => '14/12/20',
            'capacity' => '30'
        ]);

        $newEvent->assertRedirect(route('logged_index'));
        $this->assertCount(1, Events::all());


        $event= Events::first();

        $this->assertEquals($event->title, 'event1');
        $this->assertEquals($event->description, 'cool event');
    }

    public function test_list_of_events_can_be_retrieved()
    {
        $this->withExceptionHandling();


        $events = Events::factory(3)->create();

        $user=User::factory()->create();
        $this->actingAs($user);

        $eventList=$this->get('/events');

        $eventList->assertOk();
        $events=Events::all();

        $eventList->assertViewIs('user.index');
        $this->assertEquals(3, count($events));
    }

    public function test_a_event_can_be_deleted()
    {
        $this->withExceptionHandling();
        $admin = User::factory()->create([
            'name' => 'root',
            'email' => '123@mail.com',
            'isAdmin' => true
        ]);
        $this->actingAs($admin);

        $event = Events::factory()->create();

        $response = $this->delete('/events/delete/'.$event->id);

        $this->assertCount(0, Events::all());
        $response->assertRedirect(route('logged_index'));
    }


}
