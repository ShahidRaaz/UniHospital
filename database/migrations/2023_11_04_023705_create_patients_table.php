<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email_id');
            $table->string('patient_id');
            $table->string('mobile_no');
            $table->string('profile_image');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
 