<x-layout>

<x-navbar />

<h1 class="display-1">
    Pagina di modifica del terreno: <br></br> {{$land->PrezzoAlMq}}
</h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <livewire:edit-form landId='{{$land->id}}' />
            </div>
        </div>
    </div>

<x-footer />

</x-layout>