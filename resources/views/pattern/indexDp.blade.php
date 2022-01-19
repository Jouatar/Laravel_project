@extends("base")
@section("body")
<body class="antialiased">
    <h1>Choisissez votre pattern</h1>
    <ul>
        <li><a href="{{ url('pattern/1') }}">Singleton</a></li>
        <li><a href="{{ url('pattern/2') }}">Factory</a></li>
        <li><a href="{{ url('pattern/3') }}">Facade</a></li>
        <li><a href="{{ url('pattern/4') }}">Iteration</a></li>
        <li><a href="{{ url('pattern/5') }}">Observeur</a></li>
    </ul>
</body>
@stop