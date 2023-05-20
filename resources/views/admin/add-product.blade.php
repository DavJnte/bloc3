@extends('layouts._layouts')

@section('content')
<div class="app">
<div class="container">

    <form style="padding: 10px" action="{{ URL('addproductpost') }}" method="post" enctype="multipart/form-data">

        {{-- any error --}}
        <div class="section-block mt-5">
          {{-- any error --}}
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
        @endif
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            <br>
            <h2>Créer un produit</h2>
        </div>
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="libelle"
                id="key" placeholder="Titre du produit">
        </div>


        <div class="form-group">
            <input class="form-control" type="number" name="prix"
                id="key" placeholder="Prix">
        </div>
        <div class="form-group">
            <div class="form-label-group">
              <select name="category" class="custom-select" id="fls1">
                <option value=""> Choisir... </option>
                @foreach ($category as $item)

                <option value="{{$item->category}}"> {{$item->category}} </option>
                @endforeach
              </select> <label for="fls1">Catégorie</label>
            </div>
          </div>
          <div class="form-group">
            <label for="tf3">Image</label>
            <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" id="tf3"> <label class="custom-file-label" for="tf3">Choisir un fichier</label>
            </div>
          </div>
          <div class="form-group">
            <textarea name="description" id="mytextarea">Ecrire description...</textarea>
          </div>


        <button class="btn btn-primary">Enregister</button>
    </form>
</div>
</div>
@endsection
