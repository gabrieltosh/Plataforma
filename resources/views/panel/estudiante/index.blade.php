@extends('panel.layout')

@section('contenido')           
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Estudiantes Registrados</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Apellido</th>
                                  <th><i class="fa fa-edit"></i> Codigo</th>
                                  <th><i class="fa fa-edit"></i> Celular</th>
                                  <th><i class="fa fa-edit"></i> Correo</th>
                                  <th><i class="fa fa-edit"></i> Carrera</th>
                                  <th><i class="fa fa-edit"></i> Imagen de Perfil</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Creacion</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($estudiantes as $estudiante)
                              <tr> 
                                  <td>{{$estudiante->nombre}}</td>
                                  <td>{{$estudiante->apellido}}</td>
                                  <td>{{$estudiante->codigo}}</td>
                                  <td>{{$estudiante->celular}}</td>
                                  <td>{{$estudiante->email}}</td>
                                  <td>{{$estudiante->carrera->nombre}}</td>
                                  <td><img src="../imagenes/{{$estudiante->imagen}}" alt="" width="100" height="100" class="img-rounded"></td>
                                  <td>{{$estudiante->created_at}}</td> 
                                  <td> 
                                         <a href="#" data-target="#modal-delete-{{$estudiante->id}}" data-toggle="modal" class="btn btn-danger btn-sm">
                                          <i class="fa fa-trash-o"></i></a>
                                        <a href="{{route('estudiante.edit',$estudiante)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                       
                                  </td>
                             </tr> 
                              @include('panel.estudiante.modal')
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$estudiantes->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop