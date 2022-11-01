<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $fillables = [
        'id',
        'title',
        'description',
        'use_id',
        'active',
    ];
    public function user()
    {
        return $this ->belongsTo(User::class);
    }
}
