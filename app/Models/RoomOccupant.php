<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
     // Accessor untuk Entry Date
     protected function getEntryDateAttribute($value)
     {
         return Carbon::parse($value)->format('j F Y');
     }

     // Accessor untuk Exit Date
     protected function getExitDateAttribute($value)
     {
         return Carbon::parse($value)->format('j F Y');
     }
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
