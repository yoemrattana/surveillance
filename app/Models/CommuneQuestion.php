<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CommuneQuestion extends Model
{
    protected $table = 'commune_question';
    protected $fillable = ['no', 'group_en', 'group_kh', 'sub_group_en', 'sub_group_kh', 
                            'question_en', 'question_kh', 'unit_en', 'unit_kh'];
    public $guarded = [];


}
