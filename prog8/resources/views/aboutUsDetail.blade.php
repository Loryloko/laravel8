<x-layout>

      <x-nav/>
    <x-header>
        <div class="container-fluid header">
        <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6 col-12">
            <h1 class="text-center m-5">Profilo</h1>
            <h3 class="intro text-center text-color">{{$user['name']}} {{$user['surname']}}</h3>
            <h4 class="intro text-center text-color">{{$user['role']}}</h4>
        </div>
        </div>
        </div>
    </x-header>
    <x-seclink/>

</x-layout>