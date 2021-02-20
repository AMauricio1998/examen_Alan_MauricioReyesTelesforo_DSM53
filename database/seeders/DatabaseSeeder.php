<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\tags;
use App\Models\post_tag;
use App\Models\images;
use App\Models\categories;
use App\Models\posts;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(100)->create();
        categories::factory(100)->create();
        tags::factory(100)->create();
        images::factory(100)->create();
        posts::factory(100)->create();
        tags::factory(100)->create();
        post_tag::factory(100)->create();
    }
}
