<x-layout>
       <x-nav/>
    <x-header>
    <div class="container-fluid prodotti">
        <div class="row h-100 justify-content-center">
            <div class="row">
                <h1 class="display-5 text-center text-color">
                    {{$prodotto['title']}}
                </h1>
            </div>
            <div class="col-12 col-md-6 text-black d-flex flex-column justify-content-center align-items-center">
                <h5 class="intro">Prodotto: {{$prodotto['title']}}</h5>
                <p class="intro">Materiali: {{$prodotto['materiale']}}</p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{$prodotto['img']}}" alt="Imagine di {{$prodotto['title']}}">
            </div>
        </div>
    </div>
      </x-header>
         <x-seclink/>
</x-layout>