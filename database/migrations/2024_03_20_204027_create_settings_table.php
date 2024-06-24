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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_lg_light')->nullable();
            $table->string('logo_lg_dark')->nullable();
            $table->string('logo_sm_light')->nullable();
            $table->string('logo_sm_dark')->nullable();
            $table->enum('theme_mode', ['dark', 'light'])->default('light');
            $table->string('primary_color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
