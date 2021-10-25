<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    use HasFactory;

    protected $fillable = [
        'temp_id',
        'image',
        'name'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
