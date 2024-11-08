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
        Schema::create('allowances', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title");
            $table->unsignedBigInteger("account_id");
            $table->decimal("value", 10, 2);
            $table->string("kindTransaction");
            $table->string("description")->nullable();
            $table->boolean("favorite")->default(false);
            $table->unsignedBigInteger("relatedHolder_id")->nullable();
            $table->unsignedBigInteger("transactionCategory_id");
            $table->timestamps();

            $table->foreign("account_id")->references("id")->on("accounts");
            $table->foreign("transactionCategory_id")->references("id")->on("transaction_categories");
            $table->foreign("relatedHolder_id")->references("id")->on("account_holders");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allowances');
    }
};
