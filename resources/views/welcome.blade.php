@extends('layout.app')


@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-card">Nome Azienda : {{ $train->Azienda }}</p>
                            <p class="text-card">Partenza : {{ $train->Stazione_Di_Partenza }}</p>
                            <p class="text-card">Arrivo a : {{ $train->Stazione_Di_Arrivo }}</p>
                            <p class="text-card">Orario Partenza : {{ $train->Orario_Di_Partenza }}</p>
                            <p class="text-card">Orario di Arrivo : {{ $train->Orario_Di_Arrivo }}</p>
                            <p class="text-card">Numero carrozze : {{ $train->Numero_Carrozze }}</p>
                            <p class="text-card">In Orario : {{ $train->In_Orario }}</p>
                            <p class="text-card">Cancellato : {{ $train->Cancellato }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
