<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'AppointmentNumber',
        'Name',
        'Email',
        'MobileNumber',
        'AppointmentDate',
        'AppointmentTime',
        'Specialization',
        'Doctor',
        'Message',
        'ApplyDate',
        'Remark',
        'Status',
    ];
}
