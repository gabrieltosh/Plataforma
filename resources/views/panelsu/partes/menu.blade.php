      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              	  <p class="centered"><a href="profile.html"><img src="{{asset('../imagenes')}}/{{Auth::user()->imagen}}" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">{{ucfirst(Auth::user()->nombre)}}</h5>              	  	
                  <li class="mt">
                      <a class="active" href="{{route('panelsu')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Inicio</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Administradores</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('administradors.index')}}">Mostrar Administradores</a></li>
                          <li><a  href="buttons.html">Añadir Administrador</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Estudiantes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('estudiantes.index')}}">Mostrar Estudiantes</a></li>
                          <li><a  href="buttons.html">Añadir Estudiante</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Docentes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('docentes.index')}}">Mostrar Docentes</a></li>
                          <li><a  href="gallery.html">Añadir Docente</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Materias</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('materias.index')}}">Mostrar Materias</a></li>
                          <li><a  href="login.html">Añadir Materia</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Carreras</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('carreras.index')}}">Mostrar Carreras</a></li>
                          <li><a  href="form_component.html">Añadir Carrera</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Semestres</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('semestres.index')}}">Mostrar Semestres</a></li>
                          <li><a  href="form_component.html">Añadir Semestre</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>