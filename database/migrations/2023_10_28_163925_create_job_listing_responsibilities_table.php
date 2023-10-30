<?php

use App\Models\JobListing;
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
        Schema::create('job_listing_responsibilities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('responsibility')->default('');
            $table->foreignIdFor(JobListing::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listing_responsibilities');
    }
};
