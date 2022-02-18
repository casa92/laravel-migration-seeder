<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holiday', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->string('state', 50);
            $table->string('city', 50);
            $table->tinyInteger('days');
            $table->decimal('price', 7, 2);
            $table->string('leaving', 20);
            $table->text('description');
            $table->tinyInteger('is_available')->unsigned()->default(1);
            

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
        Schema::dropIfExists('holiday');
    }
}
