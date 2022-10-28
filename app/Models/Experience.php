<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillables = [
        'id',
        'user_id',
        'name',
        'description',
        'active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
