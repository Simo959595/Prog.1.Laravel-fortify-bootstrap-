{{-- inizio layout --}}
<x-layout>

    {{-- navbar --}}
    <x-navbar />

    {{-- inizio container --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="display-1 text-center">Catalogo dei terreni</h1>

                <livewire:land-table />

            </div>
        </div>
    </div>
    {{-- fine container --}}


    {{-- footer --}}
    <x-footer />

    {{-- fine layout --}}
</x-layout>
