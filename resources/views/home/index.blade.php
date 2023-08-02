@extends('layouts.master')
@section('content')
<div class="container">
    <h5>Komik dan Novel Terbaru</h5>
        <div class="row gap">
            <div class="card" style="width: 18rem;">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset("images/Omniscient Third View Point.jpg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Omniscient Third View Point</h5>
                        <p class="card-text">Seorang pembaca komik yang mengetahui reinkanasi seorang MC</p>
                        <a href="view/komik" class="btn btn-primary">Baca</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset("images/Overpower Manager.jpg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Overpower Manager</h5>
                        <p class="card-text">Tentang manager yang sangat overpower mengurus pekerjaanya</p>
                        <a href="" class="btn btn-primary">Baca</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset("images/Druid.jpg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Druid</h5>
                        <p class="card-text">Seorang yang mendapatkan kekuatan druid</p>
                        <a href="#" class="btn btn-primary">Baca</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset("images/Jodoh untuk aleza.jpg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jodoh untuk Al-Zea</h5>
                        <p class="card-text">Menceritakan kisah hidup aleza</p>
                        <a href="view/novel" class="btn btn-primary">Baca</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset("images/Mine.jpg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mine</h5>
                        <p class="card-text">Menceritakan kisah yang romantis</p>
                        <a href="#" class="btn btn-primary">Baca</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset("images/Poliandri.jpeg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Poliandri</h5>
                        <p class="card-text">Cerita tentang suami istri</p>
                        <a href="#" class="btn btn-primary">Baca</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
