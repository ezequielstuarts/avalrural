<div class="service_type_list">
    <ul>
        <li class="{{ Request::is( 'cheques') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'cheques') }}">Cheques</a>
        </li>
        <li class="{{ Request::is( 'pagares') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'pagares') }}">Pagarés</a>
        </li>
        <li class="{{ Request::is( 'bancos') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'bancos') }}">Bancos</a>
        </li>
        <li class="{{ Request::is( 'obligaciones') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'obligaciones') }}">Obligaciones Negociables Simples</a>
        </li>
        <li class="{{ Request::is( 'garantias') ? 'activado' : '' }}">
            <a href="{{ URL::to( 'garantias') }}">Garantías Comerciales</a>
        </li>
    </ul>
</div>
