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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('description');
            $table->string('stock_out')->default(0);
            $table->string('stock_in')->default(0);
            $table->float('price_in')->default(0);
            $table->float('price_out')->default(0);
            $table->bigInteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('fornecedores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
