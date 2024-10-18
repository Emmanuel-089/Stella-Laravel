<div class="container">
        <h1 class="my-4">REPORTE DE COMPUTADORAS</h1>

            <button type="button" class="btn btn-success">Alta de compu</button>
        

        <table class="table table-hover mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>Equipo</th>
                    <th>Edificio</th>
                    <th>Departamento</th>
                    <th>Area</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Procesador</th>
                    <th>Ram</th>
                    <th>Disco duro</th>
                    <th>Sistema Operativo</th>
                    <th>Licencia SO</th>
                    <th>Office</th>
                    <th>Office Legal</th>
                    <th>Monitor</th>
                    <th>Antivirus</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($reporte1 as $r)
                <tr>
                    <td>{{$r->idequipo}}</td>
                    <td>{{$r->nombreEdf}}</td>
                    <td>{{$r->nombreDepto}}</td>
                    <td>{{$r->nombreArea}}</td>
                    <td>{{$r->nombreCatego}}</td>
                    <td>{{$r->nombreMarca}}</td>
                    <td>{{$r->nombreProcesador}}</td>
                    <td>{{$r->capacidadRam}}</td>
                    <td>{{$r->capacidadDiscoDuro}}</td>
                    <td>{{$r->nombreLicSo}}</td>
                    <td>{{$r->licencia_legal_so}}</td>
                    <td>{{$r->nombreLicOffice}}</td>
                    <td>{{$r->licencia_legal_office}}</td>
                    <td>{{$r->nombreMonitor}}</td>
                    <td>{{$r->nombreLicAntivirus}}</td>
                    
                </tr>
                @endforeach
            </tbody>
           
        </table>
    </div>