<?php

declare(strict_types=1);

use App\Enums\ListingStatus;
use App\Enums\ListingType;
use App\Enums\PayType;
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
            $table->text('title');
            $table->text('description');
            $table->text('listing_url');
            $table->text('company');
            $table->text('company_logo')->nullable();
            $table->integer('pay_start')->nullable();
            $table->integer('pay_end')->nullable();
            $table->enum('pay_type', PayType::toArray())->nullable();
            $table->enum('status', ListingStatus::toArray());
            $table->enum('listing_type', ListingType::toArray());
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
