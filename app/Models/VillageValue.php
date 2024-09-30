<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VillageValue extends Model
{
    protected $table = 'village_value';
    public $guarded = [];

//    public function attribute(): HasMany
//    {
//        return $this->hasMany(Attribute::class, 'attribute_id', 'id');
//    }
}
