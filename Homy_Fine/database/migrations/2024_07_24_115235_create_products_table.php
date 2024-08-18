<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string ('Product_Name');
            $table->double ('Product_Price');
            $table->string ('Product_Imge');
            $table->string ('Description');
            $table->foreignId ('Section_ID')->constrained('sections');
            $table->string ('Color');
            $table->string ('Size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
