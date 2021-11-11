<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKuesioner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('A1')->nullable();
            $table->char('A2')->nullable();
            $table->char('B1')->nullable();
            $table->char('B2')->nullable();
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
        Schema::dropIfExists('kuesioner');
    }
}
