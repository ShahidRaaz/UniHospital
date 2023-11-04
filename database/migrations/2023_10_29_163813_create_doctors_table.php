<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('specialization');
            $table->string('timing');
            $table->string('image');
            $table->string('available_days')->nullable();
            $table->string('days_available')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('doctors');
    }
};
