{{-- page ini dibuat hanya untuk mempermudah pengambilan template bootstrap dan tidak digunakan --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
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
                    <a class="nav-link active" aria-current="page" style="color:#27374D; font-weight:bold" href="/akunBaru">Buat Akun Baru</a>
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
                            <li><a class="dropdown-item" style="color:#27374D; font-weight:bold" href="keuangan">Laporan
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