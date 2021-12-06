<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS External -->
    <link rel="stylesheet" href="/css/ListPasienStyle.css">

    <title>List Pasien</title>
  </head>
  <body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark justify-content-end">
        <img src="/img/logo.png" alt="logo">
    </nav>
    <form action="" class="container bg-white mt-5 radius-13 font-weight-bold">
        <div class="row">
            <div class="col-sm">
                <img class="text-center pt-4 pb-3" src="/img/back.png" alt="arrowBack">
            </div>
            <div class="col-sm">
                <h3 class="text-center pt-5 pb-3">Data dan Riwayat Pasien</h3>
            </div>
            <div class="col-sm d-flex justify-content-end  mt-4 ">
               <button class="border-0 btn-peri" style="background: #51BFBA;"><a class=" text-white" href="">Unduh</a></button>
            </div>
        </div>
        @foreach
        <div class="container">
            <p class="text-white rounded-6 container pt-2" style="background: #51BFBA;">Data Pasien</p>
            <div class="container spacing">
                <div class="row">
                    <div class="col">
                        <p>ID : 01</p>
                    </div>
                    <!-- <div class="col col-lg-8">
                        <p>01</p>
                    </div> -->
                </div>
                <p>Nama : {{}}</p>
                <p>TTL :</p>
                <p>Pekerjaan :</p>
                <p>Alamat :</p>
                <p>No HP/Telp :</p>
                <p>Jenis Kelamain :</p>
            </div>
            <p class="text-white rounded-6 container pt-2" style="background: #51BFBA;">Data Medik</p>
            <div class="container spacing ">
                <p>Golongan Darah : </p>
                <p>Tekanan Darah : </p>
                <p>Penyakit Jantung :</p>
                <p>Diabetes :</p>
                <p>Hepatitis :</p>
                <p>Alergi Obat :</p>
                <p>Alergi Makanan :</p>
            </div>
            <p class="text-white rounded-6 container pt-2" style="background: #51BFBA;">Riwayat Tindakan</p>
            <div class="rounded-6" style="background: #B5B5C3;">
                <div class="row">
                    <div class="col-2">
                        <p class=" font-weight-bold  container pt-2" >Tanggal</p>
                    </div>
                    <div class="col-8">
                        <p class="font-weight-bold  container pt-2" >Tindakan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <p class=" font-weight-bold  container pt-2" >26/10/2021</p>
                </div>
                <div class="col-8">
                    <p class="font-weight-bold  container pt-2" >scalling, dan pencabutan gigi</p>
                </div>
            </div>
            <div class="pb-5">
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>