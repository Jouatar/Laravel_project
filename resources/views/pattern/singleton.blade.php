@extends("base")
@section("body")
<body class="antialiased">
    <h1>Singleton</h1>
    <p>
        {{ $a->increment() }} <br>
        {{ $b->increment() }} <br>
        {{ $a->increment() }} <br>
    </p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop