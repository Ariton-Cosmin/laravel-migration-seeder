<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('reference',12);
            $table->string('fly',100);
            $table->string('hotel',100);
            $table->string('city',50);
            $table->string('state',50);
            $table->string('car',100);
            $table->text('description')->nullable();
            $table->float('price',10,2);
            $table->boolean('is_available',10,2)->default(1);
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
        Schema::dropIfExists('travels');
    }
}
