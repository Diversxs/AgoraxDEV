<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;
use App\Models\User;
use App\Http\Controllers\EventsController;
use function GuzzleHttp\Promise\Create;


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
        Events::factory(10)->create();
        User::factory(1)->create([
            'name'=>'root',
            'email'=>'123@mail.com',
            'isAdmin'=>true]);
        User::factory(1)->create([
            'name'=>'user',
            'email'=>'user@mail.com',
            'isAdmin'=>false]);

        Foreach (Events::all() as $event){
            $users= User::inRandomOrder()->take(rand(1,10))->pluck('id');
            $event->BookedInUsers()->attach($users);
        }


        

    }
}
