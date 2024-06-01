<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\PartnerType;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('website');
            $table->enum('type',[PartnerType::DONORPARTNER->value,PartnerType::GOVERMENTDEVELOPMENTPARTNER->value]);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
