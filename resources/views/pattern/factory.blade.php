@extends("base")
@section("body")
<body class="antialiased">
    <h1>Factory</h1>
    <p>
        {{ $opel->getMarque() }} <br>
        {{ $renaud->getMarque() }} <br>
    </p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop