<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/images/adminLTE-imgs/avatar5.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <!-- Status -->
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li>
                <a href="/organizacion/esuperadmin/{{Auth::user()->id}}"><i class="fa fa-institution"></i> <span>Organización</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> <span>Tablero de Control</span></a>
            </li>
            <li>
                <a href="/procesos"><i class="fa fa-cogs"></i> <span>Procesos</span></a>
            </li>
            <li>
                <a href="/actividads"><i class="fa fa-coffee"></i> <span>Actividades</span></a>
            </li>
            <li>
                <a href="/indicadors"><i class="fa fa-check-square"></i> <span>Indicadores</span></a>
            </li>
            @if(Auth::user()->role == 2 || Auth::user()->role == 1)
            <li class="treeview">
                <a href="#"><i class="fa fa-wrench"></i> <span>Administracion</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/destinos"><i class="fa fa-circle-o"></i> Destinos</a></li>
                    <li><a href="/frecuencias"><i class="fa fa-circle-o"></i> Frecuencias</a></li>
                    <li><a href="/proveedors"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                    <li><a href="/recursos"><i class="fa fa-circle-o"></i> Recursos</a></li>
                    <li><a href="/responsables"><i class="fa fa-circle-o"></i> Responsables</a></li>
                    <li><a href="/roles"><i class="fa fa-circle-o"></i> Roles</a></li>
                    <li><a href="/tipoIndicadors"><i class="fa fa-circle-o"></i> Tipos Indicador</a></li>
                    <li><a href="/usuarios"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                </ul>
            </li>
            @endif
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>