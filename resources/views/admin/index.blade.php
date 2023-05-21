@extends('layouts._layouts')

@section('content')

<div class="app">
    <!-- .app-main -->
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page">
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    <!-- /.page-title-bar -->
                    <!-- .page-section -->
                    <div class="page-section ">
                        <div class="d-flex justify-content-center">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif

                        </div>

                        <!-- .card -->
                        <div class="card card-fluid">
                            <!-- .card-header -->
                            <div class="card-header">
                                <!-- .nav-tabs -->
                                <!-- /.nav-tabs -->
                            </div><!-- /.card-header -->
                            <!-- .card-body -->
                            <div class="card-body">


                                <!-- .form-group -->
                                <!-- /.form-group -->
                                <!-- .table-responsive -->

                                <div class="table-responsive">
                                    <!-- .table -->
                                    <a href="{{URL('/addproduct')}}"  class="btn btn-secondary">Créer un produit</a>

                                    <table  id="example" class="table">
                                        <!-- thead -->

                                        <thead>
                                            <tr>
                                                <th> Image </th>
                                                <th> Libelle</th>
                                                <th> Prix </th>
                                                <th> Category </th>

                                                <th style="width:100px; min-width:100px;"> &nbsp; </th>
                                            </tr>
                                        </thead><!-- /thead -->
                                        <!-- tbody -->
                                        <tbody>
                                            <!-- tr -->
                                            @foreach ($prduct as $item)
                                                <tr>

                                                    <td>eeeeeeee</td>
                                                    <td class="align-middle"> {{ $item->libelle }} </td>
                                                    <td class="align-middle"> {{ $item->prix }}€ (
                                                        @if ($item->prix_promo)
                                                            <span class="badge badge-success"> {{ $item->prix_promo }} € </span>
                                                        @endif
                                                    ) </td>
                                                    <td class="align-middle"> {{ $item->category }} </td>

                                                    <td class="align-middle text-right">
                                                        <a href="{{ URL('editproduct/' . $item->code) }}"
                                                            class="btn btn-sm  btn-icon btn-secondary"><i
                                                                class="fa fa-edit"></i> <span
                                                                class="sr-only">edit</span></a>
                                                                <a

                                                            onclick="appliquer_promo({{$item->code}},'{{$item->libelle}}')"
                                                            class="btn btn-sm btn-icon btn-secondary"><i
                                                                class="fa fa-tag"></i> <span
                                                                class="sr-only">tag</span>

                                                            </a>

                                                                <a href="{{ URL('deleteproduct/' . $item->code) }}"
                                                                    class="btn btn-sm  btn-icon btn-secondary"><i
                                                                        class="fa fa-trash"></i> <span
                                                                        class="sr-only">trash</span></a>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody><!-- /tbody -->
                                    </table><!-- /.table -->
                                </div><!-- /.table-responsive -->
                                <!-- .pagination -->
                                <!-- /.pagination -->
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->

                        <!-- .section-block -->

                        <!-- .card -->
                        <!-- /.card -->

                        <!-- .section-block -->

                        <div class="section-block">

                            <a href="{{URL('/addproduct')}}"  class="btn btn-secondary">Créer un produit</a>
                        </div><!-- /.section-block -->
                        <!-- Modal -->
                        <div class="modal fade" id="modalTable" tabindex="-1" role="dialog"
                            aria-labelledby="modalTableLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        </h6><button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <!-- .table -->
                                        <table class="table table-striped">
                                            <!-- thead -->
                                            <thead class="thead-">
                                                <tr>

                                                    <th> Iban </th>
                                                    <th>NOM DE BANK</th>
                                                    <th> BIC </th>
                                                    <th> TITULAIRE </th>
                                                </tr>
                                            </thead><!-- /thead -->
                                            <!-- tbody -->
                                            {{--<tbody>
                                                <!-- tr -->
                                                @foreach ($infos as $item)
                                                    <tr>
                                                        <td> {{ $item->iban }} </td>
                                                        <td>{{$item->bkname ?? "undefined"}}</td>
                                                        <td> {{ $item->bic }} </td>
                                                        <td> {{ $item->owner }} </td>
                                                    </tr><!-- /tr -->
                                                @endforeach
                                                <!-- tr -->
                                                <!-- /tr -->
                                            </tbody>--}}<!-- /tbody -->
                                        </table><!-- /.table -->

                                        <form style="padding: 10px" action="{{ URL('bkinfos') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="iban"
                                                    id="key" placeholder="IBAN">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="bkname"
                                                    id="key" placeholder="Nom de bank">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="bic"
                                                    id="key" placeholder="BIC/SWIFT">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="owner"
                                                    id="key" placeholder="INITITULE">
                                            </div>


                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mr-auto"
                                            data-dismiss="modal">Fermer</button>

                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal -->
                        <hr class="my-5">






                        <div class="modal fade" id="modalTable2" tabindex="-1" role="dialog"
                            aria-labelledby="modalTableLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        </h6><button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <!-- .table -->
                                        <!-- /.table -->

                                        <form style="padding: 10px" action="{{ URL('applypromo') }}" method="post">
                                            @csrf
                                            <input type="hidden" id="message_id" value="" name="code_product">
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                  <select name="promo" class="custom-select" id="fls1">
                                                    <option value=""> Choisir... </option>
                                                    @foreach ($promo as $item)
                                                    <option value="{{$item->reduction}}"> {{$item->reduction}}% </option>
                                                    @endforeach
                                                  </select> <label for="fls1">Promo</label>
                                                </div>
                                              </div>

                                            <button class="btn btn-primary">Appliquer la promotion</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mr-auto"
                                            data-dismiss="modal">Fermer</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.page-inner -->
                    </div><!-- /.page -->
                </div><!-- .app-footer -->
                <footer class="app-footer">

                    <div class="copyright"> Copyright © Mercadona 2023. All right reserved. </div>
                </footer><!-- /.app-footer -->
                <!-- /.wrapper -->
    </main><!-- /.app-main -->
</div>
@endsection

