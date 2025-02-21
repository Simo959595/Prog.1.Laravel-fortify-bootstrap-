{{-- inizio layout --}}
<x-layout>

    {{-- navbar --}}
    <x-navbar />

    {{-- inizio container --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                {{-- status inserimento --}}
                @if (session('status-house'))
                <div class="alert aler-success">
                    {{session('status')}}
                </div>
                 @endif             
                {{-- titolo --}}
                <h1 class="display-1">
                    Indice degli immobili
                </h1>

                {{-- inizio sezione card con metodo foreach --}}
                <div class="row">
                    @foreach ($houses as $house)
                    <div class="col-6">
                        <div class="card" style="width: 18rem;">
                            <img src="{{Storage::url($house->Foto)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Autore: {{$house->Autore}}</h5>
                                <p class="card-text">Indirizzo: {{$house->Indirizzo}}</p>
                                <p class="card-text">MQ: {{$house->MQ}}</p>
                                <p class="card-text">Tipo di immobile: {{$house->TipoImmobile}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- fine sezione card con metodo foreach --}}
            </div>
        </div>
    </div>
    {{-- fine container --}}


    {{-- footer --}}
    <x-footer />

    {{-- fine layout --}}
</x-layout>
