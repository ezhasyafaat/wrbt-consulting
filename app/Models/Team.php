<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'position',
        'about',
        'short_desc',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedin_url',
        'uplink',
        'image'
    ];
}
