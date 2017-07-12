@extends('panel.layout')

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
                                  <td><img src="{{asset('../imagenes')}}/{{$carrera->imagen}}" alt="" width="80" height="76" class="img-rounded"></td>
                                  <td>{{$carrera->descripcion}}</td>
                                  <td>{{$carrera->created_at}}</td> 
                                  <td> 
                                        <a href="#" data-target="#modal-delete-{{$carrera->id}}" data-toggle="modal" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i></a>
                                        <a href="{{route('carrera.edit',$carrera)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                  </td>
                             </tr> 
                             @include('panel.carrera.modal')
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$carreras->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop