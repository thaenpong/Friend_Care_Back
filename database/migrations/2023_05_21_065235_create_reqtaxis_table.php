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
        Schema::create('reqtaxis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('p_lat', 18, 14);
            $table->decimal('p_long', 18, 14);
            $table->decimal('d_lat', 18, 14);
            $table->decimal('d_long', 18, 14);
            $table->decimal('distance', 5, 2);
            $table->decimal('duration', 5, 2);
            $table->string('payment');
            $table->string('selectedOption');
            $table->integer('price');
            $table->string('detail');
            $table->integer('Userid');
            $table->string('username');
            $table->string('tell');
            $table->integer('status');
            $table->integer('driverid')->nullable();
            $table->string('drivername')->nullable();
            $table->string('datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reqtaxis');
    }
};
