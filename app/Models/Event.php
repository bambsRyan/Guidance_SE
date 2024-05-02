<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'event_number',
        'title',
        'description',
        'time',
        'date',
        'venue',
        'image'
    ];


    public function getDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('m-d-Y');
    }
}
