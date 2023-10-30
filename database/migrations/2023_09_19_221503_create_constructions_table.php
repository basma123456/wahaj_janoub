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
        if(!Schema::hasTable('constructions'))

            Schema::create('constructions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('construction_classification_id')->constrained()->onDelete('cascade');;
            $table->foreignId('partner_id')->constrained()->onDelete('cascade');;

            $table->string('title');
            $table->string('region');
            $table->string('city');
            $table->string('image');
            $table->string('video');
            $table->integer('number_of_constructions');

            $table->double('power' , 12 , 2);
            $table->double('duration_time' , 12 , 2);

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
        Schema::dropIfExists('constructions');
    }
};
