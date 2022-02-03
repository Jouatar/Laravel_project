@extends("base")
@section("body")
<body class="antialiased">
    <h1>Observer</h1>
    <p>{{ $sujet->display() }}</p>
    <p>{{ $sujet->change() }}</p>
    <p>{{ $sujet->display() }}</p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop