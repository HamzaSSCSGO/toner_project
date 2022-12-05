<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TonerAssignementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TonerAssignement::factory(1000)->create();
    }
}
