<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-color:#1E4174">

{{-- header navbar --}}
    <nav class="navbar" style="background-color: #DDA94B;">
        <div class="container-fluid">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <img src="{{ URL::asset('img/computer_svgrepo.com.svg') }}" alt="Logo" width="40" height="35" class="mt-0">
                    <a class="navbar-brand" style="font-weight:bold; color:#4942E4; font-size:25px">Warnet Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#1E4174; font-weight:bold" href="/akunBaru">Buat Akun Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#1E4174; font-weight:bold" href="/tambahBilling">Tambah Biling</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:#1E4174; font-weight:bold"
                        data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu Admin</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="color:#1E4174; font-weight:bold" href="/laporanLokal">Laporan PC
                                lokal</a></li>
                        <li><a class="dropdown-item" aria-current="active" style="color:#1E4174; font-weight:bold" href="/keuangan">Laporan
                                Keuangan</a></li>
                                <li><a class="dropdown-item" style="color:#1E4174; font-weight:bold" href="/hapusAkun">Hapus User</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/feedback">Feedback Pelanggan</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex justify-content-end">
                <a class="navbar-brand" style="font-weight:bold; color:white; font-size:25px">Dashboard Admin</a>
                <button class="btn btn-danger" type="logout">Logout</button>
            </form>
    </nav>
    </nav>

    {{-- isi content --}}

    <div class="container md-5">
        <div class="box colo">
            <br>
            <h1 style="font-weight:bold; color:#DDA94B">Feedback Pelanggan</h1>
            <p style="color: white">List feedback dari Pelanggan</p>
            <div style=" background-color: #DDA94B; padding: 20px ; border-radius:10px">
        <table class="table table-hover table-striped table-light table-bordered border-primary border-3">
            <thead class="table-dark table-bordered border-primary border-3">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama user</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Rating</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>internet kencang, buat apa?</td>
                <td>10/10</td>
                <td> <button type="button" class="btn btn-danger">Hapus</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>mantap</td>
                <td>5/10    </td>
                <td> <button type="button" class="btn btn-danger">Hapus</button></td>
              </tr>
            </tbody>
          </table>

    </div>
</div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
