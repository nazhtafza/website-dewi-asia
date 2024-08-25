<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $umkm->nama_umkm }}</title>
</head>

<body>
    <!-- Header -->
    @include('template.header')

    <!-- UMKM Details -->
    <div class="container" style="margin-top: 100px">
        <h1>{{ $umkm->nama_umkm }}</h1>
        <p>Nomor WA: {{ $umkm->nomor_umkm }}</p>
        <p>Deskripsi: {{ $umkm->description }}</p>

        <!-- Displaying associated barang -->
        <h3>Barang</h3>
        <div class="row">
            @foreach ($umkm->barangs as $barang)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $barang->gambar_barang) }}" class="card-img-top" alt="{{ $barang->nama_barang }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                            <p class="card-text">Harga: Rp {{ number_format($barang->harga_barang, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</body>

</html>
