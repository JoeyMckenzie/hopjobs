<?php

use App\Models\JobType;
use App\Models\PaymentFrequency;
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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->default('');
            $table->string('description')->default('');
            $table->unsignedBigInteger('pay')->nullable();
            $table->enum('payment_frequency', PaymentFrequency::values())->nullable();
            $table->string('application_link')->nullable();
            $table->string('primary_contact')->nullable();
            $table->enum('job_type', JobType::values());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
