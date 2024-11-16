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
            $table->string('address_street', 255)->nullable();
            $table->string('address_number', 8)->nullable();
            $table->string('address_city', 80)->nullable();
            $table->string('address_country', 50)->nullable();
            $table->string('address_complement', 50)->nullable();
            $table->string('address_postal_code', 20)->nullable();
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
            $table->string('address_street', 255)->nullable();
            $table->string('address_number', 8)->nullable();
            $table->string('address_city', 80)->nullable();
            $table->string('address_country', 50)->nullable();
            $table->string('address_complement', 50)->nullable();
            $table->string('address_postal_code', 20)->nullable();
            $table->boolean('status')->default(true); 
            $table->boolean('favorite')->default(false);
            $table->unsignedBigInteger('account_category_id')->nullable(); 
            
            $table->foreign('account_category_id')->references('id')->on('account_categories');
            
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
