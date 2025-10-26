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
        Schema::create('html_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('binding_id')->nullable();
            $table->foreign('binding_id')->references('id')->on('html_forms');
            $table->unsignedBigInteger('node_id1')->nullable();
            $table->foreign('node_id1')->references('id')->on('nodes');
            $table->unsignedBigInteger('node_id2')->nullable();
            $table->foreign('node_id2')->references('id')->on('nodes');
            $table->unsignedBigInteger('default_filter_binding_id')->nullable();
            $table->foreign('default_filter_binding_id')->references('id')->on('nodes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('html_lists');
    }
};
