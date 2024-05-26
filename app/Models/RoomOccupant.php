<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomOccupant extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'room_id',
        'occupant_id',
        'entry_date',
        'exit_date'
    ];
    protected $casts = [
        'entry_date' => 'date',
        'exit_date' => 'date'
    ];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function occupant()
    {
        return $this->belongsTo(Occupant::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
