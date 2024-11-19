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
        Schema::create('transaction_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // Categorias como Saúde, Alimentação, Cosméticos
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);  
            $table->boolean("favorite")->default(false);
           
            $table->unsignedBigInteger('accountCategory_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            
            $table->foreign('accountCategory_id')->references('id')->on('account_categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_categories');
    }
};
