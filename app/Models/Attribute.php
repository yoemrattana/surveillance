<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attribute extends Model
{
    public $guarded = [];

    public function villageData(): BelongsToMany
    {
        return $this->belongsToMany(VillageData::class, 'village_value', 'parent_id', 'attribute_id' );
    }

    public function values(): HasMany
    {
        return $this->hasMany(VillageValue::class, 'attribute_id');
    }
}
