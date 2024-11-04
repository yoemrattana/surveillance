<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DistrictQuestion extends Model
{
    protected $table = 'district_question';
    protected $fillable = ['no', 'short_code', 'group_en', 'group_kh', 
                            'question_en', 'question_kh', 'unit_en', 'unit_kh', 
                            'description'];
    public $guarded = [];


}
