@extends("base")
@section("body")
<body class="antialiased">
    <h1>Facade</h1>
    <p>
        {{ $usine->getNom() }}</br>
        {{ $concession->getNom() }}</br>
        {{ $facture->getMontant() }}</br>
    </p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop