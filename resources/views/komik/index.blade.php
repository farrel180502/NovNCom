@extends("layouts.master")
@section("content")
<div class="card-body">
    <div class="tab-content">
        <div class="tab-pane" id="tab_2">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="https://komik.pendidikan.id/online/komik/kecil_kecil_berbahaya/files/mobile/1.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        {{-- <h5 class="card-title">{{ $item->nama_karya }}</h5>
                        <p class="card-text">{{ $item->about }}</p> --}}
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
            </div>
        </div>
    </div>
</div>   