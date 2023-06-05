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

<body style="background-color:#1E4174">

{{-- header navbar --}}
    <nav class="navbar" style="background-color: #DDA94B;">
        <div class="container-fluid">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <img src="{{ URL::asset('img/computer_svgrepo.com.svg') }}" alt="Logo" width="40" height="35" class="mt-0">
                    <a class="navbar-brand" style="font-weight:bold; color:#1E4174; font-size:25px">Warnet Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="color:#1E4174; font-weight:bold" href="/akunBaru">Buat Akun Baru</a>
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
                            <li><a class="dropdown-item" style="color:#1E4174; font-weight:bold" href="keuangan">Laporan
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

    <div class="container mt-5">
        <h2 style="color:#DDA94B; font-weight:bolder">Tambah Username Pelanggan Baru</h2>
        <br>
        <label style="font-weight:bold; color:white" >Masukan Username</label>
        <div class="input-group mb-3 mt-2">
            <input type="text" class="form-control" placeholder="Username" aria-label="#" aria-describedby="button-addon2">
          </div>
        <br>
          <label style="font-weight:bold; color:white"">Masukan Email</label>
          <div class="input-group mb-3 mt-2">
            <input type="text" class="form-control" placeholder="example@example.com" aria-label="#" aria-describedby="button-addon2">
          </div>

          <label for="inputPassword5" class="form-label" style="font-weight:bold; color:white"">Password</label>
          <div class="input-group mb-3 mt-2">
            <input type="password" class="form-control" placeholder="Masukan Password" aria-label="#" aria-describedby="button-addon2">
          </div>
          <br>
          <button type="button" class="btn btn-success d-flex justify-content-end">Daftarkan</button>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
