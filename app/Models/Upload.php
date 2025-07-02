<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upload extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'uploads';
    protected $fillable = [
        'title',
        'description',
        'type',
        'file_name',
        'user_id'
    ];
}
