<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Question;
use Illuminate\Database\Seeder;
// use Database\Seeder\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Himanshu Thakkar',
            'email' => 'himanshu@studylinkclasses.com',
            'password' => Hash::make('abcd1234')
        ]);

        User::factory(10)->create()->each(function($user) {
            for($i=0; $i<random_int(5,10); $i++){
                $user->questions()->create(
                    Question::factory()->make()->toArray()
                );
            }
        });
    }
}
