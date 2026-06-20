<x-layout>
      <x-nav/>
<x-header>
    <div class="container-fluid ceramiche">
        <div class="row h-100 justify-content-center">
          <div class="row">
            <h1 class="display-5 text-center">Tutti i prodotti</h1>
          </div>
          @foreach ($prodotti as $prodotto)
            <div class="col-12 col-md-3">
             <x-prod :prodotto="$prodotto"/>
            </div>
          @endforeach
        </div>
    </div>
</x-header>
   <x-seclink/>
</x-layout>