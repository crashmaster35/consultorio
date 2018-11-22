    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
      <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bienvenido {{ Auth::user()->name }}</span><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/usuario/perfil" title="Perfíl de usuario"><i class="icon-user"></i> Mi Perfíl</a></li>
            <li class="divider"></li>
            <li><a href="/usuario/consultas" title="Consultas del día"><i class="icon-check"></i> Mis Consultas</a></li>
            <li class="divider"></li>
            <li><a href="/logout"><i class="icon-key"></i> Salir</a></li>
          </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Mensajes</span> 
            @if ($messages > 0)
              <span class="label label-important">{{$messages}}</span> <b class="caret"></b>
            @endif

          </a>
          <ul class="dropdown-menu">
            <li><a class="sInbox" title="Bandeja de entrada" href="/mensajes/entrada"><i class="icon-envelope"></i> Buzón de Entrada
              @if ($messages > 0)
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-important">{{$messages}}</span>
              @endif

            </a></li>
            <li class="divider"></li>
            <li><a class="sOutbox" title="Bandeja de salida" href="/mensajes/salida"><i class="icon-arrow-up"></i> Buzón de Salida</a></li>
            <li class="divider"></li>
            <li><a class="sAdd" title="Crear un mensaje" href="/mensajes/crear"><i class="icon-plus"></i> Nuevo Mensaje</a></li>
            <li class="divider"></li>
            <li><a class="sTrash" title="Bandeja de mensajes eliminados" href="/mensajes/basura"><i class="icon-trash"></i> Basura</a></li>
          </ul>
        </li>
        <li class=""><a title="" href="/logout"><i class="icon icon-share-alt"></i> <span class="text">Salir</span></a></li>
      </ul>
    </div>
    <!--close-top-Header-menu-->