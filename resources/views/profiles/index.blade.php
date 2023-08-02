<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nove</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/plugins/ekko-lightbox/ekko-lightbox.css') }}">

    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css?v=3.2.0') }}">
</head>

<body>
    <section class="profile">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                        alt="User profile picture">
                </div>
                <div class="profile-username text-center">{{ Atuh::user()->name }}</div>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-0">
                            <ul class="nav nav-pills p-2 mx-auto nav-justified">
                                <li class="nav-item"><a class="nav-link active" href="#tab_1"
                                        data-toggle="tab">Beranda</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Karya</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Novel</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Komik</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Info</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                {{-- <div class="tab-pane active" id="tab_1">
                                    //ini beranda
                                    <div class="card" style="width: 18rem;">
                                        <img src="https://komik.pendidikan.id/online/komik/kecil_kecil_berbahaya/files/mobile/1.jpg"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the
                                                bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="tab-pane" id="tab_2">
                                    <div class="row">
                                        @foreach ($karya as $item)
                                            @if ($item->type == 'Novel' || $item->type == 'Komik')
                                                <div class="col-sm-3">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="https://komik.pendidikan.id/online/komik/kecil_kecil_berbahaya/files/mobile/1.jpg"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text">{{ $item->about }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_3">
                                    <div class="row">
                                        @foreach ($karya as $item)
                                            @if ($item->type == 'Novel')
                                                <div class="col-sm-3">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="https://komik.pendidikan.id/online/komik/kecil_kecil_berbahaya/files/mobile/1.jpg"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text">{{ $item->about }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_4">
                                    <div class="row">
                                        @foreach ($karya as $item)
                                            @if ($item->type == 'Komik')
                                                <div class="col-sm-3">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="https://komik.pendidikan.id/online/komik/kecil_kecil_berbahaya/files/mobile/1.jpg"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text">{{ $item->about }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_5">

                                    <div>
                                        <div class="card-text">{{ Auth::user()->about }}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>




    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>

    <script src="{{ asset('/dist/js/adminlte.min.js?v=3.2.0') }}"></script>

    <script src="{{ asset('/plugins/filterizr/jquery.filterizr.min.js') }}"></script>

    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
</body>

</html>
