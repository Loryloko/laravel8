<x-layout>
<x-nav/>
<x-header>
    <div class="row ul1">
      <div class="col-12 justify-content-center text-center my-5">
      <h1>Contatti</h1>
      </div>
      <div class="col-12 d-flex justify-content-center text-center mt-5">
      <i class="bi bi-telephone me-3"></i><p><strong>Telefono: +67 1234567890</strong></p>
      </div>
      <div class="col-12 d-flex justify-content-center text-center">
      <i class="bi bi-pin-map-fill me-3"></i><p><strong>Indirizzo: Via abcdefg n° 55, Azeroth</strong></p>
    </div> 
    <div class="row h-100 justify-content-center align-items-center">
      <h2 class="display-4 text-center">... scrivici una mail</h2>
    <div class="col-12 col-md-8">
<form method="post" action="{{route('contactUs')}}">
  @csrf
  <div class="mb-3">
    <label for="user" class="form-label">Inserisci il tuo nome</label>
      <input type="text" name="user" class="form-control" id="user" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Inserisci la tua mail</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Inserisci un messaggio</label>
    <textarea name="message" cols="30" rows="10" class="form-control" id="message"></textarea>
  </div>
     <button type="submit" class="btn btn-primary my-5">Submit</button>
</form>
    </div>
    </div>
</x-header>  
<x-seclink/>
</x-layout>