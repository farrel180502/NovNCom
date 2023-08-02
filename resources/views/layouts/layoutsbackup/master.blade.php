<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NovnCom</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/ekko-lightbox/ekko-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css?v=3.2.0') }}">
    <link rel="stylesheet" href="{{ asset('/dist/bsccs/bootstrap.css') }}">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #ffdd2a;
            color: #ffdd2a;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-around;
            padding: 10px;
        }

        .channel-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
        }

        .channel-info img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .channel-username {
            font-size: 20px;
            font-weight: bold;
        }

        .video {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .video img {
            width: 180px;
            height: 100px;
            margin-right: 10px;
        }

        .video-title {
            font-weight: bold;
        }

        .video-description {
            color: #666;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* .manage-account-btn,
        .upload-btn {
            padding: 5px 10px;
            color: #000000;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        } */
    </style>
</head>

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
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" data-toggle="tab">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" data-toggle="tab">Komik</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" data-toggle="tab">Novel</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" data-toggle="tab">Following</a></li>
                            </ul>
                        </div>
                    @yield('content')
                        {{-- <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="tab_2">
                                    <div class="row">
                                        @foreach ($karya as $item)
                                            @if ($item->type == 'Novel' || $item->type == 'Komik')
                                                <div class="col-sm-3">
                                                    @if ($item->type == 'Novel')
                                                        <div class="col-sm-3">
                                                            <div class="card" style="width: 18rem;">
                                                                <img src="https://komik.pendidikan.id/online/cover/pesan_botol_pak_bakri-thumb.jpg"
                                                                    class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $item->nama_karya }}</h5>
                                                                    <p class="card-text">{{ $item->about }}</p>
                                                                    <a href="#" class="btn btn-primary"> Baca
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor"
                                                                            class="bi bi-arrow-right-short"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                                        </svg></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card" style="width: 18rem;">
                                                            <img src="https://komik.pendidikan.id/online/komik/kecil_kecil_berbahaya/files/mobile/1.jpg"
                                                                class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $item->nama_karya }}</h5>
                                                                <p class="card-text">{{ $item->about }}</p>
                                                                <a href="#" class="btn btn-primary"> Baca <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor"
                                                                        class="bi bi-arrow-right-short"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                                    </svg></a>
                                                            </div>
                                                        </div>
                                                    @endif
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
                                                        <img src="https://komik.pendidikan.id/online/cover/pesan_botol_pak_bakri-thumb.jpg"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $item->nama_karya }}</h5>
                                                            <p class="card-text">{{ $item->about }}</p>
                                                            <a href="#" class="btn btn-primary"> Baca <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-arrow-right-short"
                                                                    viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                                </svg></a>
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
                                                            <h5 class="card-title">{{ $item->nama_karya }}</h5>
                                                            <p class="card-text">{{ $item->about }}</p>
                                                            <a href="#" class="btn btn-primary"> Baca <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-arrow-right-short"
                                                                    viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                                </svg></a>
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
                        </div> --}}
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
    <script src="{{ asset('/dist/bsjs/bootstrap.bundle.js') }}"></script>
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
