<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuration', function (Blueprint $table) {
            
            $table->id();
            $table->integer('userID');
            $table->integer('cpuID');
            $table->integer('motherboardID');
            $table->integer('ramID');
            $table->integer('casingID');
            $table->integer('storageID');
            $table->integer('psuID');
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
        Schema::dropIfExists('table');
    }
}
