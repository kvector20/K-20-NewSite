<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MagazineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazines',function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('body');
            $table->string('author');
            $table->integer('views')->default('0');
            $table->boolean('published')->default('0');
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
        Schema::drop('magazine');
    }
}