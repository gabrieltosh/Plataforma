@extends('panelsu.layout')

@section('contenido')           
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Carreras Registrados</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Imagen</th>
                                  <th><i class="fa fa-edit"></i> Descripcion</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Creacion</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($carreras as $carrera)
                              <tr> 
                                  <td>{{$carrera->nombre}}</td>
                                  <td><img src="../imagenes/{{$carrera->imagen}}" alt="" width="100" height="100"></td>
                                  <td>{{$carrera->descripcion}}</td>
                                  <td>{{$carrera->created_at}}</td> 
                                  <td> 
                                        {!!Form::open(['route'=>['carreras.destroy', $carrera], 'method' => 'DELETE'])!!}
                                        <a href="{{route('carreras.edit',$carrera)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                        <button href="" onclick="return confirm('Eliminar Registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      {!!Form::close()!!}
                                  </td>
                             </tr> 
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$carreras->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop