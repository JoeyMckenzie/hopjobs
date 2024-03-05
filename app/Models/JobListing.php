<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ListingStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class JobListing extends Model
{
    use HasFactory;

    /**
     * @return BelongsToMany<JobTag>
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(JobTag::class);
    }

    public function isInDisplayableStatus(): bool
    {
        $status = ListingStatus::tryFrom($this->status);

        if (is_null($status)) {
            return false;
        }

        return $status == ListingStatus::OPEN;
    }

    /**
     * @param  Builder<JobListing>  $query
     */
    public function scopeOpenStatus(Builder $query): void
    {
        $query->where('status', '=', ListingStatus::OPEN->value);
    }
}
