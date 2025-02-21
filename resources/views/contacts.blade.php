{{-- inizio layout --}}
<x-layout>
    
{{-- navbar --}}
<x-navbar />

{{-- inizio "body" --}}

{{-- titolo --}}
<h1 class="main-title">Simone immobiliare S.r.l.</h1>

{{-- inizio form --}}
<form class="p-5" action="{{route ('send.contacts')}}" method="POST">
  @csrf  
  <div class="mb-3">
      <label for="name" class="form-label">Nome utente</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Indirizzo E-mail</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
        <label for="info" class="form-label">Le tue informazioni</label>
      <textarea id="info" class="form-control" name="info"></textarea>
    </div>
    <button type="submit" class="btn btn-warning">Conferma</button>
  </form>
{{-- fine form --}}

{{-- fine "body" --}}

{{-- footer --}}
<x-footer />

{{-- fine layout --}}
</x-layout>