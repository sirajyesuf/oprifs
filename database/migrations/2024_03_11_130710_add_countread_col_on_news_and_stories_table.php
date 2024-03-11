<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('news_and_stories', function (Blueprint $table) {

            $table->unsignedBigInteger("views")->default(0);
        });
    }

   
    public function down(): void
    {
        Schema::table('news_and_stories', function (Blueprint $table) {

            $table->dropColumn("views");
        });
    }
};
