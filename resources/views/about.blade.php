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
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navigation Bar -->
    @include('template.header')
    <!-- Jumbotron tentang -->
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="jumbotron-content text-center">
            <h1 class="display-4">Jelajahi Destinasi Kreasi dan Alam <br>di Desa Wisata Jurang</h1>
        </div>
    </div>
    <!-- Profil Destinasi Wisata -->
    <div class="judul text-center mt-5">
        <h3>Destinasi Wisata</h3>
        <h1>Desa Wisata Edukasi <br>Berbasis Kreasi dan Alam</h1>
    </div>
    <div class="map container-fluid mt-5">
        <img src="{{asset('images/about/mapjrg.png')}}" width="535" height="auto" alt="map">
        <p>Desa Wisata Edukasi Berbasis Kreasi dan Alam (DEWIASIA) merupakan destinasi di Desa Jurang, Kabupaten Kudus yang tepat untuk wisatawan yang ingin mempelajari tentang kreasi lokal,
            membuat produk unik dan menjelajah alam sambil menikmati suasana pedesaan yang asri. Pada destinasi ini wisatawan dapat mengetahui cara pembuatan boneka lilit,
            proses pembuatan peci mahagoni, kerajinan batu berupa cobek, mencoba makanan tradisional khas Desa Jurang dan susur sungai di Mini River Tubing.</p>
    </div>
    <div class="daftar-umkm">
        <!-- List UMKM Jurang -->
        <div class="ukm text-center mt-5">
            <h1>Cari Tau UMKM di Desa Jurang</h1>
            <h3>Berikut adalah UMKM yang ada di Desa Jurang yang <br>dapat Anda jadikan referensi pembelian oleh-oleh <br>khas desa Jurang</h3>
        </div>
        <!-- Card UMKM -->
        <div class="umkm-container">
            @foreach ($umkms as $umkm)
                @foreach ($umkm->barangs as $barang)
                    <div class="umkm">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $barang->gambar_barang) }}" class="card-img-top" alt="{{ $barang->nama_barang }}">
                            <div class="card-body">
                                <h4>{{ $umkm->nama_umkm }}</h4> <!-- Displaying UMKM name -->
                                <p class="harga card-text">Rp {{ number_format($barang->harga_barang, 0, ',', '.') }}</p> <!-- Displaying price -->
                                <p class="telepon card-text">Nomor UMKM: {{ $umkm->nomor_umkm }}</p> <!-- Assuming you have this field -->
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
        
        <a href="{{route('umkm') }}" class="btn btn-custom text-center">Selengkapnya</a>
    </div>
    <!-- Footer -->
    @include('template.footer')
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>