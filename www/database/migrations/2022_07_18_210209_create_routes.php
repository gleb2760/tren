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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_id');
            $table->unsignedBigInteger('to_id');
            $table->unsignedBigInteger('busstop_id');
            $table->unsignedBigInteger('bus_id');
            $table->dateTime('time_start');
            $table->dateTime('time_end');
            $table->timestamps();

            $table->foreign('from_id')
                ->references('id')
                ->on('city');

            $table->foreign('to_id')
                ->references('id')
                ->on('city');

            $table->foreign('busstop_id')
                ->references('id')
                ->on('bus_stop');

            $table->foreign('bus_id')
                ->references('id')
                ->on('bus');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
};
