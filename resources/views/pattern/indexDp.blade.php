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
        <li><a href="{{ url('pattern/6') }}">Stratégie</a></li>
        <li><a href="{{ url('pattern/7') }}">Template</a></li>
        <li><a href="{{ url('pattern/8') }}">Command</a></li>
        <li><a href="{{ url('pattern/9') }}">Composite</a></li>
        <li><a href="{{ url('pattern/10') }}">Chain of responsabitlity</a></li>
        <li><a href="{{ url('pattern/11') }}">State</a></li>
    </ul>
</body>
@stop