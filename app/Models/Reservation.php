<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'slot_id',
        'res_date'
    ];

    protected $dates = [
        'res_date'
    ];

    public function slot()
    {
        return $this->belongsTo(Slot::class);
    }
}
