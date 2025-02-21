{{-- inizio layout --}}
<x-layout>

    {{-- navbar --}}
    <x-navbar />
    
    
    {{-- inizio body --}}
    {{-- titolo --}}
    <h1 class="display-1 text-primary">
    Esegui l'accesso
    </h1>
    {{-- container --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
    {{-- inizio format errori --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{-- fine format errori --}}
    {{-- inizio form registrazione --}}
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Indirizzo E-mail</label>
          <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-success">Accedi</button>
      </form>
    {{-- fine form registrazione --}}
            </div>
        </div>
    </div>
    
    {{-- fine body --}}
    
    {{-- footer --}}
    <x-footer />
        
    {{-- fine layout --}}
    </x-layout>