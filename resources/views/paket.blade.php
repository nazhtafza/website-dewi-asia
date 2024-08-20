<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Paket Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/paket.css') }}" rel="stylesheet">
</head>

<body>
    <!--header-->
    @include('template.header')
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="jumbotron-content">
            <h1 class="display-4">Pilih Paket Edukasi dan <br>Mari Berwisata!</h1>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Paket Wisata</h3>
                    <p class="card-text">Pilih paket wisata yang sesuai dengan kebutuhanmu</p>
                    <!-- Dropdown Pilih Paket -->
                    <div class="dropdown">
                        <h5>Pilih Paket Wisata</h5>
                        <button class="btn btn-custom dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Paket
                        </button>
                        <div class="dropdown-menu scrollable-menu" aria-labelledby="scrollableDropdown">
                            <?php
                            // PHP loop to generate dropdown items
                            $itemCount = 20; // Number of items to add
                            for ($i = 1; $i <= $itemCount; $i++) {
                                echo '<a class="dropdown-item" href="#">Action ' . $i . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Pilih jadwal -->
                    <div class="dropdown">
                        <h5>Pilih Jadwal</h5>
                        <button class="btn btn-custom dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Jadwal
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <!-- Button Pilih Jadwal -->
                    <button> Pilih Jadwal</button>
                </div>
            </div>
        </div>
    </div>
    <!--Footer -->
    @include('template.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>