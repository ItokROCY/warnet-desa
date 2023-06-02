<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

{{-- header navbar --}}
    <nav class="navbar" style="background-color: #ECF8F9;">
        <div class="container-fluid">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <img src="{{ URL::asset('img/computer_svgrepo.com.svg') }}" alt="Logo" width="40" height="35" class="mt-0">
                    <a class="navbar-brand" style="font-weight:bold; color:#4942E4; font-size:25px">Warnet Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#27374D; font-weight:bold" href="/akunBaru">Buat Akun Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#27374D; font-weight:bold" href="/tambahBilling">Tambah Biling</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:#27374D; font-weight:bold"
                        data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu Admin</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="color:#27374D; font-weight:bold" href="/laporanLokal">Laporan PC
                                lokal</a></li>
                        <li><a class="dropdown-item" aria-current="active" style="color:#27374D; font-weight:bold" href="/keuangan">Laporan
                                Keuangan</a></li>
                                <li><a class="dropdown-item" style="color:#27374D; font-weight:bold" href="/hapusAkun">Hapus User</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/feedback">Feedback Pelanggan</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex justify-content-end">
                <a class="navbar-brand" style="font-weight:bold; color:#000000; font-size:25px">Dashboard Admin</a>
                <button class="btn btn-danger" type="logout">Logout</button>
            </form>
    </nav>
    </nav>

    {{-- isi content --}}

    <div class="container md-5">
        <h1>Laporan Keuangan here</h1>
    
        </div>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
