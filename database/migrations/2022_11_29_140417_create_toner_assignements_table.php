<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTonerAssignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toner_assignements', function (Blueprint $table) {
            $table->id();
            $table->integer('toner_id');
            $table->integer('employee_id');
            $table->integer('printer_id');
            $table->integer('quantity_assigned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toner_assignements');
    }
}
