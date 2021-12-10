<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS External -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="/css/LiatPasienStyle.css">
    
    <title>SiPERI - Edit Tindakan</title>
    <a onclick="history.back()"> <-Kembali </a><br>
    <p1>Daftar Tindakan Pasien {{$nomorpasien}} <br><br>
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
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal Tindakan</th>
                    <th>Dokter</th>
                    <th>Bidang Spesialis</th>
                    <th>Jenis Tindakan</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($tindakanPasien as $tp)
                <tr>
                    <td>{{$tp->tgl_tindakan}}</td>
                    <td>{{$tp -> nama_dokter}}</td>
                    <td>{{$tp-> nama_spesialis}}</td>
                    <td>{{$tp ->tindakan}}</td>
                    <td><a href= "/tindakan/edit/{{$tp ->id_tindakan}}" =>Edit</a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        <form>
        <button type="submit" class="button2">Tambah</button>
        </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


        