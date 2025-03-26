@extends('layouts.app')
@section('title', 'Home')
@section('konten')
    <!-- Page Title -->
    <div class="section">
        <div class="container-fluid p-0" data-aos="fade-up">
            <img class="img-thumbnail mt-2 w-100" src="{{ asset('bg.jpeg') }}" alt="" srcset="">

        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 justify-content-between">
                <div class="col-xl-6">
                    <h2 class="text-primary fw-bold text-uppercase">Pesan Gembala</h2>
                    <blockquote class="blockquote">
                        <p class="fs-3 font-ayat">Segala perkara dapat kutanggung di dalam Dia yang memberi kekuatan
                            kepadaku</p>
                        <footer class="blockquote-footer">
                            <cite title="Source Title">
                                Pdt. Roy Darma Nainggolan
                            </cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="col-xl-5">
                    <img class="img-fluid rounded-4 shadow" src="{{ asset('assets/img/pdt.jpeg') }}" alt="pendeta">
                </div>

            </div>
        </div><!-- End Section Title -->

    </section><!-- /Starter Section Section -->

    <section class="container text-center my-5">
        <h2>Jadwal Ibadah</h2>
        <ul class="list-group w-50 mx-auto">
            <li class="list-group-item">⛪ Ibadah Minggu - 08:00 WIB</li>
            <li class="list-group-item">🙏 Doa Rabu - 19:00 WIB</li>
            <li class="list-group-item">🔥 Persekutuan Pemuda - 17:00 WIB</li>
        </ul>
        <a href="{{ url('/jadwal') }}" class="btn btn-primary mt-3">Lihat Semua Jadwal</a>
    </section>

    <section class="container my-5">
        <h2 class="text-center">Kegiatan Gereja</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="/img/event1.jpg" class="img-fluid rounded" alt="Retreat Pemuda">
                <h5 class="mt-2">Retreat Pemuda</h5>
                <p>Penguatan iman dan kebersamaan bagi pemuda gereja.</p>
            </div>
            <div class="col-md-4">
                <img src="/img/event2.jpg" class="img-fluid rounded" alt="Ibadah Natal">
                <h5 class="mt-2">Ibadah Natal</h5>
                <p>Perayaan Natal bersama seluruh jemaat.</p>
            </div>
            <div class="col-md-4">
                <img src="/img/event3.jpg" class="img-fluid rounded" alt="Pelayanan Sosial">
                <h5 class="mt-2">Pelayanan Sosial</h5>
                <p>Memberikan bantuan kepada masyarakat yang membutuhkan.</p>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('/kegiatan') }}" class="btn btn-primary">Lihat Semua</a>
        </div>
    </section>
@endsection
