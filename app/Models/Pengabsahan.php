<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengabsahan extends Model
{
    use HasFactory;
    protected $table = 'pengabsahan';
    protected $guarded = [];

    public function surat()
    {
        return $this->hasMany();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
