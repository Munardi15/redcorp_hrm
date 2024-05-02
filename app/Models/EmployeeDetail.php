<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeDetail extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['experience', 'job_title', 'job_desc'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
