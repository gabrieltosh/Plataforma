
@extends('panelsu.layout')
@section('contenido')           
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> semestres Registrados</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Año Perteneciente</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Creacion</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($semestres as $semestre)
                              <tr> 
                                  <td>{{$semestre->nombre}}</td>
                                  <td>{{$semestre->año}}</td>
                                  <td>{{$semestre->created_at}}</td> 
                                  <td> 
                                        {!!Form::open(['route'=>['semestres.destroy', $semestre], 'method' => 'DELETE'])!!}
                                        <a href="{{route('semestres.edit',$semestre)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                        <button href="" onclick="return confirm('Eliminar Registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      {!!Form::close()!!}
                                  </td>
                             </tr> 
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$semestres->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop