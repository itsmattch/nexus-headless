<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('badge_keys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('badge_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->unique(['name', 'badge_id']);
        });
    }

    public function down(): void
    {
        Schema::drop('badge_keys');
    }
};