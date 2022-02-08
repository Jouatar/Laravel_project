@extends("base")
@section("body")
<body class="antialiased">
    <h1>Chain of responsabitlity</h1>
    <p>
    </p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop