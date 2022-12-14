<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ServiceUser extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id'
    ];

 public function user()
{
    return $this->belongsTo(User::class);
}

public function service()
{
    return $this->belongsTo(Service::class);
}

}
