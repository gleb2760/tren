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
        Schema::table('bron', function (Blueprint $table) {
            $table->string('route_id');

            $table->foreign('route_id')
                ->references('id')
                ->on('bron');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bron', function (Blueprint $table) {
            $table->string('route_id');

            $table->foreign('route_id')
                ->references('id')
                ->on('bron');
        });
    }
};
