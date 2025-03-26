@extends('layouts.app')
@section('title', 'Jadwal Ibadah')
@section('konten')
    <!-- Page Title -->
    <div id="jadwal" class="page-title custom-bg">
        <div class="container">
            {{-- <h1>HALAMAN SERVICE</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Service</li>
            </ol>
          </nav> --}}
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">

            <h2 class="text-uppercase">Jadwal Ibadah</h2>
            <p class="lead">Beribadah bersama dalam kasih dan damai</p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 align-items-center justify-content-center mt-3">

                <!-- Ibadah Raya -->
                <div class="col">
                    <div class="card shadow border-top-0 border-bottom-0 border-end-0 border-primary border-3 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-primary">Ibadah Raya</h5>
                            <p class="card-text text-muted">Setiap Minggu, 10:30 WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Ibadah Tengah Minggu -->
                <div class="col">
                    <div class="card shadow border-top-0 border-bottom-0 border-end-0 border-primary border-3 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-primary">Ibadah Tengah Minggu</h5>
                            <p class="card-text text-muted">Setiap Rabu, 19:30 WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Ibadah Pelayan -->
                <div class="col">
                    <div class="card shadow border-top-0 border-bottom-0 border-end-0 border-primary border-3 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-primary">Ibadah Pelayan</h5>
                            <p class="card-text text-muted">Setiap Jumat, 19:30 WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Ibadah Muda Mudi -->
                <div class="col">
                    <div class="card shadow border-top-0 border-bottom-0 border-end-0 border-primary border-3 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-primary">Ibadah Muda Mudi</h5>
                            <p class="card-text text-muted">Setiap Sabtu, 19:30 WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Ibadah Sekolah Minggu -->
                <div class="col">
                    <div class="card shadow border-top-0 border-bottom-0 border-end-0 border-primary border-3 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-primary">Ibadah Sekolah Minggu</h5>
                            <p class="card-text text-muted">Setiap Minggu, 08:00 WIB</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <p></p>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
