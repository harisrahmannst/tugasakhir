@extends('layouts.boostrap5')
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <div class="row justify-center">
            <div class="col-xs-12 col-md-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert"
                    style="display: flex; align-items: center; padding-right: 1rem;">
                    {{ session('success') }}
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"
                        style="margin-left: auto;" onclick="closeAlert()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif


    <div class="container mt-3">
        <h1>Selamat Datang di Aplikasi Reservasi Hotel</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Reservasi Baru</h4>
                    </div>
                    <div class="card-body">
                        <p>Silakan membuat reservasi baru untuk tamu.</p>
                        <a href="reservasi" class="btn btn-primary">Buat Reservasi Baru</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Reservasi</h4>
                    </div>
                    <div class="card-body">
                        <p>Daftar semua reservasi yang telah dilakukan.</p>
                        <a href="#" class="btn btn-primary">Lihat Daftar Reservasi</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Kamar Tersedia</h4>
                    </div>
                    <div class="card-body">
                        <p>Lihat daftar kamar yang tersedia untuk reservasi.</p>
                        <a href="#" class="btn btn-primary">Lihat Kamar Tersedia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Tamu</h4>
                    </div>
                    <div class="card-body">
                        <p>Lihat daftar semua tamu yang telah melakukan reservasi.</p>
                        <a href="#" class="btn btn-primary">Lihat Daftar Tamu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmIaUksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</x-app-layout>
