<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siPeri | Daftar Pasien</title>
     <!-- CSS External -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="/css/LiatPasienStyle.css">
</head>  
  <body class="bg-dark">
    <nav class="navbar">
        <img src="/img/logo.png" alt="logo">
    </nav>
    <div  class="container box bg-white mt-5 radius-13 font-weight-bold">
        <div class="row row-cols-auto">
            <div class="">
            <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
            </div>
            <div class="">
                <h3 class="justify-content-start pt-4 pb-3">Data Riwayat Pasien</h3>
            </div>
            <div class="col-8 d-flex justify-content-end  pe-5 ">
                <h3 class="justify-content-start pt-4 pb-3">{{$namaDokter}}</h3>
            </div>
        </div>
        <div class="container">
            <table class="table">
                <thead class="text-white" style="background: #51BFBA;">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($dataPasien as $dP)
                    <td>{{$dP->no_pasien}}</td>
                    <td>{{$dP->nama_pasien}}</td>
                    <td>{{$dP->tgl_lhr_pasien}}</td>
                    <td>{{$dP->jk_pasien}}</td>
                    <td> 
                        <button class="btn btn-primary rounded-6"> <a style="background: #51BFBA;"><a  style="text-decoration:none" class="text-white" href = "/pasien/view/{{$dP->no_pasien}}">View</a></button>
                        &nbsp;
                    </td>
                    <td> 
                        <button class="btn btn-primary rounded-6"><a style="background: #51BFBA;"><a  style="text-decoration:none" class="text-white" href = "/pasien/edit/{{$dP->no_pasien}}">Edit</a></button>
                        &nbsp;
                    </td>
                    </tr>
                    @endforeach
                <tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
