<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InviteMail extends Model
{
    protected $table = 'invite_mails';
    protected $fillable = [
        'sender',
        'masuk',
        'hari',
        'kegiatan',
        'tempat',
        'keterangan',
    ];
}
