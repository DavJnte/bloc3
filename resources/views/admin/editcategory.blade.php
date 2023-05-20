@extends('layouts._layouts')

@section('content')
<div class="app">
<div class="container">
    
    <form style="padding: 10px" action="{{ URL('editcategorypost/'.$category_edit->id) }}" method="post">
        <div class="section-block mt-5">
            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                        <tr>
        
                            <th> Nom </th>
                            
                            
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                        </tr>
                    </thead><!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                        <!-- tr -->
                        @foreach ($category as $item)
                            <tr>
        
        
                                <td class="align-middle"> {{ $item->category }} </td>
                                
                                <td class="align-middle text-right">
                                    <a href="/editcategory/{{$item->id}}"
                                        class="btn btn-sm  btn-icon btn-secondary"><i
                                            class="fa fa-edit"></i> <span
                                            class="sr-only">edit</span></a> 
                                    <a href="/deletecategory/{{$item->id}}" onclick="return confirm('Voulez-vous supprimer cette categorie ?')"
                                        class="btn btn-sm  btn-icon btn-secondary"><i
                                            class="fa fa-trash"></i> <span
                                            class="sr-only">trash</span></a> 
                                </td>
                            </tr>
                        @endforeach
        
        
                    </tbody><!-- /tbody -->
                </table>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            <h2>Modifier une Catégorie</h2>
        </div>
        @csrf
        <div class="form-group">
            <input value="{{$category_edit->category}}" required class="form-control" type="text" name="category"
                id="key" placeholder="Category">
        </div>
    
        <button class="btn btn-primary">Enregister</button>
    </form>
</div>
</div>
@endsection