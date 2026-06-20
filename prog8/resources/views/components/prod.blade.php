 <div class="card mb-3 cardColor" style="width: 18rem;">
  @if(!$prodotto->img)
  <img src="https://picsum.photos/200/300" class="card-img-top cardImg" alt="{{$prodotto['title']}}">
  <div class="card-body">
    @else
    <img src="{{Storage::url($prodotto->img)}}" class="card-img-top cardImg" alt="{{$prodotto['title']}}">
  @endif
                
                <div class="card-body">
                  <h5 class="card-title">{{$prodotto['title']}}</h5>
                  <p class="card-text"><strong>Marca:</strong> {{$prodotto['marca']}} <br><strong>Materiale:</strong> {{$prodotto['materiale']}}</p>
                  <a href="#" class="btn btnInfo">Altre informazioni</a>
                </div>
              </div>