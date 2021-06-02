<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'isAdmin'=> true,
        ]);

        User::factory(10)->create();
        Events::factory(6)->create();
        

    }
}
