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
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->float("value");
            $table->string("description")->nullable();
            $table->string('transactionType');
            $table->date('dateTransaction');
            
            $table->unsignedBigInteger("account_id");
            $table->unsignedBigInteger("transactionCategory_id");
            $table->unsignedBigInteger("externalAccount_id")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("account_id")->references("id")->on("accounts");
            $table->foreign("transactionCategory_id")->references("id")->on("transaction_categories");
            $table->foreign("externalAccount_id")->references("id")->on("external_accounts");
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
