<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('price');
            $table->string('image')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('status_id')->nullable();
            $table->string('diagonal_id')->nullable();
            $table->string('screen_resolution_id')->nullable();
            $table->string('cpu_processor_id')->nullable();
            $table->string('ram_id')->nullable();
            $table->string('storage_drive_id')->nullable();
            $table->string('matrix_type_id')->nullable();
            $table->string('class_id')->nullable();
            $table->string('weight_id')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('laptops');
    }
}
