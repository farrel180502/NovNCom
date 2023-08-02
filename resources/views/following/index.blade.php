@extends('layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0"') }}">
    </head>

    <body>
        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="activity">

                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                                <a href="#">Burhan.</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">palembang - 7:30 PM today</span>
                        </div>

                        <p>
                            Guys ane hiatus dulu 1 bulan
                        </p>
                        <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                    <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                            </span>
                        </p>
                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user8-128x128.jpg" alt="user image">
                            <span class="username">
                                <a href="#">Riki.</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">malay - 9:00 AM 3 day ago</span>
                        </div>

                        <p>
                            BIG UPDATE aku udah rilis beberapa chapter baru lohhhh
                        </p>
                        <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                    <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                            </span>
                        </p>
                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user3-128x128.jpg" alt="user image">
                            <span class="username">
                                <a href="#">indah.</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">jakarta - 7:30 PM today</span>
                        </div>

                        <p>
                            bisa kalian rate gak 1 sampai 10 terhadap salah satu npc kita si bujang
                        </p>
                        <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                    <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                            </span>
                        </p>
                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    </body>

    </html>
@endsection
