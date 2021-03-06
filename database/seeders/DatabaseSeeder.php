<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Tag::factory(1)->create();
        \App\Models\Blog::factory(10)->create();
        \App\Models\Member::factory(10)->create();
        \App\Models\Student::factory(10)->create();
    }
}
