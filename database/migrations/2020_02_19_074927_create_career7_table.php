<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareer7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career7', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mail');
            $table->string('phone')->unique();
            $table->string('NID')->unique();
            $table->string('faculty');
            $table->string('uni');
            $table->string('department');
            $table->string('session');
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
        Schema::dropIfExists('career7');
    }
}
