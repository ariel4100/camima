
<nav id="sidebar" class="position-fixed h-100" style=" overflow-y:auto;">
    <ul class="list-unstyled">
        <div class="text-center">
            <img src="{{ asset($logos->text{'header'} ?? 'http://camima.org.ar/imagenes/iconos/logo.png') }}" alt="" class="img-fluid p-4">
        </div>
        <!---HOME---->
        <li class="">
            <a href="#Home" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">home</i>Inicio<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Home">
                <li><a href="{{ route('contenido.index', ['section' => 'home']) }}"><i class="fas fa-chevron-right px-4"></i>Informacion</a></li>
                {{--<li><a href="{{ route('contenido.index', ['section' => 'home', 'type' => 'imagen']) }}"><i class="fas fa-chevron-right px-4"></i>Contenido</a></li>--}}
                <li><a href="{{ route('slider.list', ['seccion' => 'home']) }}"><i class="fas fa-chevron-right px-4"></i>Slider</a></li>
            </ul>
        </li>
        <!---INSTITUCIONAL---->
        <li class="">
            <a href="#Nosotros" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">business</i>Institucional<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Nosotros">
                <li><a href="{{ route('contenido.index', ['section' => 'nosotros']) }}"><i class="fas fa-chevron-right px-4"></i>Quienes Somos</a></li>
                <li><a href="{{ route('contenido.index', ['section' => 'autoridades']) }}"><i class="fas fa-chevron-right px-4"></i>Autoridades</a></li>
                <li><a href="{{ route('contenido.index', ['section' => 'objetivos']) }}"><i class="fas fa-chevron-right px-4"></i>Objetivos</a></li>
                <li><a href="{{ route('contenido.index', ['section' => 'misionyvision']) }}"><i class="fas fa-chevron-right px-4"></i>Mision y Vision</a></li>
                <li><a href="{{ route('contenido.index', ['section' => 'interes']) }}"><i class="fas fa-chevron-right px-4"></i>Enlaces de Interes</a></li>

                <li><a href="{{ route('slider.list', ['seccion' => 'institucional']) }}"><i class="fas fa-chevron-right px-4"></i>Slider</a></li>
            </ul>
        </li>
        <!---SERVICIOS---->
        <li class="">
            <a href="#Venta" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">verified_user</i>Servicios<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Venta">
                <li><a href="{{ route('contenido.index', ['section' => 'nuestrasede']) }}"><i class="fas fa-chevron-right px-4"></i>Nuestra Sede</a></li>
                <li><a href="{{ route('contenido.index', ['section' => 'asesorias']) }}"><i class="fas fa-chevron-right px-4"></i>Asesorias</a></li>
                <li><a href="{{ route('contenido.index', ['section' => 'cursosyreuniones']) }}"><i class="fas fa-chevron-right px-4"></i>Cursos y Reuniones</a></li>

                <li><a href="{{ route('slider.list', ['seccion' => 'servicios']) }}"><i class="fas fa-chevron-right px-4"></i>Slider</a></li>
            </ul>
        </li>
        <!---GREMIALES---->
        <li class="">
            <a href="#Gremiales" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">verified_user</i>Gremiales<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Gremiales">
                <li><a href="{{ route('gremial',['gremial' => 'uom']) }}"><i class="fas fa-chevron-right px-4"></i>UOM</a></li>
                <li><a href="{{ route('gremial',['gremial' => 'asimra']) }}"><i class="fas fa-chevron-right px-4"></i>Asimra</a></li>

                <li><a href="{{ route('slider.list', ['seccion' => 'gremiales']) }}"><i class="fas fa-chevron-right px-4"></i>Slider</a></li>
            </ul>
        </li>
        <!---PRENSA---->
        <li class="">
            <a href="#Prensa" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">question_answer</i>Prensa<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Prensa">
                <li><a href="{{ route('categoria.index') }}"><i class="fas fa-chevron-right px-4"></i>Categoria</a></li>
                <li><a href="{{ route('noticia.index') }}"><i class="fas fa-chevron-right px-4"></i>Listado de noticias</a></li>
            </ul>
        </li>

        <!---CAPACITACION---->
        <li class="">
            <a href="#Capacitación" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">video_library</i>Capacitación<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Capacitación">
                <li><a href="{{ route('cursos.index',['cursos' => 'cursos']) }}"><i class="fas fa-chevron-right px-4"></i>Cursos estandar</a></li>
                <li><a href="{{ route('cursos.index',['cursos' => 'otros']) }}"><i class="fas fa-chevron-right px-4"></i>Cursos especiales</a></li>
            </ul>
        </li>
        <!---CONTACTO---->
        <li class="">
            <a href="#Contacto" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">contact_mail</i>Contacto<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Contacto">
                <li><a href="{{ route('contenido.index', ['section' => 'contacto']) }}"><i class="fas fa-chevron-right px-4"></i>Informacion</a></li>
            </ul>
        </li>
        <hr>
        <!---CAMIMA---->
        <li class="">
            <a href="#Logos" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">settings</i>CAMIMA<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Logos">
                <li><a href="{{ route('contenido.index', ['seccion' => 'logos', 'tipo' => 'texto']) }}"><i class="fas fa-chevron-right px-4"></i>Logos</a></li>
                {{--<li><a href="{{ route('contenido.index', ['seccion' => 'redes', 'tipo' => 'texto']) }}"><i class="fas fa-chevron-right px-4"></i>Redes Sociales</a></li>--}}
                <li><a href="{{ route('contenido.index', ['seccion' => 'condiciones', 'tipo' => 'texto']) }}"><i class="fas fa-chevron-right px-4"></i>Terminos y Condiciones</a></li>
                <li><a href="{{ route('metadatos.index') }}"><i class="fas fa-chevron-right px-4"></i>Metadatos</a></li>
                <li><a href="{{ route('usuario.index') }}"><i class="fas fa-chevron-right px-4"></i>Usuarios</a></li>
            </ul>
        </li>


    </ul>
</nav>


