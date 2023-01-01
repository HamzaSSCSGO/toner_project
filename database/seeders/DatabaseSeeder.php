<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TonerAssignement;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* TonerAssignement::factory(1000)->create(); */
        // \App\Models\User::factory(10)->create();
        $this->call(LaratrustSeeder::class);
        

    }
}
