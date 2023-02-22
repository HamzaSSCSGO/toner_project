<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')/* ->unique() */;
            $table->string('ip');
            $table->string('printer_name');
            /* $table->integer('toner_consumption')->nullable(); */
            $table->foreignId('printer_location_id')->constrained('printer_locations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('printer_model_id')->constrained('printer_models')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('printer_category_id')->constrained('printer_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('printer_image');
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
        Schema::dropIfExists('printers');
    }
}
