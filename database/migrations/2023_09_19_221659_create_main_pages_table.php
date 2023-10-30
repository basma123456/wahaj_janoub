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
        if(!Schema::hasTable('main_pages'))

            Schema::create('main_pages', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('logo');
             $table->string('file');

            $table->string('main_title');
            $table->string('main_desc');
            $table->string('right_bottom_desc');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('contact_us_link');

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
        Schema::dropIfExists('main_pages');
    }
};
