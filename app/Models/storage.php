<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'storage';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'address', 'manager'
    ];
}
