<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>

<body style="background-image: url('img/yaemiko.png'); background-size:cover ">

{{-- header navbar --}}
    <nav class="navbar" style="background-color: #ECF8F9;">
        <div class="container-fluid">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <img src="{{ URL::asset('img/computer_svgrepo.com.svg') }}" alt="Logo" width="40" height="35" class="mt-0">
                    <a class="navbar-brand" style="font-weight:bold; color:#4942E4; font-size:25px">Warnet Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="color:#27374D; font-weight:bold" href="/userPage">Menu utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#27374D; font-weight:bold" href="/buyPage">Tambah Biling</a>
                </li>
            </ul>
            <form class="d-flex justify-content-end" action="/logout" method="post">
                @csrf
                <a class="navbar-brand" style="font-weight:bold; color:#000000; font-size:25px">Hai, {{ Auth::user()->name }}</a>
                <button class="btn btn-danger" type="logout">Logout</button>
            </form>
    </nav>
    </nav>

    {{-- web content --}}

    <div class="container mt-5">
        <h1 style="font-weight:bold;color:#ECF8F9">Hallo {{ Auth::user()->name }}, Selamat Datang di Layanan Warnet Desa</h1>
        <h1 style="font-weight:bold;color:#ECF8F9">Sisa {{ Auth::user()->billing }} GB</h1>

    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
</body>

</html>
