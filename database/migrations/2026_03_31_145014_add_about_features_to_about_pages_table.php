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
    Schema::table('about_pages', function (Blueprint $table) {
        $table->string('mission_title')->nullable();
        $table->text('mission_desc')->nullable();

        $table->string('vision_title')->nullable();
        $table->text('vision_desc')->nullable();

        $table->string('goals_title')->nullable();
        $table->text('goals_desc')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_pages', function (Blueprint $table) {
            //
        });
    }
};
