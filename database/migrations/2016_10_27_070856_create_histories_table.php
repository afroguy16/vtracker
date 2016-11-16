<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("visitors_id")->unsigned();
            $table->foreign("visitors_id")->references("id")->on("visitors");
            $table->date("date");
            $table->time("time_in");
            $table->time("time_out")->nullable();
            $table->string("whom_to_see");
            $table->string("purpose_of_visit");
            $table->string("admin");
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
        Schema::dropIfExists('histories');
    }
}