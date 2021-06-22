<?php

namespace Tests\Feature\events;


use App\Models\Events;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeListTest extends TestCase
{
    //vaciar la bd
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_anyUserCanSeeListEvents()
    {
        //crear 2 cursos (given) con faker
        $events = Events::factory(2)->create();
        // dd($events);
        //(when) System under test -> llama a la ruta Home
        $response = $this->get(route('home'));
        //(then) estado de la ruta 200 = ok
        $response->assertStatus(200)
            ->assertViewIs('home.index')
            ->assertSee($events[0]->title);
    }
}
