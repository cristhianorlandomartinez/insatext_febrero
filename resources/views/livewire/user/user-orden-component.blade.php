<div>
            <div class="container" style="padding: 30px 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       Mís Pedidos
                        </div>
                        <div class="panel-body">
                        <table class="table table-light">    
                                <thead>
                                    <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">celular</th>
                                    <th scope="col">Dirección </th>
                                    <th scope="col">País</th>
                                    <th scope="col">Departamento</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">Código postal</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                               @foreach($ordenes as $orden)
                                        <tr> 
                                            <td>{{$orden->total}}</td>
                                            <td>{{$orden->nombre}}</td>
                                            <td>{{$orden->apellidos}}</td>
                                            <td>{{$orden->email}}</td>
                                            <td>{{$orden->celular}}</td>
                                            <td>{{$orden->direccion}}</td>
                                            <td>{{$orden->pais}}</td>
                                            <td>{{$orden->departemento}}</td>
                                            <td>{{$orden->municipio}}</td>
                                            <td>{{$orden->codigo_p}}</td>
                                            <td>{{$orden->estado}}</td>
                                            <td>{{$orden->created_at}}</td>
                                            <td><a href="{{route('user.ordendetalle',['orden_id'=>$orden->id])}}" class="btn btn-primary">Ver Deatlles</td>                                            
                                        </tr>
                                @endforeach
                                </tbody>
                          </table>
                          {{$ordenes->links()}}
                        </div>
                    </div>                   
                </div>
          </div>                            
     </div>
</div>

