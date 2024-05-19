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
        Schema::create('allowance', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title");
            $table->unsignedBigInteger("account_id");
            $table->float("value");
            $table->string("kindTransaction");
            $table->string("descriptionReason");
            $table->unsignedBigInteger("relatedHolder_id")->nullable();
            $table->timestamps();

            $table->foreign("account_id")->references("id")->on("account");
            $table->foreign("relatedHolder_id")->references("id")->on("account_holder");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allowance');
    }
};
