<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invites extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'invite_id',
        'bride_fam',
        'groom_fam',
        'bride',
        'groom',
        'departed',
        'title',
        'celebrant',
        'event',
        'event_name',
        'date',
        'time',
        'venue',
        'reception',
        'address',
        'reception_address',
        'color',
        'rsvp',
        'toast',
        'template'
    ];

    public $incrementing = 'false';
    protected $keyType = 'string';
}