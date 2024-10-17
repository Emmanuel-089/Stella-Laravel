<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antivirus extends Model
{
    use HasFactory;
    protected $primaryKey = 'idlicantivirus';
    protected $fillable=['idlicantivirus', 'nombreLicAntivirus'];
    
}
