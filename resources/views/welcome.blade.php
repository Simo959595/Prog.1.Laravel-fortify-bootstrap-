{{-- inizio layout --}}
<x-layout>
    
{{-- navbar --}}
<x-navbar />

{{-- inizio "body" --}}
{{-- titolo --}}
<h1 class="main-title">Simone immobiliare S.r.l.</h1>

{{-- inizio messaggio email inviata --}}
@if (session('emailSent'))
<div class="alert alert-success">
  {{session('emailSent')}}
</div>    
@endif
{{-- fine messaggio email inviata --}}

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
  <p class="second-title">Le nostre case appena vendute:</p>
    <div class="carousel-inner">
      <div class="carousel-item active carta">
        <img src="media/casa-lusso.jpg" class="d-block w-100" alt="foto principale" data-bs-interval="1500">
      </div>
      <div class="carousel-item carta">
        <img src="media/casa-mare.jpg" class="d-block w-100" alt="foto 2" data-bs-interval="1500">
      </div>
      <div class="carousel-item carta">
        <img src="media/casa-montagna.jpeg" class="d-block w-100" alt="foto 3" data-bs-interval="1500">
      </div>
    </div>
</div>


{{-- fine "body" --}}

{{-- footer --}}
<x-footer />

{{-- fine layout --}}
</x-layout>