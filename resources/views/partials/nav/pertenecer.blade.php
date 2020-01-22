<div class="service_type_list">
    <ul>
        <li class="{{ Request::is( 'requisitos') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'requisitos') }}">Requisitos para asociarse</a>
        </li>
        <li class="{{ Request::is( 'como_obtener') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'como_obtener') }}">¿Cómo obtener un aval?</a>
        </li>
    </ul>
</div>
