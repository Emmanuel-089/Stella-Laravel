<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discoduro extends Model
{
    use HasFactory;
    protected $primaryKey = 'iddiscoduro';
    protected $fillable=['iddiscoduro', 'capacidadDiscoDuro'];
    
}
