@extends('layouts.boostrap5')
<div class="container-fluid fixed-top p-4">
    <div class="col-12">
        <div class="d-flex justify-content-end">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-muted">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                        @endif
                @endif
            </div>
            @endif
        </div>
    </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Selamat Datang di Aplikasi Reservasi Hotel</h1>
                    </div>
                    <div class="card-body">
                        <p>Terima kasih telah memilih aplikasi reservasi hotel kami. Aplikasi ini dirancang untuk memudahkan
                            Anda dalam melakukan reservasi hotel dengan cepat dan mudah. Dengan fitur-fitur yang lengkap,
                            Anda dapat melihat informasi mengenai ketersediaan kamar, harga, lokasi, fasilitas, dan
                            lain-lain.</p>
                        <p>Kami berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan dengan menyediakan
                            kamar-kamar yang nyaman dan bersih, serta fasilitas yang memadai. Selain itu, kami juga
                            menawarkan harga yang terjangkau sehingga Anda dapat menikmati liburan atau perjalanan bisnis
                            tanpa perlu khawatir dengan anggaran.</p>
                        <p>Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau membutuhkan bantuan. Kami
                            siap membantu Anda dengan senang hati.</p>
                        <a href="login" class="btn btn-primary mt-3">Mulai Reservasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Memanggil file JavaScriptBootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
