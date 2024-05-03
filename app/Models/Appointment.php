<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'student_number',
        'contact_number',
        'counsellor',
        'setup',
        'guardian_name',
        'relationship_to_guardian',
        'guardian_contact',
        'course',
        'email',
        'college',
        'date',
        'time',
        'note',
    ];

}
