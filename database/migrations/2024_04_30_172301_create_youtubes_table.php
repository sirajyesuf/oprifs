<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('youtubes', function (Blueprint $table) {
            $table->id();
            $table->string('video_id');
            $table->string('title');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('youtubes');
    }
};
