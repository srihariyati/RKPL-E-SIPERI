<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- CSS External -->
   <link rel="stylesheet" href="/css/LihatDataStyle.css">
   <title>siPeri |Daftar Dokter</title>
</head>
   <body class="bg-dark background">
    <nav class="navbar">
        <img src="/img/logo.png" alt="logo">
    </nav>
    <div class="container box bg-white mt-2 radius-13 ">
        <div class="row row-cols-auto">
            <div class="">
               <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
            </div>
            <div class="">
                <h4 class="text-center pt-4 pb-3 mt-1  button1">Data Dokter Umum dan Spesialis Gigi</h4>
            </div>
        </div>
        <div class="container  font-weight-bold pt-3">
            <p class="text-white rounded-6 container pt-2" style="background: #51BFBA;">{{$spes}}</p>
            <div class=" spacing">
            @foreach($dokterlist as $dl)
                <div class="row pt-4">
                    <div class="col">
                        <img src="back.png" alt=""> {{$dl -> nama_dokter}}
                    </div>
                    <div class="col-sm d-flex justify-content-end   ">
                        <button class="border-0 btn-peri" style="background: #51BFBA;"><a class="nav-link text-white" href="/lihat/pasien/{{$dl->nama_dokter}}">Pasien</a></button>
                     </div>
                </div>
                @endforeach
            </div>
            <div class="pb-5">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>