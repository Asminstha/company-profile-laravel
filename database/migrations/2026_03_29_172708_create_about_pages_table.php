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
    Schema::create('about_pages', function (Blueprint $table) {
        $table->id();

        $table->string('heading');
        $table->text('description');

        $table->string('image')->nullable();

        $table->string('experience')->default('15+');
        $table->string('projects')->default('50+');
        $table->string('experts')->default('60+');

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
