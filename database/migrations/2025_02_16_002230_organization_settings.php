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
            $table->string("name");
            $table->string("email");
            $table->string("contact_number");
            $table->string("address");
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("discord")->nullable();
            $table->string("logo");
            $table->string("mission");
            $table->string("vision");
            $table->json("faqs");
            $table->integer("membership_fee");
            $table->integer("registration_start_date");
            $table->integer("registration_end_date");
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
