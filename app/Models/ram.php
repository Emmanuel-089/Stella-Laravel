<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ram extends Model
{
    use HasFactory;
    protected $primaryKey = 'idram';
    protected $fillable=['idram', 'capacidadRam'];
    
}
