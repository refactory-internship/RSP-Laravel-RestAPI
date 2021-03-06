<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Room extends Model
{
    use HasFactory, SoftDeletes, MediaAlly;

    protected $table = 'rooms';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function photos()
    {
        return $this->hasMany(PhotoRooms::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
