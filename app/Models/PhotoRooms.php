<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoRooms extends Model
{
    use HasFactory;

    protected $table = 'photo_rooms';
    protected $guarded = [];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
