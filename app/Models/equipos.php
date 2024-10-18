<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;
    protected $primaryKey = 'idequipo';
    protected $fillable=['idequipo', 'idedf', 'iddepto', 'idarea', 'idcatego', 'idmarca', 'modelo', 'serie',
     'idmonitor', 'puerto_ip', 'idlicenciaso', 'licencia_legal_so', 'idprocesador', 'iddiscoduro', 'idram', 'idlicantivirus', 'idlicoffice',
     'licencia_legal_office', 'costo', 'correo', 'accesorios', 'condicion', 'comentario', 'fecha_mantenimiento'];
    
}
