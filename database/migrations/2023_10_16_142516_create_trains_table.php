<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();
            $table->string('company', 100);
            $table->string('departure_station', 150);
            $table->string('arriving_station', 150);
            $table->date('departure_date');
            $table->date('arriving_date');
            $table->time('departure_time');
            $table->time('arriving_time');
            $table->decimal('train_code')->unsigned();
            $table->tinyInteger('train_carriages')->unsigned();
            $table->boolean('on_time');
            $table->boolean('cancelled');
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
        Schema::dropIfExists('trains');
    }
};