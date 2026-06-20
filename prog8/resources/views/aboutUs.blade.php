<x-layout>
     <x-nav/>
    <x-header>
      <h1 class="text-center">Chi siamo</h1>
      <section class="container userHeight">
      <div class="row">
        @foreach ($users as $user)
        <div class="col-12 col-md-4 my-3">
         <x-about
         :user="$user"
         />
        </div>
        @endforeach
      </div>
    </section>
    </x-header> 
    <x-seclink/>
    
</x-layout>