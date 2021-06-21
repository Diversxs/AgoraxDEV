<?php

namespace Tests\Feature;

use App\Models\Events;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class eventsTest extends TestCase
{

use RefreshDatabase;
    


    public function test_vereventos()
{

    $events=Events::factory(2)->create();


        $response = $this->get(route('home'));

        $response->assertStatus(200);

        $response->assertViewIs('home.index');

        $response->assertSee($events[0]->title);

        $response->assertSee($events[1]->title);
        

       
        

                  
    }


}
