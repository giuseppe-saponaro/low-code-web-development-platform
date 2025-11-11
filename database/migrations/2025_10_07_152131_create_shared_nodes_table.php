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
        Schema::create('shared_nodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('node_id');
            $table->foreign('node_id')->references('id')->on('nodes')->cascadeOnDelete();
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->boolean('can_create');
            $table->boolean('can_read');
            $table->boolean('can_update');
            $table->boolean('can_delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shared_nodes');
    }
};
