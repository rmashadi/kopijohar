@extends('user.layouts.app')

@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-xl-6 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Menu Tentang Kopi dan Non Kopi</h4>
                                </div>
                                <img class="img-fluid w-100" src={{ URL::asset('dist/assets/images/samples/banana.jpg') }}
                                    alt="Card image cap">
                            </div>
                            <div class="card-footer">
                                <p class="card-text">
                                    Nikmati ragam kopi spesial dari <b>Kedai Kopi Johar</b> yang unik dan
                                    nikmat.
                                    Pilih dari berbagai biji kopi, bahan tambahan, dan bentuk sajian.
                                    Dengan suasana cozy dan ramah lingkungan, <b>Kedai Kopi Johar</b> adalah
                                    tempat yang sempurna untuk menikmati kopi dan bersantai bersama teman
                                    dan keluarga.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Menu Tentang Makanan</h4>
                                </div>
                                <img class="img-fluid w-100" src={{ URL::asset('dist/assets/images/samples/banana.jpg') }}
                                    alt="Card image cap">
                            </div>
                            <div class="card-footer">
                                <p class="card-text">
                                    <b>Kedai Kopi Johar</b> hanya menyediakan menu makanan ringan seperti
                                    french fries, roti canai, dan camilan lainnya yang cocok untuk menemani
                                    secangkir kopi.
                                    Semua makanan kami dibuat dengan bahan-bahan berkualitas dan diproses
                                    dengan higienis, sehingga Anda bisa menikmati hidangan yang lezat dan
                                    sehat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
