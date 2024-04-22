<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('institute');
            $table->string('account_number');
            $table->string('account_holder');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
