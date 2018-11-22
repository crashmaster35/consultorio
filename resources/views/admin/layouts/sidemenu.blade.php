    <!--sidebar-menu-->
    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-dashboard"></i> Escritorio</a>
      <ul>
        <li class="{{$a[0]}}"><a href="/"><i class="icon icon-dashboard"></i> <span>Escritorio</span></a> </li>
        <li class="{{$a[1]}}"> <a href="/citas"><i class="icon icon-calendar"></i> <span>Citas</span></a> </li>
        <!-- La seccion de Citas contendrá:
                - Calendario con las citas asignadas en general
                - Filtrado por Medico
                - Filtrado por Paciente
                - CRUD de Citas
        -->
        <li  class="{{$a[2]}}"> <a href="/prospecto"><i class="icon icon-group"></i> <span>Prospectos</span></a> </li>
        <!-- La seccion de Prospectos contendrá:
                - Lista de Prospectos
                  - CRUD de Prospectos
                  - Busqueda
                  - Convertir Prospecto en Paciente
                  - Odontograma
                  - Radiografias
                      - CRUD
                  - Fotografías
                  - Videos
                  - Cotización
                      - CRUD Odontograma
                      - CRUD Rx
        -->
        <li  class="{{$a[3]}}"> <a href="/pacientes"><i class="icon icon-user"></i> <span>Pacientes</span></a> </li>
        <!-- La seccion de Pacientes contendrá:
                - Lista de Pacientes
                  - CRUD de Paciente
                  - Busqueda
                  - Especialidad
                  - Historia Clinica
                      - Impresion de Historia Clínica
                  - Alta de Evento (Resumen de Cita y Procedimiento)
                  - Odontograma
                  - Radiografias
                      - CRUD
                  - Estudios de Laboratorio
                      - CRUD
                  - Cotización
                      - CRUD Odontograma
                      - CRUD Rx
                  - Pagos y Adeudos
                  - Citas
        -->
        
        <li class="submenu {{$a[4]}}"> <a href="/inventario"><i class="icon icon-barcode"></i> <span>Inventario</span> <span class="label label-important">4</span></a>
          <ul>
            <li class="{{$b[0]}}"><a href="/inventario/gastos">Gastos</a></li>
            <li class="{{$b[1]}}"><a href="/inventario/ingresos">Ingresos</a></li>
            <li class="{{$b[2]}}"><a href="/inventario/categoria_de_gastos">Categoría de gastos</a></li>
            <li class="{{$b[3]}}"><a href="/inventario/categoria_de_ingresos">Categoría de ingresos</a></li>
          </ul>
        </li>
        
        <li class="submenu {{$a[5]}}"> <a href="/contabilidad"><i class="icon icon-money"></i> <span>Contabilidad</span> <span class="label label-important">8</span></a>
          <ul>
            <li class="{{$b[4]}}"><a href="/contabilidad/impuestos">Impuestos</a></li>
            <li class="{{$b[5]}}"><a href="/contabilidad/cuentas">Cuentas</a></li>
            <li class="{{$b[6]}}"><a href="/contabilidad/ejercicios">Ejercicios</a></li>
            <li class="{{$b[7]}}"><a href="/contabilidad/asientos">Asientos</a></li>
            <li class="{{$b[8]}}"><a href="/contabilidad/grupos">Grupos y Epígrafes</a></li>
            <li class="{{$b[9]}}"><a href="/contabilidad/formas_de_pago">Formas de Pago</a></li>
            <li class="{{$b[10]}}"><a href="/contabilidad/series">Series</a></li>
            <li class="{{$b[11]}}"><a href="/contabilidad/remesas">Remesas</a></li>
          </ul>
        </li>

        <li class="submenu {{$a[6]}}"> <a href="/compras"><i class="icon icon-credit-card"></i> <span>Compras</span> <span class="label label-important">4</span></a>
          <ul>
            <li class="{{$b[12]}}"><a href="/compras/ordenes">Pedidos</a></li>
            <li class="{{$b[13]}}"><a href="/compras/proveedores">Proveedores</a></li>
            <li class="{{$b[14]}}"><a href="/compras/facturas">Facturas</a></li>
            <li class="{{$b[15]}}"><a href="/compras/recibos">Recibos</a></li>
          </ul>
        </li>

        <li class="submenu {{$a[7]}}"> <a href="#"><i class="icon icon-cog"></i> <span>Configuración</span> <span class="label label-important">6</span></a>
          <ul>
            <li class="{{$b[16]}}"><a href="/configuracion/perfiles_de_usuarios">Perfiles de Usuarios</a></li>
            <li class="{{$b[17]}}"><a href="/configuracion/usuarios">Usuarios</a></li>
            <li class="{{$b[18]}}"><a href="/configuracion/empresa">Empresa</a></li>            
            <li class="{{$b[19]}}"><a href="/configuracion/servicios">Servicios</a></li>
            <li class="{{$b[20]}}"><a href="/configuracion/especialidades">Especialidades</a></li>
            <li class="{{$b[21]}}"><a href="/configuracion/doctores">Doctores</a></li>
          </ul>
        </li>

        <li class="submenu {{$a[8]}}"> <a href="/"><i class="icon icon-bar-chart"></i> <span>Reportes</span> <span class="label label-important">6</span></a>
          <ul>
            <li class="{{$b[22]}}"><a href="/reportes/clientes">Clientes</a></li>
            <li class="{{$b[23]}}"><a href="/reportes/prospectos">Prospectos</a></li>
            <li class="{{$b[24]}}"><a href="/reportes/gastos">Gastos</a></li>
            <li class="{{$b[25]}}"><a href="/reportes/ingresos">Ingresos</a></li>
            <li class="{{$b[26]}}"><a href="/reportes/facturas">Facturas</a></li>
            <li class="{{$b[27]}}"><a href="/reportes/pedidos">Pedidos</a></li>
          </ul>
        </li>
        <li class="content"> <span>Clientes vs Prospectos</span>
          <div class="progress progress-mini progress-danger active progress-striped">
            <div style="width: {{$percent}}%;" class="bar"></div>
          </div>
          <span class="percent">{{$percent}}%</span>
          <div class="stat">{{$clients}} / {{$prospect}}</div>
        </li>
        <li class="content"> <span>Transcurso de Citas</span>
          <div class="progress progress-mini active progress-striped">
            <div style="width: {{$dpercent}}%;" class="bar"></div>
          </div>
          <span class="percent">{{$dpercent}}%</span>
          <div class="stat">{{$finished}} finalizadas / {{$programmed}} programadas</div>
        </li>
      </ul>
    </div>
    <!--sidebar-menu-->
