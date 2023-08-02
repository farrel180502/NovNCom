@extends('layouts.master')
@section('content')
<body>
    <section class="content">
        <div class="card-body">
            <form method="POST" action="{{ url('komik') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputName">Nama Komik</label>
                    <input type="text" id="inputName" class="form-control" name="nama_karya">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Tipe Karya</label>
                    <input type="email" id="inputEmail" class="form-control" name="type"
                        value="Komik" readonly>
                </div>
                <div class="form-group">
                    <label for="inputProfilePic">Poster</label>
                    <input type="file" id="inputProfilePic" class="form-control" name="poster">
                </div>
                <div class="form-group">
                    <label for="inputAbout">Sinopsis</label>
                    <textarea id="inputAbout" class="form-control" name="about" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Buat Komik</button>
            </form>
        </div>
    </section>
@endsection