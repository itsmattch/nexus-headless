<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('entity_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->unique(['name', 'entity_id']);
        });
    }

    public function down(): void
    {
        Schema::drop('badges');
    }
};