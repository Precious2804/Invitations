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
        'company_name',
        'topic',
        'date',
        'time',
        'venue',
        'reception',
        'address',
        'duration',
        'reception_address',
        'color',
        'rsvp',
        'toast',
        'photo',
        'template'
    ];

    public $incrementing = 'false';
    protected $keyType = 'string';
}
