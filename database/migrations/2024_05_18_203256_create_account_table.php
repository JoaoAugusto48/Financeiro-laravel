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
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("bank_id");
            $table->unsignedBigInteger("accountHolder_id");
            $table->string("accountNumber");
            $table->decimal("balance", 20, 2);
            $table->boolean("favorite")->default(false);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign("bank_id")->references("id")->on("banks");
            $table->foreign("accountHolder_id")->references("id")->on("account_holders");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
