<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bill';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user', 'admin', 'status', 'date', 'address', 'detail'
    ];
}
