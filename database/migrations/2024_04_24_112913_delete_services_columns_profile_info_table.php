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
        Schema::table('profile_information', function (Blueprint $table) {
            $table->dropColumn(['service1', 'service2', 'service3']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile_information', function (Blueprint $table) {
            $table->string('service1', 255);
            $table->string('service2', 255);
            $table->string('service3', 255);
        });
    }
};
