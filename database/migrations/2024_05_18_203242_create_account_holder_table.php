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
        Schema::create('account_holders', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name");
            $table->boolean("linkAccount");
            $table->string('type'); // Tipo de titular (Pessoa, Empresa, Comércio, etc.)
            $table->text('description')->nullable(); // Descrição ou observação
            $table->string('phone', 20)->nullable(); // Informações de contato
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->boolean('status')->default(true); // Status do titular - default(true)
            $table->boolean("favorite")->default(false);
            $table->unsignedBigInteger('account_holder_category_id')->nullable(); // Categoria (Pessoa, Loja, etc.)
            
            $table->foreign('account_holder_category_id')->references('id')->on('account_holder_categories');
            
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_holders');
    }
};
