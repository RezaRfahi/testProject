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
        Schema::create('reservations', function (Blueprint $table) {
//            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('resturant_id');
            $table->foreign('resturant_id')->references('id')->on('resturants')->onDelete('cascade');
            $table->string('user_name')->fulltext();
            $table->string('resturant_name')->fulltext();
            $table->string('reservation_code')->unique();
            $table->unsignedInteger('person_count');
            $table->unsignedInteger('table_number')->index();
            $table->timestamp('reservation_start_time')->unique();
            $table->timestamp('reservation_finish_time')->unique();
            $table->timestamp('real_finish')->nullable();
            $table->string('status')->default('expect');
            $table->primary(['user_id', 'resturant_id', 'reservation_start_time']);
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
        Schema::dropIfExists('reservations');
    }
};
