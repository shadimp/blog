<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newscontent extends Model
{
    use HasFactory;

    protected $fillable = [
        'summery',
        'fullcontent',
    ];
}
