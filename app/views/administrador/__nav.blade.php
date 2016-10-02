<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('dist/img/avatar04.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Administrador ADP</p>                       
        </div>
    </div>   
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{ URl::to('Administrador') }}"><i class="fa fa-home"></i><span>Home</span></a></li>       
        <li class="treeview">
            <a href="#"><i class="fa fa-sun-o"></i> <span>Slider</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ URL::to('Administrador/Slider/Index') }}">Index</a></li>               
                <li><a href="{{ URL::to('Administrador/Slider/Desarrollo') }}">Desarrollo Institucional</a></li>               
                <li><a href="{{ URL::to('Administrador/Slider/Organizacion') }}">Organizacion Social</a></li>               
                <li><a href="{{ URL::to('Administrador/Slider/Salud') }}">Salud Comunitaria</a></li>               
                <li><a href="{{ URL::to('Administrador/Slider/Ambiente') }}">Medio Ambiente</a></li> 
                <li>
                    <a href="#">RHF
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ URL::to('Administrador/Slider/Recurso') }}"><i class="fa fa-circle-o"></i>Recurso Hídrico</a></li>
                        <li><a href="{{ URL::to('Administrador/Slider/Flora') }}"><i class="fa fa-circle-o"></i>Flora y Fauna</a></li>
                        <li><a href="{{ URL::to('Administrador/Slider/Senderos') }}"><i class="fa fa-circle-o"></i>Senderos</a></li>                    
                    </ul>
                </li> 

            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-rss"></i> <span>Noticias</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ URL::to('Administrador/Noticias') }}">Ver</a></li>
                <li><a href="{{ URL::to('Administrador/Noticias/Add') }}">Agregar</a></li>                
            </ul>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>