<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupant extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone'
    ];
    protected $casts = [
        'phone' => 'string'
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
