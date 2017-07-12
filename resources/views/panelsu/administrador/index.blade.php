@extends('panelsu.layout')

@section('contenido')           
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Administradors Registrados</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Apellido</th>
                                  <th><i class="fa fa-edit"></i> Codigo</th>
                                  <th><i class="fa fa-edit"></i>Celular</th>
                                  <th><i class="fa fa-edit"></i>Correo</th>
                                  <th><i class="fa fa-edit"></i>Imagen de Perfil</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Creacion</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($administradores as $administrador)
                              <tr> 
                                  <td>{{$administrador->nombre}}</td>
                                  <td>{{$administrador->apellido}}</td>
                                  <td>{{$administrador->codigo}}</td>
                                  <td>{{$administrador->celular}}</td>
                                  <td>{{$administrador->email}}</td>
                                  <td><img src="../imagenes/{{$administrador->imagen}}" alt="" width="150" height="150"></td>
                                  <td>{{$administrador->created_at}}</td> 
                                  <td> 
                                        {!!Form::open(['route'=>['administradors.destroy', $administrador], 'method' => 'DELETE'])!!}
                                        <a href="{{route('administradors.edit',$administrador)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                        <button href="" onclick="return confirm('Eliminar Registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      {!!Form::close()!!}
                                  </td>
                             </tr> 
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$administradores->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop