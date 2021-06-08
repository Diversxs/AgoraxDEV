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
        User::factory(10)->create();
        Events::factory(6)->create();
        User::factory()->create([
            'name'=>'root',
            'email'=>'123@mail.com',
            'isAdmin'=>true]);

<<<<<<< HEAD
        
=======
>>>>>>> e44c87904599f61e54f3f9d6489bd5a784a81def

    }
}
