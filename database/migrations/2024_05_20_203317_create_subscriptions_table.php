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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title");
            $table->decimal("value", 10, 2);
            $table->string("description")->nullable();
            $table->string("transactionType");
            $table->boolean("favorite")->default(false);
            
            $table->unsignedBigInteger("account_id");
            $table->unsignedBigInteger("externalAccount_id")->nullable();
            $table->unsignedBigInteger("transactionCategory_id");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("account_id")->references("id")->on("accounts");
            $table->foreign("externalAccount_id")->references("id")->on("external_accounts");
            $table->foreign("transactionCategory_id")->references("id")->on("transaction_categories");
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
