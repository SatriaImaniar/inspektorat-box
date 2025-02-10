<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InviteMail extends Model
{
    use HasFactory;

    protected $fillable = ['sender', 'came', 'day', 'activity', 'place', 'description'];
}
