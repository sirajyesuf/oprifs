<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->string('email');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('linkedin');
            $table->string('instagram');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
