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
            $table->string('transaction_type');
            $table->date('date_transaction');
            
            $table->unsignedBigInteger("account_id");
            $table->unsignedBigInteger("transaction_category_id");
            $table->unsignedBigInteger("external_account_id")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("account_id")->references("id")->on("accounts");
            $table->foreign("transaction_category_id")->references("id")->on("transaction_categories");
            $table->foreign("external_account_id")->references("id")->on("external_accounts");
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
