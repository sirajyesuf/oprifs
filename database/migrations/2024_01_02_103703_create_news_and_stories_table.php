<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\PostType;
return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('news_and_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('cover_image');
            $table->longText('content');
            
            $table->string('seo_title', 60)->nullable();
            $table->string('seo_description', 160)->nullable();

            $table->enum('type',[PostType::NEWS->value,PostType::STORIES->value]);

            $table->timestamps();
            $table->softDeletes();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('news_and_stories');
    }
};
