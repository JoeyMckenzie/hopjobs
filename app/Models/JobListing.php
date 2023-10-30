<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobListing extends Model
{
    use HasFactory;

    /**
     * @return HasMany<JobListingResponsibility>
     */
    public function responsibilities(): HasMany
    {
        return $this->hasMany(JobListingResponsibility::class);
    }
}
