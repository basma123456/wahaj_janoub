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
        if(!Schema::hasTable('quotation_product_construction'))

            Schema::create('quotation_product_construction', function (Blueprint $table) {
                $table->id();

                $table->foreignId('user_id')->constrained()->cascadeOnDelete();

                $table->string('table_name');
                $table->integer('foreign_id');
                $table->string('title');
//
                $table->foreignId('quotation_id')->constrained()->cascadeOnDelete();
//
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
        Schema::dropIfExists('quotation_product_construction');

    }
};
