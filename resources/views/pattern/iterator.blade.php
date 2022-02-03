@extends("base")
@section("body")
<body class="antialiased">
    <h1>Iterator</h1>
    @while($iteratorConcession->hasNext())
    <p>{{ $iteratorConcession->next()->getMarque() }}</p>
    @endwhile
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop