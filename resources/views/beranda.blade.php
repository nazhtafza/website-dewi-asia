<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Pesona Desa Jurang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    @include('template.header')
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="jumbotron-content">
            <h1 class="display-4">Gaya Baru Berwisata Kreasi <br>dan Keindahan Desa Jurang</h1>
            <p class="lead">Kunjungan yang menciptakan pengalaman bermakna, <br>dan pemberdayaan ekonomi lokal</p>
            <button type="button" class="btn btn-custom" href="/tentang-kami">Baca Selengkapnya</button>
        </div>
    </div>
    <!-- Content Event -->
    <div class=" container text-center">
        <div class="row                                                                                                                         ">
            <div class="col">
                <div class="tur">
                    <img src="{{ asset('images/tur.png') }}" width="81" height="81" alt="Tur">
                    <div class="teks">
                        <h3>Tour De Jurang</h3>
                        <p>Paket wisata untuk meningkatkan potensi dan ekonomi desa</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="pesta">
                    <img src="{{ asset('images/pesta.png') }}" width="81" height="81" alt="pesta">
                    <div class="teks">
                        <h3>Pesta Dolanan</h3>
                        <p>Melestarikan permainan tradisional dan terdapat UMKM khas Desa Jurang</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="kreasi">
                    <img src="{{ asset('images/kreasi.png') }}" width="81" height="81" alt="kreasi">
                    <div class="teks">
                        <h3>Aneka Kreasi</h3>
                        <p>Hasil imajinasi warga Desa dalam menciptakan kreasi dibidang Seni</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Konten Profil Desa Jurang -->
    <div class="profil container-fluid mr-5">
        <img src="{{ asset('images/umbul.png') }}" alt="umbul">
        <div class="teks">
            <h1>Profil Desa Wisata Jurang</h1>
            <p>Desa Wisata Jurang merupakan rencana strategis untuk mencapai cita-cita desa dan diharapkan dapat menciptakan lapangan pekerjaan baru bagi masyarakat lokal dan meningkatkan perekonomian UMKM serta menjaga hubungan harmonis antara <b>Alam, Adat dan Budaya.</b></p>
        </div>
    </div>
    <!-- Kreasi Khas Jurang -->
    <h2>Kreasi Khas Desa Jurang</h2>
    <!-- card kreasi -->
    <div class="container-fluid kreasijrg" style="padding-left: 64px; padding-right: 64px;">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/bolit.png')}}" class="card-img-top" alt="bolit">
                    <div class="card-body">
                        <h5 class="card-title">Boneka Lilit</h5>
                        <p class="card-text">Boneka Lilit terbuat dari limbah paper filter rokok yang dibuat berbagai bentuk dan ukuran</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/batu.png')}}" class="card-img-top" alt="kerajinan batu">
                    <div class="card-body">
                        <h5 class="card-title">Kerajinan Batu</h5>
                        <p class="card-text">Kerajinan Batu berupa cobek, cobek karakter, dan lain-lain.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/galecot.png')}}" class="card-img-top" alt="galecot">
                    <div class="card-body">
                        <h5 class="card-title">Galecot</h5>
                        <p class="card-text">Olahan makanan yang terbuat dari beraneka ragam gethuk dan cetot</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/goni.png')}}" class="card-img-top" alt="goni">
                    <div class="card-body">
                        <h5 class="card-title">Peci Goni</h5>
                        <p class="card-text">Peci yang terbuat dari limbah karung goni yang dapat dibeli secara custom sesuai keinginan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/grontol.png')}}" class="card-img-top" alt="grontol">
                    <div class="card-body">
                        <h5 class="card-title">Grontol</h5>
                        <p class="card-text">Grontol adalah makanan tradisional dari jagung yang memiliki tekstur lembut, manis, dan kenyal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/marning.png')}}" class="card-img-top" alt="marning">
                    <div class="card-body">
                        <h5 class="card-title">Marning</h5>
                        <p class="card-text">Marning adalah camilan renyah dan gurih berbahan dasar jagung yang lezat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SDGS -->
    <h2 class="pencapaian mt-5 mb-4 text-center">Pencapaian Pembangunan Keberlanjutan</h2>
    <div class="sdgs container-fluid text-center">
        <img src="{{asset('images/sdgs1.png')}}" alt="sdgs 1">
        <img src="{{asset('images/sdgs2.png')}}" alt="sdgs 2">
        <img src="{{asset('images/sdgs8.png')}}" alt="sdgs 8">
        <img src="{{asset('images/sdgs17.png')}}" alt="sdgs 17">
    </div>
    <!-- Berkolaborasi dengan -->
    <div class="colab">
        <h4 class="mt-5 mb-4 text-center">Berkolaborasi dengan</h4>
        <div class="logos container-fluid mb-5 text-center">
            <img class="ppk" src="{{asset('images/ppk.png')}}" alt="PPK Ormawa">
            <img class="pemdes" src="{{asset('images/pemdes.png')}}" alt="Pemdes Jurang">
            <img class="umk" src="{{asset('images/umk.png')}}" alt="UMK">
            <img class="fima" src="{{asset('images/fima.png')}}" alt="FIMA">
        </div>
    </div>
    <!-- Footer -->
    @include('template.footer')
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>