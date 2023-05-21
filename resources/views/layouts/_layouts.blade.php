<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Mercadona/Admin </title>
    <meta property="og:title" content="Basic Table">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="fr_FR">
    <meta name="description" content="website, ecommerce, seo, produits">
    <meta property="og:description" content="website, ecommerce, seo, produits">
    <link rel="canonical" href="index-2.html">
    <meta property="og:url" content="index-2.html">
    <meta property="og:site_name" content="website, ecommerce, seo, produits">
    <script type="application/ld+json">
      {
        "name": "website, ecommerce, seo, produits",
        "description": "website, ecommerce, seo, produits",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Basic Table",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{asset('assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}">
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme.min.css')}}" data-skin="default">
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme-dark.min.css')}}" data-skin="dark">
    <link rel="stylesheet" href="{{asset('assets/stylesheets/custom.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
    <script src="https://cdn.tiny.cloud/1/7u3r7qea3yrq1hrwqqd2v3ocyc39hxgn6q4rqwvvw9wkr1ib/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>
</head>

<body>

    <header class="app-header app-header-dark mb-5">
        <!-- .top-bar -->
        <div class="top-bar">
            <!-- .top-bar-brand -->
            <div class="top-bar-brand">
                <!-- toggle aside menu -->
                <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu"
                    aria-label="toggle aside menu"><span class="hamburger-box"><span
                            class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
                <a href="/home">{{--<svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" height="28" viewbox="0 0 351 100">
                        <defs>
                            <path id="a"
                                d="M156.538 45.644v1.04a6.347 6.347 0 0 1-1.847 3.98L127.708 77.67a6.338 6.338 0 0 1-3.862 1.839h-1.272a6.34 6.34 0 0 1-3.862-1.839L91.728 50.664a6.353 6.353 0 0 1 0-9l9.11-9.117-2.136-2.138a3.171 3.171 0 0 0-4.498 0L80.711 43.913a3.177 3.177 0 0 0-.043 4.453l-.002.003.048.047 24.733 24.754-4.497 4.5a6.339 6.339 0 0 1-3.863 1.84h-1.27a6.337 6.337 0 0 1-3.863-1.84L64.971 50.665a6.353 6.353 0 0 1 0-9l26.983-27.008a6.336 6.336 0 0 1 4.498-1.869c1.626 0 3.252.622 4.498 1.87l26.986 27.006a6.353 6.353 0 0 1 0 9l-9.11 9.117 2.136 2.138a3.171 3.171 0 0 0 4.498 0l13.49-13.504a3.177 3.177 0 0 0 .046-4.453l.002-.002-.047-.048-24.737-24.754 4.498-4.5a6.344 6.344 0 0 1 8.996 0l26.983 27.006a6.347 6.347 0 0 1 1.847 3.98zm-46.707-4.095l-2.362 2.364a3.178 3.178 0 0 0 0 4.501l2.362 2.364 2.361-2.364a3.178 3.178 0 0 0 0-4.501l-2.361-2.364z">
                            </path>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <path fill="currentColor" fill-rule="nonzero"
                                d="M39.252 80.385c-13.817 0-21.06-8.915-21.06-22.955V13.862H.81V.936h33.762V58.1c0 6.797 4.346 9.026 9.026 9.026 2.563 0 5.237-.446 8.58-1.783l3.677 12.034c-5.794 1.894-9.694 3.009-16.603 3.009zM164.213 99.55V23.78h13.372l1.225 5.571h.335c4.457-4.011 10.585-6.908 16.491-6.908 13.817 0 22.174 11.031 22.174 28.08 0 18.943-11.588 29.863-23.957 29.863-4.903 0-9.694-2.117-13.594-6.017h-.446l.78 9.025V99.55h-16.38zm25.852-32.537c6.128 0 10.92-4.903 10.92-16.268 0-9.917-3.232-14.932-10.14-14.932-3.566 0-6.797 1.56-10.252 5.126v22.397c3.12 2.674 6.686 3.677 9.472 3.677zm69.643 13.372c-17.272 0-30.643-10.586-30.643-28.972 0-18.163 13.928-28.971 28.748-28.971 17.049 0 26.075 11.477 26.075 26.52 0 3.008-.558 6.017-.78 7.354h-37.663c1.56 8.023 7.465 11.589 16.491 11.589 5.014 0 9.36-1.337 14.263-3.9l5.46 9.917c-6.351 4.011-14.597 6.463-21.951 6.463zm-1.338-45.463c-6.462 0-11.031 3.454-12.702 10.363h23.622c-.78-6.797-4.568-10.363-10.92-10.363zm44.238 44.126V23.779h13.371l1.337 12.034h.334c5.46-9.025 13.595-13.371 22.398-13.371 4.902 0 7.465.78 10.697 2.228l-3.343 13.706c-3.454-1.003-5.683-1.56-9.806-1.56-6.797 0-13.928 3.566-18.608 13.483v28.749h-16.38z">
                            </path>
                            <use class="fill-warning" xlink:href="#a"></use>
                        </g>
                    </svg>--}}
                    <h2>Mercadona</h2>
                </a>
            </div><!-- /.top-bar-brand -->
            <!-- .top-bar-list -->
            <div class="top-bar-list">
                <!-- .top-bar-item -->
                <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                    <!-- toggle menu -->
                    <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside"
                        aria-label="toggle menu"><span class="hamburger-box"><span
                                class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-full">
                    <!-- .top-bar-search -->
                    <form class="top-bar-search">
                        <!-- .input-group -->
                        <div class="input-group input-group-search dropdown">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                            </div><input type="text" class="form-control" data-toggle="dropdown"
                                aria-label="Search" placeholder="Rechercher"> <!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-xl ml-n4 mw-100">
                                <div class="dropdown-arrow ml-3"></div><!-- .dropdown-scroll -->
                                <div class="dropdown-scroll perfect-scrollbar h-auto" style="max-height: 360px">
                                    <!-- .list-group -->
                                    <div class="list-group list-group-flush list-group-reflow mb-2">
                                        <h6 class="list-group-header d-flex justify-content-between">
                                            <span>Raccourci</span>
                                        </h6><!-- .list-group-item -->
                                        <div class="list-group-item py-2">
                                            <a href="/addproduct"
                                                class="stretched-link"></a>
                                            <div class="tile tile-sm bg-muted">
                                                <i class="fas fa-user-plus"></i>
                                            </div>
                                            <div class="ml-2"> Ajouter un produit</div>
                                        </div><!-- /.list-group-item -->
                                        <!-- .list-group-item -->
                                        <div class="list-group-item py-2">
                                            <a href="/home" class="stretched-link"></a>
                                            <div class="tile tile-sm bg-muted">
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                            <div class="ml-2"> Liste des produits </div>
                                        </div><!-- /.list-group-item -->
                                        <!-- /.list-group-item -->
                                    </div><!-- /.list-group -->
                                </div><!-- /.dropdown-scroll -->

                            </div><!-- /.dropdown-menu -->
                        </div><!-- /.input-group -->
                    </form><!-- /.top-bar-search -->
                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                    <!-- .nav -->
                    <ul class="header-nav nav">
                        <!-- .nav-item -->
                        <!-- /.nav-item -->
                        <!-- .nav-item -->
                        <!-- /.nav-item -->
                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                            <!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <div class="dropdown-arrow"></div><!-- .dropdown-sheets -->
                                <div class="dropdown-sheets">
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="/category"
                                            class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i
                                                    class="oi oi-flag"></i></span> <span
                                                class="tile-peek">Categorie</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="/ajouterpromo" class="tile-wrapper"><span
                                                class="tile tile-lg bg-teal"><i class="oi oi-tag"></i></span>
                                            <span class="tile-peek">Promotion</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <!-- /.dropdown-sheet-item -->
                                </div><!-- .dropdown-sheets -->
                            </div><!-- .dropdown-menu -->
                        </li><!-- /.nav-item -->
                    </ul><!-- /.nav -->
                    <!-- .btn-account -->
                    <div class="dropdown d-none d-md-flex">
                        <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span class="user-avatar user-avatar-md"><img
                                    src="https://i.postimg.cc/jSxkrxBQ/pngtree-user-vector-avatar-png-image-1541962.jpg"
                                    alt=""></span> <span
                                class="account-summary pr-lg-4 d-none d-lg-block"><span
                                    class="account-name">Admin</span> <span
                                    class="account-description"></span></span></button> <!-- .dropdown-menu -->
                        <div class="dropdown-menu">
                            <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                            <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                            <a class="dropdown-item d-none" href="/logout"><span
                                    class="dropdown-icon oi oi-person"></span> Profile</a> <a
                                class="dropdown-item" href="/logout"><span
                                    class="dropdown-icon oi oi-account-logout"></span>Deconnexion</a>
                        </div><!-- /.dropdown-menu -->
                    </div><!-- /.btn-account -->
                </div><!-- /.top-bar-item -->
            </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
    <!-- .app-aside -->
    <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
            <!-- .aside-header -->
            <header class="aside-header d-block d-md-none">
                <!-- .btn-account -->
                <button class="btn-account" type="button" data-toggle="collapse"
                    data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img
                            src="https://i.postimg.cc/jSxkrxBQ/pngtree-user-vector-avatar-png-image-1541962.jpg"
                            alt=""></span> <span class="account-icon"><span
                            class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span
                            class="account-name">{{Auth::user()->name}}</span> <span class="account-description">Administrateur</span></span></button> <!-- /.btn-account -->
                <!-- .dropdown-aside -->
                <div id="dropdown-aside" class="dropdown-aside collapse">
                    <!-- dropdown-items -->
                    <div class="pb-3">
                        <a class="dropdown-item"
                            href="/logout"><span class="dropdown-icon oi oi-account-logout"></span>
                            Deconnexion</a>
                        <div class="dropdown-divider"></div>
                    </div><!-- /dropdown-items -->
                </div><!-- /.dropdown-aside -->
            </header><!-- /.aside-header -->
            <!-- .aside-menu -->
            <div class="aside-menu overflow-hidden">
                <!-- .stacked-menu -->
                <nav id="stacked-menu" class="stacked-menu">
                    <!-- .menu -->
                    <ul class="menu">
                        <!-- .menu-item -->
                        <li class="menu-item">
                            <a href="/home" class="menu-link"><span class="menu-icon fas fa-home"></span> <span
                                    class="menu-text">Dashboard</span></a>
                        </li><!-- /.menu-item -->
                        <!-- .menu-item -->
                        <li class="menu-item">
                            <a href="/addproduct" class="menu-link"><span class="menu-icon fas fa-plus"></span> <span
                                    class="menu-text">Créer un produit</span></a>
                        </li>

                        <li class="menu-item">
                            <a href="/category" class="menu-link"><span class="menu-icon fas fa-list-alt"></span> <span
                                    class="menu-text">Catégories</span></a>
                        </li>

                        <li class="menu-item">
                            <a href="/ajouterpromo" class="menu-link"><span class="menu-icon fas fa-tag"></span> <span
                                    class="menu-text">Promo</span></a>
                        </li>



                        <li class="menu-item">
                            <a href="/logout" class="menu-link"><span class="menu-icon fas fa-power-off"></span>
                                <span class="menu-text">Deconnexion</span></a>
                        </li><!-- /.menu-item -->
                        <!-- .menu-header -->

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    </ul><!-- /.menu -->
                </nav><!-- /.stacked-menu -->
            </div><!-- /.aside-menu -->
            <!-- Skin changer -->
            <footer class="aside-footer border-top p-2">
                <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span
                        class="d-compact-menu-none">Mode sombre</span> <i class="fas fa-moon ml-1"></i></button>
            </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
    </aside><!-- /.app-aside -->
    <!-- .app -->
    @yield('content')
    <!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{asset('assets/vendor/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('assets/vendor/stacked-menu/js/stacked-menu.min.js')}}"></script>
    <script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="{{asset('assets/javascript/theme.min.js')}}"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{asset('assets/javascript/pages/table-demo.js')}}"></script> <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-116692175-1');
    </script>

    <script>
        function pending() {
            alert(
                "Vous etes sur le pont d'envoyer la facture. Veuillez patienter, votre connexion est faible. cela peut prendre jusqu'a 2minutes");

            // show the div with id pending
            document.getElementById("pending").style.display = "block";
        }
        // on page load, set skin key to dark
        localStorage.setItem('skin', 'dark');
    </script>
    <script>
        // define send_message function that take id as parameter and send message to database with ajax GET request method send_message/{id}
        function send_message(id, nom) {
            $('#message_id').val(id);
            $('#label_message').text('Message a '+nom);
            // open modalTable2 modal
            $('#modalTable2').modal('show');

           /* $.ajax({
                url: 'send_message/' + id,
                type: 'GET',
                success: function(data) {
                    // if success, show success message
                    alert('Message sent successfully to id N'+id);
                }
            }); **/
        }


    </script>
    <script>


        function appliquer_promo(id, libbelle) {
            $('#message_id').val(id);
            $('#label_message').text('Message a '+libbelle);
            // open modalTable2 modal
            $('#modalTable2').modal('show');

           /* $.ajax({
                url: 'send_message/' + id,
                type: 'GET',
                success: function(data) {
                    // if success, show success message
                    alert('Message sent successfully to id N'+id);
                }
            }); **/
        }
    </script>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>
  <script>
    $(document).ready(function () {
    $('#example').DataTable(
        // in french
        {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/French.json"
            },

            // hide Affichage de l'élément 1 à 2 sur 2 éléments
            "info": false,

        }
    );


});
  </script>
</body>

</html>

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Déconnexion!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
