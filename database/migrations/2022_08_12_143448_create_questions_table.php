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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question')->default('0')->nullable();
            $table->string('a')->default('0')->nullable();
            $table->string('b')->default('0')->nullable();
            $table->string('c')->default('0')->nullable();
            $table->string('d')->default('0')->nullable();
            $table->string('ans')->default('0')->nullable();


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
        Schema::dropIfExists('questions');
    }
};
