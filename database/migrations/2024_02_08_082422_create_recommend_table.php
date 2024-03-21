<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('recommend', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('travel_id'); // Foreign Key ที่เชื่อมโยงกับตาราง travel
            $table->foreign('travel_id')->references('id')->on('travel')->onDelete('cascade');
            $table->string('restaurant_image')->nullable();
            $table->string('restaurant_name')->nullable();
            $table->string('restaurant_link')->nullable();
            $table->string('cafe_image')->nullable();
            $table->string('cafe_name')->nullable();
            $table->string('cafe_link')->nullable();
            $table->string('hotel_image')->nullable();
            $table->string('hotel_name')->nullable();
            $table->string('hotel_link')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommend');
    }
};
