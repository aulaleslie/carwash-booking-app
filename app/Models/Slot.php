<?php

namespace App\Models;

use App\Enums\SlotStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status'];
    protected $casts = [
        'status' => SlotStatus::class
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
