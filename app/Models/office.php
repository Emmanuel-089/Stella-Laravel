<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    use HasFactory;
    protected $primaryKey = 'idlicoffice';
    protected $fillable=['idlicoffice', 'nombreLicOffice'];
    
}