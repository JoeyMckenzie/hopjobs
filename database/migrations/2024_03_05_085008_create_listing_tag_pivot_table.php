<?php

declare(strict_types=1);

use App\Models\JobListing;
use App\Models\JobTag;
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
        Schema::create('job_listing_job_tag', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(JobListing::class);
            $table->foreignIdFor(JobTag::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_tag_pivot');
    }
};
