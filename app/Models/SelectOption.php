<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectOption extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'userid',
        'ques_id',
        'option',
        'page',
    ];
}
