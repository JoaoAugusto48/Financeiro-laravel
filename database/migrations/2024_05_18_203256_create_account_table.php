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
        Schema::create('account', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("bank_id");
            $table->unsignedBigInteger("accountHolder_id");
            $table->string("accountNumber");
            $table->float("balance");
            $table->timestamps();

            $table->foreign("bank_id")->references("id")->on("bank");
            $table->foreign("accountHolder_id")->references("id")->on("account_holder");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
