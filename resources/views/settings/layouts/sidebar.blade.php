<nav id="sidebar" class="pt-3">
    <div class="d-block d-md-none text-end close-sidebar">
        <a href="#"><span><i class="fa fa-close"></i></span></a>
    </div>
    <ul class="list-unstyled">
        {{-- <p>Dummy Heading</p> --}}
        <li class="">
            <a data-bs-toggle="collapse" role="button" href="#sub_content1" aria-expanded="{{Request::is('settings/events*') ? 'true' : 'false'}}"
                aria-controls="sub_content1" class="dropdown-toggle"><i class="dropdown-ico"></i>Agenda de sesiones
                especiales</a>
            <ul class="collapse list-unstyled {{Request::is('settings/events*') ? 'show' : ''}}" id="sub_content1">
                <li>
                    <a href="{{ url('settings/events') }}" class="{{ Request::is('settings/events') ? 'active' : '' }}">Evento especial 1</a>
                </li>
                <li>
                    <a href="#">Evento especial 2</a>
                </li>
                <li>
                    <a href="#">Evento especial 3</a>
                </li>
                <li>
                    <a href="#">Evento especial 4</a>
                </li>
                <li>
                    <a href="#">Evento especial 5</a>
                </li>
                <li>
                    <a href="#">Evento especial 6</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a data-bs-toggle="collapse" role="button" href="#sub_content2" aria-expanded="{{Request::is('settings/faculty1*') ? 'true' : 'false'}}"
                aria-controls="sub_content2" class="dropdown-toggle"><i class="dropdown-ico"></i>Facultad 1</a>
            <ul class="collapse list-unstyled {{Request::is('settings/faculty1*') ? 'show' : ''}}" id="sub_content2">
                <li>
                    <a href="{{ url('settings/faculty1') }}" class="{{ Request::is('settings/faculty1') ? 'active' : '' }}">Bienvenida</a>
                </li>
                <li>
                    <a href="{{ url('settings/faculty1/carrera1') }}" class="{{ Request::is('settings/faculty1/carrera1') ? 'active' : '' }}">Carrera 1</a>
                </li>
                <li>
                    <a href="{{ url('settings/faculty1/carrera2') }}" class="{{ Request::is('settings/faculty1/carrera2') ? 'active' : '' }}">Carrera 2</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a data-bs-toggle="collapse" role="button" href="#sub_content3" aria-expanded="false"
                aria-controls="sub_content3" class="dropdown-toggle"><i class="dropdown-ico"></i>Facultad 2</a>
            <ul class="collapse list-unstyled" id="sub_content3">
                <li>
                    <a href="#">Bienvenida 1</a>
                </li>
                <li>
                    <a href="#">Bienvenida 2</a>
                </li>
                <li>
                    <a href="#">Bienvenida 3</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a data-bs-toggle="collapse" role="button" href="#sub_content4" aria-expanded="false"
                aria-controls="sub_content4" class="dropdown-toggle"><i class="dropdown-ico"></i>Facultad 3</a>
            <ul class="collapse list-unstyled" id="sub_content4">
                <li>
                    <a href="#">Bienvenida 1</a>
                </li>
                <li>
                    <a href="#">Bienvenida 2</a>
                </li>
                <li>
                    <a href="#">Bienvenida 3</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a data-bs-toggle="collapse" role="button" href="#sub_content5" aria-expanded="false"
                aria-controls="sub_content5" class="dropdown-toggle"><i class="dropdown-ico"></i>Facultad 4</a>
            <ul class="collapse list-unstyled" id="sub_content5">
                <li>
                    <a href="#">Bienvenida 1</a>
                </li>
                <li>
                    <a href="#">Bienvenida 2</a>
                </li>
                <li>
                    <a href="#">Bienvenida 3</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a data-bs-toggle="collapse" role="button" href="#sub_content6" aria-expanded="false"
                aria-controls="sub_content6" class="dropdown-toggle"><i class="dropdown-ico"></i>Facultad 5</a>
            <ul class="collapse list-unstyled" id="sub_content6">
                <li>
                    <a href="#">Bienvenida 1</a>
                </li>
                <li>
                    <a href="#">Bienvenida 2</a>
                </li>
                <li>
                    <a href="#">Bienvenida 3</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a data-bs-toggle="collapse" role="button" href="#sub_content7" aria-expanded="{{ Request::is('settings/integral-formation*') ? 'true' : 'false' }}"
                aria-controls="sub_content7" class="dropdown-toggle"><i class="dropdown-ico"></i>Formación Integral</a>
            <ul class="collapse list-unstyled {{ Request::is('settings/integral-formation*') ? 'show' : '' }}" id="sub_content7">
                <li>
                    <a href="{{ url('settings/integral-formation/unite1') }}" class="{{ Request::is('settings/integral-formation/unite1') ? 'active' : '' }}">Unidad 1</a>
                </li>
                <li>
                    <a href="#">Unidad 2</a>
                </li>
                <li>
                    <a href="#">Unidad 3</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a data-bs-toggle="collapse" role="button" href="#sub_content8" aria-expanded="{{ Request::is('settings/faq*') ? 'true' : 'false' }}"
                aria-controls="sub_content8" class="dropdown-toggle"><i class="dropdown-ico"></i>FAQ general</a>
            <ul class="collapse list-unstyled {{ Request::is('settings/faq*') ? 'show' : '' }}" id="sub_content8">
                <li>
                    <a href="{{ url('settings/faq/question1') }}" class="{{ Request::is('settings/faq/question1') ? 'active' : '' }}">Pregunta 1</a>
                </li>
                <li>
                    <a href="#">Pregunta 2</a>
                </li>
                <li>
                    <a href="#">Pregunta 3</a>
                </li>
                <li>
                    <a href="#">Pregunta 4</a>
                </li>
                <li>
                    <a href="#">Pregunta 5</a>
                </li>
                <li>
                    <a href="#">Pregunta 6</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
