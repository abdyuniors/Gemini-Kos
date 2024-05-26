<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'room_occupant_id',
        'month',
        'year',
        'total',
        'status',
        'payment_date',
        'notification_sent',
    ];
    protected $casts = [
        'total' => 'float',
        'payment_date' => 'date',
        'notification_sent' => 'boolean',
    ];
    public function roomOccupant()
    {
        return $this->belongsTo(RoomOccupant::class);
    }
}
