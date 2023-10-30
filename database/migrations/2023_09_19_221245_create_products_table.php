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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_classifications_id')->constrained('product_classifications')->cascadeOnDelete();

            $table->string('title');
            $table->string('details');
            $table->string('image');
            $table->double('price' , 14 , 2);
            $table->tinyInteger('popularity' );
            $table->double('discount' , 14 , 2);
            $table->double('price_before_discount' , 14 , 2);
            $table->string('more_description');

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
        Schema::dropIfExists('products');
    }
};
