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
    <link rel="stylesheet" href="{{ asset('/dist/bsccs/bootstrap.css') }}">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #ffdd2a;
            color: #fff;
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

<body>
    <section class="profile">
        <div class="container-fluid">
            <div class="channel-info" style="background-color: #ffdd2a">
                <div class="box-profile">
                    <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                </div>
                <div>
                    <div class="channel-username">{{ Auth::user()->name }}</div>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Manage
                        Account</button>
                    <button class="btn btn-outline-primary">Upload</button>
                </div>
            </div>
            <div class="d-flex border-top border-bottom justify-content-between mx-5">
                <div class="d-flex ">
                    <div class="px-3 text-center border-end">
                        <div>Following</div>
                        <div>{{ Auth::user()->follows->count() }}</div>
                    </div>
                    <div class="px-3 text-center border-start">
                        <div>Followers</div>
                        <div>{{ Auth::user()->Followers->count() }}</div>
                    </div>
                </div>
                @auth
                    @unless (auth()->user()->is($user))
                        <div>
                            @if (auth()->user()->isFollowing())
                                <form action="{{ route('follow', $user) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button>
                                        {{ __('Unfollow') }}
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('follow', $user) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button>
                                        {{ __('Follow') }}
                                    </button>
                                </form>
                            @endif
                        </div>
                    @endunless
                @endauth
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="channel-info">
                            <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture"
                                class="rounded-circle border border-dark mx-auto">
                        </div>
                        <div class="channel-username text-center">{{ Auth::user()->name }}
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('profile.edit', ['edit' => Auth::user()->id]) }}"
                                    class="manage-account-btn rounded btn btn-outline-warning">Edit Profile</a>

                            </div>
                            <div class="mt-3">Email : {{ Auth::user()->email }}
                                <div>Phone :{{ Auth::user()->no_tlpn }}
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a
                                                href="{{ url('/dashboard') }}">Home</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">Beranda</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Karya</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Novel</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Komik</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#tab_5"
                                        data-toggle="tab">Info</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="tab_1">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/a.jpg') }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">shadow slave</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/Infinite_Mage.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">infinity Mage</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_2">
                                    <div class="row">
                                        {{-- @foreach ($karya as $item)
                                            @if ($item->type == 'Novel' || $item->type == 'Komik')
                                                <div class="col-sm-3">
                                                    @if ($item->type == 'Novel')
                                                        <div class="col-sm-3">
                                                            <div class="card" style="width: 18rem;">
                                                                <img src="https://komik.pendidikan.id/online/cover/pesan_botol_pak_bakri-thumb.jpg"
                                                                    class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $item->nama_karya }}
                                                                    </h5>
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
                                        @endforeach --}}
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/1.jpg') }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">the beginning after and the end</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/a.jpg') }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">shadow slave</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/b.jpg') }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">dimensional descendant</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/IMG-20210422-WA0022-768x1018-1.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">devil</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/Level-Up-Doctor-1-2.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">level-up doctor</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/Infinite_Mage.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">infinity Mage</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_3">
                                    <div class="row">
                                        {{-- @foreach ($karya as $item)
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
                                        @endforeach --}}
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/1.jpg') }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">the beginning after and the end</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/a.jpg') }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">shadow slave</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/b.jpg') }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">dimensional descendant</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_4">
                                    <div class="row">
                                        {{-- @foreach ($karya as $item)
                                            @if ($item->type == 'Komik')
                                                <div class="col-sm-3">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="https://komik.pendidikan.id/online/komik/kecil_kecil_berbahaya/files/mobile/1.jpg"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Devil</h5>
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
                                        @endforeach --}}
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/IMG-20210422-WA0022-768x1018-1.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">devil</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/Level-Up-Doctor-1-2.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">level-up doctor</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{ asset('storage/Infinite_Mage.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">infinity Mage</h5>
                                                    <p class="card-text">chapter 1</p>
                                                    <a href="#" class="btn btn-primary"> Baca <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
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
