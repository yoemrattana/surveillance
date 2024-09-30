<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Module extends Model
{
    use HasFactory;

    /* Attributes */

    protected $guarded = ['id'];

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::observe(ModuleObserver::class);
    // }

    /* Relations */

    public function permissions() : HasMany
    {
        return $this->hasMany(Permission::class, 'module_id', 'id');
    }
}
