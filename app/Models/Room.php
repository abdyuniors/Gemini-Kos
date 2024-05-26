<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'facilities',
        'price',
        'status'
    ];

    protected $casts = [
        'price' => 'float'
    ];

    // public function roomOccupants()
    // {
    //     return $this->hasMany(RoomOccupant::class);
    // }

    // public function invoices()
    // {
    //     return $this->hasManyThrough(Invoice::class, RoomOccupant::class);
    // }
}
