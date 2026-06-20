<x-layout>
     <x-nav/>
    <x-header>
    <div class="row">
      @if(session()->has('emailSent'))
        <div class="alert alert-success">
          {{session('emailSent')}}
        </div>
      @endif
      @if(session()->has('emailError'))
      <div class="alert alert-danger">
        {{session('emailError')}}
      </div>
      @endif
      @if (session()->has('successMessage'))
        <div class="alert alert-success">
          {{session('successMessage')}}
        </div>
        @endif
        <div class="col-12 text-center">  
        <h1>Ceramiche artigianali di Pippo Giancarli</h1>
      </div>
      <div class="col-12 text-center column-center my-5 justify-content-center">
        <h3 class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Quasi at, non assumenda cupiditate dolorum, porro perferendis quod, hic dolor rem aut dicta!<br> Praesentium ipsam itaque cupiditate quibusdam pariatur fuga consectetur?</h3>
      </div>
    </div>
    </x-header>
<x-seclink/>
</x-layout>