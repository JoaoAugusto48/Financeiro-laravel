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
            $table->text('description')->nullable(); 
            $table->string('phone1', 25)->nullable(); 
            $table->string('phone2', 25)->nullable(); 
            $table->string('email')->nullable();
            $table->string('addressStreet', 255)->nullable();
            $table->string('addressNumber', 8)->nullable();
            $table->string('addressCity', 80)->nullable();
            $table->string('addressCountry', 50)->nullable();
            $table->string('addressComplement', 50)->nullable();
            $table->string('addressPostalCode', 20)->nullable();
            $table->boolean('status')->default(true); // Status do titular - default(true)
            $table->boolean('favorite')->default(false);
            
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
        });

        Schema::create('external_accounts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name");
            $table->text('description')->nullable(); 
            $table->string('phone1', 25)->nullable(); 
            $table->string('phone2', 25)->nullable(); 
            $table->string('email')->nullable();
            $table->string('addressStreet', 255)->nullable();
            $table->string('addressNumber', 8)->nullable();
            $table->string('addressCity', 80)->nullable();
            $table->string('addressCountry', 50)->nullable();
            $table->string('addressComplement', 50)->nullable();
            $table->string('addressPostalCode', 20)->nullable();
            $table->boolean('status')->default(true); 
            $table->boolean('favorite')->default(false);
            $table->unsignedBigInteger('accountCategory_id')->nullable(); 
            
            $table->foreign('accountCategory_id')->references('id')->on('account_categories');
            
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
        Schema::dropIfExists('external_accounts');
    }
};
