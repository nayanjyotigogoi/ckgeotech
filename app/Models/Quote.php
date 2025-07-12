<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

     protected $fillable = [
        'name', 'company', 'email', 'phone', 'project_type',
        'location', 'project_size', 'start_date', 'materials',
        'message', 'file_path',
    ];

    protected $casts = [
        'materials' => 'array',
        'start_date' => 'date',
    ];
}
