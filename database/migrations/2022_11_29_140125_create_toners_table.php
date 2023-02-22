<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toners', function (Blueprint $table) {
            $table->id();
            /* $table->integer('color_id'); */ 
            $table->foreignId('color_id')->constrained('colors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('toner_model_id')->constrained('toner_models')->onUpdate('cascade')->onDelete('cascade')  /* integer('toner_model_id') */;
            $table->integer('quantity_left');
            $table->string('toner_image');
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
        Schema::dropIfExists('toners');
    }
}
