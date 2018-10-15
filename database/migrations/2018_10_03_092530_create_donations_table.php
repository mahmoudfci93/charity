<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('full_name');
            $table->string('place');
            $table->string('sub_place');
            $table->string('time');
            $table->string('mobile');
            $table->string('mobile2')->nullable();
            $table->string('value')->nullable();
            $table->tinyInteger('confirm')->default(0);
            $table->tinyInteger('send_trans')->default(0);
            $table->tinyInteger('received')->default(0);
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
        Schema::dropIfExists('donations');
    }
}
