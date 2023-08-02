<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entity_type_id')->constrained();

            $table->index(['id', 'entity_type_id']);
        });
    }

    public function down(): void
    {
        Schema::drop('entities');
    }
};