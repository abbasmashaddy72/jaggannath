<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('number');
            $table->string('email');
            $table->string('phone');
            $table->string('how');
            $table->string('initial_response');
            $table->string('explanation_of_treatment');
            $table->string('cost_treatment');
            $table->string('reception_rating');
            $table->string('dmo_rating');
            $table->string('nurse_rating');
            $table->string('house_keeping');
            $table->string('treatment_rating');
            $table->string('any_other');
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
        Schema::dropIfExists('feedback');
    }
};
