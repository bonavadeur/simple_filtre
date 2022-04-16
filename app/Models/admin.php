<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password', 'storage', 'storage_name', 'storage_addr'
    ];
}
