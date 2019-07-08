{{--<div class="fixed-top fixed-top-sm">--}}
    {{--<div class="container" style="background-color: #333333">--}}
        {{--<div class="row">--}}
            {{--<div class="container">--}}
                {{--<div class="d-flex justify-content-end align-items-center">--}}
                    {{--<i class="fab fa-whatsapp mr-2" style="color: #25d366;"></i>--}}
                    {{--<p class="m-0 p-0">54 9 11 6050-7809</p>--}}
                    {{--<div class="form-group m-0 ml-3">--}}
                        {{--<select class="custom-select-sm" name="" id="">--}}
                            {{--<option value="">ES</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<nav class="navbar navbar-expand-lg navbar-dark py-0" style="box-shadow: unset;background-color: #333333">--}}
        {{--<div class="container" style="background-color: #333333">--}}
            {{--<a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($logos->text{'header'}) }}" alt="" class="img-fluid"></a>--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"--}}
                    {{--aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}
            {{--<div class="collapse navbar-collapse flex-md-column" id="navbarNav">--}}
                {{--<ul class="navbar-nav ml-auto d-flex flex-row justify-content-between">--}}
                    {{--<li class="nav-item"><a class="text-white ml-2" href="https://wa.me/5491160507809" target="_blank"> <i class="fab fa-whatsapp mr-2" style="color: #25d366;"></i>54 9 11 6050-7809</a></li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<div class="dropdown">--}}
                            {{--<button class="btn btn-sm m-0 p-0 ml-2 text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--{{ App::getLocale() }}--}}
                            {{--</button>--}}
                            {{--<div class="dropdown-menu m-0 py-0 dropdown-menu-right" style="min-width: 2rem" aria-labelledby="dropdownMenuButton">--}}
                                {{--@foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)--}}
                                    {{--<a class="dropdown-item m-0 p-0 {{ LaravelLocalization::getCurrentLocale()==$key?'active':'' }}" href="{{ LaravelLocalization::getLocalizedURL($key) }}">{{ ucwords($key) }}</a>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--</div>--}}
{{--                        <div class="form-group m-0 ml-3">--}}
{{--                            <select class="lang" name=""onchange="location = this.value;">--}}
{{--                                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)--}}
{{--                                    <option value="{{ $key }}" {{ LaravelLocalization::getCurrentLocale()==$key?'selected':'' }}><a href="{{ LaravelLocalization::getLocalizedURL($key) }}">{{ ucwords($key) }}</a></option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}

                    {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="navbar-nav ml-auto">--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2 {{ active('nosotros') }}" href="{{ route('nosotros') }}">{{ __('About us') }}</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2 {{ active('productos/1') }}" href="{{ route('productos',['general' => 1]) }}">{{ __('Packaging') }}</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2 {{ active('productos/2') }}" href="{{ route('productos',['general' => 2]) }}">{{ __('Dosing') }}</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2 {{ active('productos/3') }}" href="{{ route('productos',['general' => 3]) }}">{{ __('Accessory') }}</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2 {{ active('noticias') }}" href="{{ route('noticias') }}">{{ __('News') }}</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2 {{ active('post-venta') }}" href="{{ route('post.venta') }}">{{ __('Post-Sale') }}</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2 {{ active('videos') }}" href="{{ route('videos') }}">{{ __('Videos') }}</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2 {{ active('contacto') }}" href="{{ route('contacto') }}">{{ __('Contact') }}</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link  ml-2" href="#buscar" data-toggle="modal"><i class="fas fa-search prefix rounded-pill p-1 baires-color"  style="border: 2px solid #FEB80B;"></i></a></li>--}}
                    {{--<div class="btn-group dropleft">--}}
                        {{--<a href=""  class="nav-link ml-2" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">--}}
                            {{--<i class="fas fa-search prefix rounded-pill p-1 baires-color" style="border: 2px solid #FEB80B;"></i>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu">--}}
                            {{--<div class="form-group m-0">--}}
                                {{--<input type="text" class="form-control" placeholder="Buscar...">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}
{{--</div>--}}
{{--<!-- Modal -->--}}
{{--<div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title" id="exampleModalCenterTitle">Buscador</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<form action="{{ route('buscador') }}" method="get">--}}

                    {{--<div class="md-form">--}}
                        {{--<i class="fas fa-search prefix " style="color: black!important;"></i>--}}
                        {{--<input type="text" name="name" class="form-control" placeholder="Buscar...">--}}
                    {{--</div>--}}
                    {{--<div class="text-right">--}}
                        {{--<button type="submit" class="btn btn-primary">Buscar</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!--Navbar-->
<div class="fixed-top">

    <div class="container-fluid" style="background-color: #444444">
        <div class="row">
            <div class="container text-white">
                <div class="d-flex justify-content-end align-items-center">
                    <p class="m-0 p-0"><a href="" class="text-decoration-none border-right px-3 text-white">FORMULARIO DE CONTACTO</a></p>
                    <i class="material-icons mr-2 pl-3">mail_outline</i>
                    <p class="m-0 p-0"><a href="" class="text-decoration-none  px-1 text-white">CONTACTO</a></p>
                    <a href="" class="text-white border-left px-3"><i class="fab fa-facebook"></i></a>
                    <a href="" class="text-white border-left px-3"><i class="fab fa-twitter"></i></a>
                    <a href="" class="text-white border-left px-3"><i class="fas fa-search prefix"></i></a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white" >
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="http://camima.org.ar/imagenes/iconos/logo.png" alt="" width="200" height="65" class="img-fluid">
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item d-flex justify-content-center align-items-center"  style="border-right: 1px solid #71A7DE">
                        <a class="nav-link  py-0 px-4 active" href="{{ url('/') }}">INICIO</a>
                    </li>
                    <li class="nav-item dropdown d-flex justify-content-center align-items-center" style="border-right: 1px solid #71A7DE">
                        <a class="nav-link py-0 px-4"  id="navbarDropdownMenuLink"
                           aria-haspopup="true" aria-expanded="false">INSTITUCIONAL</a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('quienes.somos') }}">QUIENES SOMOS</a>
                            <a class="dropdown-item" href="{{ route('autoridades') }}">AUTORIDADES</a>
                            <a class="dropdown-item" href="{{ route('objetivos') }}">OBJETIVOS</a>
                            <a class="dropdown-item" href="{{ route('mision.vision') }}">MISION Y VISION</a>
                            <a class="dropdown-item" href="{{ route('enlaces') }}">ENLACES DE INTERES</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-flex justify-content-center align-items-center"  style="border-right: 1px solid #71A7DE">
                        <a class="nav-link  py-0 px-4 " id="navbarDropdownMenuLink"
                           aria-haspopup="true" aria-expanded="false">SERVICIOS</a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('nuestra.sede') }}">NUESTRA SEDE</a>
                            <a class="dropdown-item" href="{{ route('asesorias') }}">ASESORIAS</a>
                            <a class="dropdown-item" href="{{ route('autoridades') }}">CURSOS Y REUNIONES</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-flex justify-content-center align-items-center"  style="border-right: 1px solid #71A7DE">
                        <a class="nav-link py-0 px-4" id="navbarDropdownMenuLink"
                           aria-haspopup="true" aria-expanded="false">GREMIALES</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('uom') }}">UOM</a>
                            <a class="dropdown-item" href="{{ route('asimra') }}">ASIMRA</a>
                        </div>
                    </li>
                    <li class="nav-item d-flex justify-content-center align-items-center"  style="border-right: 1px solid #71A7DE">
                        <a class="nav-link py-0 px-4 " href="{{ route('prensa') }}">PRENSA</a>
                    </li>
                    <li class="nav-item dropdown d-flex justify-content-center align-items-center"  style="border-right: 1px solid #71A7DE">
                        <a class="nav-link py-0 px-4  " id="navbarDropdownMenuLink"
                           aria-haspopup="false" aria-expanded="false">CAPACITACIÓN</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('cursos') }}">CURSOS</a>
                            <a class="dropdown-item" href="{{ route('otros') }}">OTROS</a>
                        </div>
                    </li>
                </ul>
                <!-- Links -->

            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
</div>
<!--/.Navbar-->