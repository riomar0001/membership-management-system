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
        Schema::create("organizations_setting", function (Blueprint $table) {
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("contact_number")->nullable();
            $table->string("address")->nullable();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("discord")->nullable();
            $table->string("logo")->nullable();
            $table->string("mission")->nullable();
            $table->string("vision")->nullable();
            $table->json("faqs")->nullable();
            $table->integer("membership_fee")->nullable();
            $table->integer("registration_start_date")->nullable();
            $table->integer("registration_end_date")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("organizations_setting");
    }
};
