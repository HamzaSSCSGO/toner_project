<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TonerAssignementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $toner= rand(0,3);
        $employee= rand(1,5);
        $printer= rand(1,5);
        $quantity= rand(1,2);
        $created = Carbon::today()->subDays(rand(0, 1540));
        return [
            "toner_id" => $toner,
            "employee_id" => $employee,
            "printer_id" => $printer,
            "quantity_assigned" => $quantity,
            'created_at' => $created,
            'updated_at' => $created


        ];
    }
}
