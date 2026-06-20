<x-layout>
    <x-nav/>
    <x-header>
    <div class="container-fluid">
        <div class="row ul1">
            <h2>Inserisci un articolo</h2>
        </div>
        <div class="row justify-content-center ul1">
            <div class="col-12 col-md-8">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form method="post" action="{{route('prodotti.submit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" name="marca" class="form-control" id="marca" aria-describedby="marcaHelp" value="{{old('marca')}}">
                    </div>
                     <div class="mb-3">
                    <label for="img" class="form-label">Inserisci un immagine</label>
                    <input type="file" name="img" class="form-control" id="img" aria-describedby="marcaHelp">
                    </div>
                    <div class="mb-3">
                    <label for="materiale" class="form-label">Materiale</label>
                    <input type="text" name="materiale" title="materiale" class="form-control" id="materiale" aria-describedby="materialeHelp" value="{{old('materiale')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
    </x-header>
</x-layout>