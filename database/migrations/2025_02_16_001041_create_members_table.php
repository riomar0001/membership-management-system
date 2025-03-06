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
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('student_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('umindanao_email')->unique();
            $table->string('program');
            $table->integer('year_level');
            $table->string('proof_of_membership');
            $table->boolean('agree_to_terms_and_conditions');
            $table->timestamps();
        });

        Schema::create('membership_status', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('members_id')->unique();
            $table->enum('status', ['Pending', 'Approved', 'Rejected']);
            $table->string('approved_by')->nullable();
            $table->string('rejected_by')->nullable();
            $table->string('rejection_title')->nullable();
            $table->string('rejection_reason')->nullable();
            $table->string('update_token')->nullable();
            $table->timestamps(3);

            $table->foreign('members_id')->references('id')->on('members')->onDelete('cascade');
        });


        Schema::create('membership_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('members_id')->unique();
            $table->enum('type', ['New', 'Old', 'Volunteer', 'Officer']);
            $table->timestamp('created_at', 3)->useCurrent();
            $table->timestamp('updated_at', 3)->nullable();
            $table->string('reviewed_by')->nullable();

            $table->foreign('members_id')->references('id')->on('members')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_types');
        Schema::dropIfExists('membership_status');
        Schema::dropIfExists('members');
    }
};
