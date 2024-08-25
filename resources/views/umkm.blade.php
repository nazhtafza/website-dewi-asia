<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>List UMKM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/umkm.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    @include('template.header')
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="jumbotron-content text-center">
            <h1 class="display-4">Cari Tahu UMKM di Desa Wisata Jurang</h1>
        </div>
    </div>
    <!-- Konten Header -->
    <!-- Profil Destinasi Wisata -->
    <div class="judul text-center mt-5">
        <h3>Daftar UMKM Dewi Asia</h3>
        <h1>Cari Tau UMKM dan Beli <br> Merchandise-nya!</h1>
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
                            <p class="telepon card-text">Nomor UMKM: {{ $umkm->nomor_umkm }}</p> <!-- Displaying UMKM phone number -->

                            <a href="{{ route('umkm.details', $umkm->id) }}" class="btn btn-primary mt-3">
                                Read More
                            </a>

                            <!-- Collapsible Content -->
                            {{-- <div class="collapse mt-3" id="collapseDetails{{$loop->parent->index}}{{$loop->index}}">
                                <h5>Nama Barang: {{ $barang->nama_barang }}</h5>
                                <p>Deskripsi: {{ $umkm->description }}</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
    
    <!-- Footer -->
    @include('template.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
