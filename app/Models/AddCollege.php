<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCollege extends Model
{
    use HasFactory;

    protected $table = 'add_colleges';
    protected $primaryKey = 'id';

    protected $fillable = [
        'c_code',
        'c_name',
    ];
}
