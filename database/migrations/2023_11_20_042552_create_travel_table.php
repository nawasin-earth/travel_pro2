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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('name_t');
            $table->string('province_t');
            $table->text('description_t');
            $table->text('address');
            $table->string('time');
            $table->string('image')->nullable();
            $table->string('season'); // New column for season
            $table->string('coordinates'); // New column for coordinates
            $table->string('contact')->nullable(); // New column for contact
            $table->string('website')->nullable(); // New column for website (store as link)
            $table->text('detail');
            $table->text('admission')->nullable(); // New column for admission
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
