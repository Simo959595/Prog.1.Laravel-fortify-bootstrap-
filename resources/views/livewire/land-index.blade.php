<div>
   <h2 class="display-3 bg-primary text-white">
    Form del componente Livewire
   </h2>
   <form wire:submit='landCreate'>
     <div class="mb-3">
       <label class="form-label text-white">Prezzo al metro quadrato</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model.blur='PrezzoAlMq'>
      <div class="text-white">@error('PrezzoAlMq') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3">
      <label class="form-label text-white">Metri quadrati</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model.blur='Mq'>
      <div class="text-white">@error('Mq') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3">
      <label class="form-label text-white">Edificabile si/no</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model.blur='Edificabile'>
      <div class="text-white">@error('Edificabile') {{ $message }} @enderror</div>
    </div>
    <button type="submit" class="btn btn-primary">Conferma inserimento</button>
  </form>
  
</div>