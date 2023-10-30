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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('title_one');
            $table->string('description_one');
            $table->string('more_description_one');
            $table->string('image_one');

            $table->string('title_two');
            $table->string('description_two');
             $table->string('image_two');

            $table->string('last_h');


            $table->string('right_bottom_title');
            $table->string('right_bottom_desc');
            $table->string('left_bottom_title');
            $table->string('left_bottom_desc');





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
        Schema::dropIfExists('about_us');
    }
};
