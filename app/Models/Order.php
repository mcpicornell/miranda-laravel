<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_guest_id',
        'roomId',
        'type',
        'description',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_guest_id', 'id');
    }

    
    public function room()
    {
        return $this->belongsTo(Room::class, 'roomId', 'id');
    }
}
