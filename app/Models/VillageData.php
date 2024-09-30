<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VillageData extends Model
{
    public $guarded = [];

    public function attribute(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class, 'village_value', 'attribute_id', 'parent_id');
    }
}
