<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile_information', function (Blueprint $table) {
            $table->id();
            $table->text('about');
            $table->string('service1', 255);
            $table->string('service2', 255);
            $table->string('service3', 255);
            $table->text('specialty_text');
            $table->string('specialty', 255);
            $table->text('contact_me');
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('email', 255);
            $table->string('resume_link', 255);
            $table->string('linkedin_link', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_information');
    }
};
