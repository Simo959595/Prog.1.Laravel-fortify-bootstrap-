{{-- inizio layout --}}
<x-layout>

    {{-- navbar --}}
    <x-navbar />

    {{-- inizio container --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="display-1 text-center">Inserisci il tuo terreno</h1>

                <livewire:land-create />

            </div>
        </div>
    </div>
    {{-- fine container --}}


    {{-- footer --}}
    <x-footer />

    {{-- fine layout --}}
</x-layout>
