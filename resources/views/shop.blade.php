@extends('layouts._user')

@section('content')
<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        {{-- a venir
                            <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                        </ul>--}}
                        <h1 class="title">Découvrez notre catalogue</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start Shop Area  -->
    <div class="axil-shop-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="axil-shop-sidebar">
                        <div class="d-lg-none">
                            <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="toggle-list product-categories active">
                            <h6 class="title">CATEGORIES</h6>
                            <div class="shop-submenu">
                                <ul>
                                    @if($cat !== "search")
                                    <li class="current-cat"><a href="#">{{$cat}}</a></li>
                                    @endif
                                    @if($cat !== "search")
                                    @foreach($category as $categories)
                                    @if($cat == $categories->category)
                                    <li><a class="d-none" href="/catalogue/{{$categories->category}}">{{$categories->category}}</a></li>


                                    @else
                                    <li><a href="/catalogue/{{$categories->category}}">{{$categories->category}}</a></li>
                                    @endif
                                    @endforeach
                                    @endif
                                    @if($cat == "search")
                                    <h6>
                                        {{$count ?? 0 }} Résultat trouvé : {{$key }}
                                    </h6>
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- End .axil-shop-sidebar -->
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="axil-shop-top mb--40">

                            </div>
                        </div>
                    </div>
                    <!-- End .row -->
                    <div class="row row--15">
                        @foreach($products as $item)
                        <div class="col-xl-4 col-sm-6">
                            <div class="axil-product product-style-one mb--30">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{asset('images/'.$item->image)}}" alt="Product Images">
                                    </a>
                                    @if ($item->prix_promo!=0)

                                    <div class="label-block label-right">
                                        <div class="product-badget">PRIX PROMO: {{$item->prix_promo}} €</div>
                                    </div>
                                    @else

                                    @endif
                                    <div class="product-hover-action">
                                        {{-- a venir
                                            <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option d-none"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>--}}
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="">{{$item->libelle}}</a></h5>

                                        <div class="product-price-variant">
                                            <span class="price current-price">
                                                @if($item->prix_promo!=0)
                                                <span class="text-danger">{{$item->prix_promo}}€</span>
                                                @else
                                                {{$item->prix}}€
                                                @endif
                                            </span>
                                           {{-- <span class="price old-price">{{$item->prix}}</span>--}}
                                        </div>

                                        <p>
                                            @php
                                                $description = html_entity_decode($item->description);
                                                $description = strip_tags($description);
                                                echo $description;
                                            @endphp
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Shop Area  -->


</main>

<div class="service-area">
    <div class="container">
        <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20 d-flex justify-content-center">
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="{{asset('assets-admin/images/icons/service1.png')}}" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Rapide et livraison &amp; sécurisée</h6>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="{{asset('assets-admin/images/icons/service3.png')}}" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Retour et remboursement</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="{{asset('assets-admin/images/icons/service4.png')}}" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Support</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
