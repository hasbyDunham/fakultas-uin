@extends('layouts.frontend')
@section('content')
    <!-- Carousel Start -->
    <div class="carousel-head">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/sejarah.png') }}" class="img-fluid carousel-img" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about py-4 mb-0 mt-0">
        <div class="container py-4">
            <div class="row g-5 d-flex align-items-start">
                <div class="col-lg-12 wow fadeInLeft d-flex flex-column text-center mx-auto" data-wow-delay="0.2s">
                    <div class="section-title mb-5">
                        <h1 class="display-5 mb-4">Sejarah (FEBI)</h1>
                        <p class="text-start">Fakultas Ekonomi dan Bisnis Islam (FEBI) di Universitas Islam Negeri
                            Sunan Gunung Djati (UIN
                            SGD) Bandung didirikan oleh Rektor UIN SGD Bandung, Prof. Dr. H. Mahmud, M.Si.
                            <br>UIN SGD Bandung sendiri didirikan dari perubahan status IAIN Sunan Gunung Djati Bandung
                            pada
                            10 Oktober 2005. Perubahan status ini didasarkan pada Peraturan Presiden RI No. 57 Tahun
                            2005.
                            <br>UIN SGD Bandung didirikan oleh sejumlah tokoh masyarakat, alim ulama, dan cendekiawan
                            muslim
                            Jawa Barat, diprakarsai oleh K. H. Anwar Musaddad, K.H. A. Muiz, K.H. R. Sudja'i, dan
                            Arthata.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
@push('script')
    <script>
        var navbarColor = {!! json_encode(env('NAVBAR_COLOR', 'white')) !!};
        var footerColor = {!! json_encode(env('FOOTER_COLOR', 'black')) !!};
        var teksNavbar = {!! json_encode(env('TEKS_NAVBAR_COLOR', 'black')) !!};
        var teksFooter = {!! json_encode(env('TEKS_FOOTER_COLOR', 'white')) !!};
    </script>

    {{-- Mengatur document title menggunakan variabel dari Laravel --}}
    <script>
        document.title = @json(config('app.title'));
    </script>
@endpush
