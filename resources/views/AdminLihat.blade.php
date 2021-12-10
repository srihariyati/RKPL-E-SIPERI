<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/AdminLihatStyle.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
    <a onclick="history.back()"> <-Kembali </a><br>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="background">
<nav class="navbar">
        <a href="/MenuAdmin"><img src="/img/logo.png" alt="logo"></a>
    </nav>
<div class="d-flex justify-content-center">
    <div class="card text-white bg-secondary mb-3 d-flex" style="max-width: 18rem; margin-left: 10px;">
        <div class="card-header">Jumlah Pasien</div>
        <div class="card-body">
        <h5 class="card-title">{{$jpasien}}</h5>
        </div>
    </div>

    <div class="card text-white bg-success mb-3 d-flex" style="max-width: 18rem; margin-left: 75px;">
        <div class="card-header">Jumlah Perawat</div>
        <div class="card-body">
          <h5 class="card-title">{{$jperawat}}</h5>
        </div>
    </div>

    <div class="card text-white bg-danger mb-3" style="max-width: 18rem; margin-left: 75px;">
        <div class="card-header">Jumlah Dokter</div>
        <div class="card-body">
          <h5 class="card-title">{{$jdokter}}</h5>
        </div>
      </div>

      <div class="card text-dark bg-warning mb-3" style="max-width: 18rem; margin-left: 75px;">
        <div class="card-header">Jumlah Spesialis</div>
        <div class="card-body">
          <h5 class="card-title">{{$jspesialis}}</h5>
        </div>
      </div>
</div>

  </div>
    <br>
    <br>

    <!--tabel data pasien-->
    <div class = "container" style="margin-top:-55px !important;">
        <h2 class="p-3 mb-2 bg-success text-white" style = "text-align : center; margin-top : 5%"> Data Pasien</h2>
    <table class="table table-success table-hover custom " id="myTable" >
    <thead>
        <tr style="text-align:center;font-weight:bold;background-color:#eee;">
            <th>Nomor Pasien</th>
            <th>Nama Pasien</th>
            <th>Tanggal Lahir</th>
            <th>Alamat Pasien</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>

    <tbody>
        @foreach($pasien as $ps)
        <tr>
            <td>{{$ps ->no_pasien}}</td>
            <td>{{$ps->nama_pasien}}</td>
            <td>{{$ps->tgl_lhr_pasien}}</td>
            <td>{{$ps -> almt_pasien}}</td>
            <td>{{$ps -> nohp_pasien}}</td>
            <td>{{$ps->jk_pasien}}</td>
        </tr>
        @endforeach($pasien as $ps)
    </tbody>
    </table>

    <!--tabel data perawat-->
    <h2 class="p-3 mb-2 bg-success text-white" style = "text-align : center; margin-top : 5%"> Data Perawat</h2>
    <table class="table table-success table-hover custom " id="myTable" >
    <thead>
        <tr>
            <th>Nomor Pegawai</th>
            <th>Nama Perawat</th>
        </tr>
    </thead>

    <tbody>
        @foreach($perawat as $per)
        <tr>
            <td>{{$per -> no_pegawai}}</td>
            <td>{{$per -> nama_perawat}}</td>
        </tr>
        @endforeach($perawat as $per)
    </tbody>
    </table>

    <!--tabel data Dokter-->
    <h2 class="p-3 mb-2 bg-success text-white" style = "text-align : center; margin-top : 5%"> Data Dokter</h2>
    <table class="table table-success table-hover custom " id="myTable">
    <thead>
        <tr>
            <th>Nomor Dokter</th>
            <th>Nama Dokter</th>
            <th>Bidang Spesialis</th>
        </tr>
    </thead>

    <tbody>
        @foreach($dokter as $dok)
        <tr>
            <td>{{$dok -> no_dokter}}</td>
            <td>{{$dok -> nama_dokter}}</td>
            <td>{{$dok -> bidang_spesialis}}</td>
        </tr>
        @endforeach($dokter as $dok)
    </tbody>
    </table>
</body>
</html>