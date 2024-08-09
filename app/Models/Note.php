<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'note',
        'password',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
