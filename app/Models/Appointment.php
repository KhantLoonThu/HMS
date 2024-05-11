<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable = ['doctor_id', 'patient_id', 'date1',  'time1', 'date2', 'time2', 'diagnosis', 'file'];
    use HasFactory;
}
