<div class="service_type_list">
    <ul>
        <li class="{{ Request::is( 'sobre_aval') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'sobre_aval') }}">¿Quiénes somos?</a>
        </li>
        <li class="{{ Request::is( 'noticias') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'noticias') }}">Noticias</a>
        </li>
    </ul>
</div>
