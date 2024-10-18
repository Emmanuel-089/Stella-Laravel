<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    use HasFactory;
    protected $primaryKey = 'iddepto';
    protected $fillable=['iddepto', 'nombreDepto'];
    
}
