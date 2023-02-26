<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDepartment extends Model
{
    use HasFactory;

    protected $table = 'add_departments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'c_code',
        'c_name',
        'd_code',
        'd_name',
    ];
}
