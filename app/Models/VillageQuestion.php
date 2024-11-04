<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VillageQuestion extends Model
{
    protected $table = 'village_question';
    protected $fillable = ['no', 'group_en', 'group_kh', 'description', 
                            'question_en', 'question_kh', 'unit_en', 'unit_kh'];
    public $guarded = [];


}
