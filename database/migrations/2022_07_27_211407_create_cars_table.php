<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {

            $table->id();
            $table->string('registration_number')->unique();
            $table->timestamps();
            $table->string('brand');
            $table->string('model');
            $table->string('color');
            $table->boolean('status_flag');

            $table->unsignedBigInteger('client_id')->nullable();

            $table->index('client_id', 'cars_client_idx');
            $table->foreign('client_id', 'cars_client_fk')->on('clients')->references('id')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
