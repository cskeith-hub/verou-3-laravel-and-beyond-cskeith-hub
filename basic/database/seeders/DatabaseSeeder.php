<?php

namespace Database\Seeders;

use App\Models\Contactform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Job;
use App\Models\Hobby;


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
        Job::factory(20)->create();
        Hobby::factory(10)->create();
        Contactform::factory(10)->create();
    }
}
