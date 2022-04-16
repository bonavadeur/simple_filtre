<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _datatype extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = '_datatype';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'info', 'time'
    ];
}
