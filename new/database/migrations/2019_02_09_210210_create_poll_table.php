<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls', function (Blueprint $table) {
            $table->increments('poll_id');
            
            $table->text('poll_name')->nullable();
            
            $table->string('poll_option_a')->nullable();
            $table->string('poll_option_b')->nullable();
            $table->string('poll_option_c')->nullable();
            $table->string('poll_option_d')->nullable();

            $table->integer('union_id')->unsigned();
            $table->foreign('union_id')->references('union_id')->on('unions');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polls');
    }
}
