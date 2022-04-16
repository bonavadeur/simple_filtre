<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class import extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'import';
    protected $primaryKey = 'id';
    protected $fillable = [
        'admin', 'provider', 'detail', 'date'
    ];
}
