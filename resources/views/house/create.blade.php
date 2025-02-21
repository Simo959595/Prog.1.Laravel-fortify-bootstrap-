{{-- inizio layout --}}
<x-layout>

    {{-- navbar --}}
    <x-navbar />
        {{-- INIZIO CONTAINER --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                {{-- titolo --}}
                <h1 class="display-1 text-danger">
                    Inserisci la tua casa
                </h1>
                {{-- inizio form per la creazione della casa da parte dell'utente --}}
                <form action="{{route('house.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    {{-- inserimento autore --}}
                    <div class="mb-3">
                        <label class="form-label">Autore</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Autore">
                    </div>
                    {{-- inserimento indirizzo --}}
                    <div class="mb-3">
                        <label class="form-label">Indirizzo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Indirizzo">
                    </div>
                    {{-- inserimento metri quadrati --}}
                    <div class="mb-3">
                        <label class="form-label">Metri quadrati</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="MQ">
                    </div>
                    {{-- inserimento tipo di immobile --}}
                    <div class="mb-3">
                      <label class="form-label">Tipo di immobile</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="TipoImmobile">
                    </div>
                    {{-- inserimento immagine --}}
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Inserisci foto</label>
                        <input class="form-control" type="file" id="formFile" name="Foto">
                      </div>
                      {{-- tasto conferma --}}
                    <button type="submit" class="btn btn-primary">Conferma inserimento</button>
                </form>
                {{-- fine form per la creazione della casa da parte dell'utente --}}
            </div>
        </div>
    </div>
    {{-- FINE CONTAINER --}}


    {{-- footer --}}
    <x-footer />

    {{-- fine layout --}}
</x-layout>
