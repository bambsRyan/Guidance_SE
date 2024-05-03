<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'last_name',
        'first_name',
        'middle_name',
        'position',
        'college',
        'course',
        'sex',
        'age',
        'birthdate',
        'religion',
        'civil_status',
        'email_address',
        'password',
        'account_status',
    ];
}
