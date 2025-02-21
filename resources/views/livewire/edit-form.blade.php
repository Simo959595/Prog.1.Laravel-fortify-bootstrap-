<div class="bg-warning">
    <h2 class="display-3 text-dark">
Form di modifica del terreno
    </h2>
    <form wire:submit='updateLand'>

            <div class="mb-3">
                <label class="form-label text-white">Prezzo al mq. del terreno di mq.{{$PrezzoAlMq}}</label>
                <input type="number" class="form-control" aria-describedby="emailHelp" wire:model={{$PrezzoAlMq}}>
                <div class="text-white">@error('PrezzoAlMq') {{ $message }} @enderror</div>
              </div>
            
              <div class="mb-3">
                <label class="form-label text-white">Mq. del terreno di mq.{{$Mq}}</label>
                <input type="number" class="form-control" aria-describedby="emailHelp" wire:model={{$Mq}}>
                <div class="text-white">@error('Mq') {{ $message }} @enderror</div>
              </div>
            
              <div class="mb-3">
                <label class="form-label text-white">Il terreno è edificabile? L'ultima informazione è stata {{$Edificabile}}</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" wire:model={{$Edificabile}}>
                <div class="text-white">@error('Edificabile') {{ $message }} @enderror</div>
              </div>
        <button type="submit" class="btn btn-primary">Conferma modifica</button>
      </form>
</div>
