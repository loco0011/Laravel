<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $fillable = [
        'name',
        'email',
        'designation',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
