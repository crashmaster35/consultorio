    <!--sidebar-menu-->
    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-dashboard"></i> Escritorio</a>
      <ul>
        @foreach ($user_modules as $modules)
          @if (Permissions::hasChildren($modules['module']->id))
            <li class="submenu {{$a[$modules['module']->id]}}"> <a href="{{$modules['module']->url}}"><i class="icon icon-{{$modules['module']->icon}}"></i> <span>{{$modules['module']->name}}</span> <span class="label label-important">V</span></a>
              <ul>
                @foreach (Permissions::getChildren($modules['module']->id) as $children)
                  <li class="{{$b[$children->id]}}"><a href="{{$modules['module']->url}}{{$children->url}}">{{$children->name}}</a></li>
                @endforeach
              </ul>
            </li>          
          @else
            <li class="{{$a[$modules['module']->id]}}"><a href="{{$modules['module']->url}}"><i class="icon icon-{{$modules['module']->icon}}"></i> <span>{{$modules['module']->name}}</span></a> </li>
          @endif
        @endforeach

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
