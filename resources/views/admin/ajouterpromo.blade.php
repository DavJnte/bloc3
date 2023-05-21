@extends('layouts._layouts')

@section('content')
<div class="app">
<div class="container">

    <form style="padding: 10px" action="{{ URL('addpromo') }}" method="post">
        <div class="section-block mt-5">
            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                        <tr>
                            <th> Promo </th>
                            <th>Date de debut</th>
                            <th>Date de fin</th>

                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                        </tr>
                    </thead><!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                        <!-- tr -->
                        @foreach ($promo as $item)
                            <tr>

                                <td class="align-middle"> {{ $item->reduction }} </td>
                                <td class="align-middle"> {{ $item->date_debut }} </td>
                                <td class="align-middle"> {{ $item->date_fin }} </td>

                                <td class="align-middle text-right">
                                    <a href="/editpromo/{{ $item->code }}"
                                        class="btn btn-sm  btn-icon btn-secondary"><i
                                            class="fa fa-edit"></i> <span
                                            class="sr-only">edit</span></a>
                                    <a href="/deletepromo/{{ $item->id }}" onclick="return confirm('Voulez-vous supprimer cette promotion ?')"
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

            @if(Session::has('warning'))
            <div class="alert alert-warning">{{Session::get('warning')}}</div>
            @endif
            <h2>Créer une Promotion</h2>
        </div>
        @csrf
        <div class="form-group">
            <input required class="form-control" type="number" name="promo"
                id="key" placeholder="Promo reduction en % (Ex: 10)">
        </div>
        <div class="form-group">
            <input required class="form-control" type="date" name="date_debut"
                id="key" placeholder="Date de debut">
        </div>
        <div class="form-group">
            <input required class="form-control" type="date" name="date_fin"
                id="key" placeholder="Date de fin">
        </div>

        <button class="btn btn-primary">Enregister</button>
    </form>
</div>
</div>
@endsection
