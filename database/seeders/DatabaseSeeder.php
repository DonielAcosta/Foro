<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create(['email'=>'donielacosta1995@gmail.com','password'=>bcrypt("123456789")]);
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->hasThreads(20)->create();
        \App\Models\Reply::factory(400)->create();




    }
}
