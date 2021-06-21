<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class eventssub extends TestCase
{
    
    public function cantnotregister()
    {
        $Events=Events::factory()->create();

        $response = $this->get(route('subscribe',$Events->id));

        $response->assertStatus(301);
    }
}
