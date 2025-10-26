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
        Schema::create('bootstrap_nav_links', function (Blueprint $table) {
            $table->id();
            $table->string("label")->nullable();
            $table->unsignedBigInteger('ref_id')->nullable();
            $table->foreign('ref_id')->references('id')->on('nodes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bootstrap_nav_links');
    }
};
