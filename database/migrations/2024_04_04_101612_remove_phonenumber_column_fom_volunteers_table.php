<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('volunters', function (Blueprint $table) {
            $table->dropColumn('phonenumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('volunters', function (Blueprint $table) {
            $table->addColumn('string','phonenumber');
        });
    }
};
