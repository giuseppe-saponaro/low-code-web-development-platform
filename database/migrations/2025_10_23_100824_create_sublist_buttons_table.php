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
        Schema::create('sublist_buttons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('list_binding_id')->nullable();
            $table->foreign('list_binding_id')->references('id')->on('html_lists');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sublist_buttons');
    }
};
