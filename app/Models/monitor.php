<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitor extends Model
{
    use HasFactory;
    protected $primaryKey = 'idmonitor';
    protected $fillable=['idmonitor', 'nombreMonitor'];
    
}
