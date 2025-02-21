<div>
  <div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h2 class="display-2">
                Tabella dei terreni
            </h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">PrezzoAlMq</th>
                    <th scope="col">Mq</th>
                    <th scope="col">Edificabile</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($lands as $land)
                  <tr>
                    <th scope="row">{{$land->PrezzoAlMq}}</th>
                    <td>{{$land->Mq}}</td>
                    <td>{{$land->Edificabile}}
                        {{-- tasto modifica --}}
                        <a href="{{route('land.edit', compact('land'))}}" class="btn btn-warning">Modifica</a>
                        {{-- tasto elimina --}}
                        <button class="btn btn-danger" wire:click='deleteLand({{$land->id}})'>Elimina</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
  </div>



</div>
