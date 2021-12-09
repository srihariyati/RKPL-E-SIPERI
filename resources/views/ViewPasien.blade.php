<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SiPERI - Data Pasien  </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS External -->
    <link rel="stylesheet" href="/css/LiatPasienStyle.css">
</head>
<body class="bg-dark">
    <nav class="navbar">
        <img src="/img/logo.png" alt="logo">
    </nav>

    <form action="" class="container bg-white mt-5 radius-13 font-weight-bold">
        <div class="row">
            <div class="col-sm">
               <a onclick="history.back()"><img img class="text-center pt-4 pb-3 button1" src="/img/back.png" alt="arrowBack"></a>
            </div>

            <div class="col-sm">
                <h3 class="text-center pt-5 pb-3">Data dan Riwayat Pasien</h3>
            </div>

            <div class="col-sm d-flex justify-content-end  mt-4 ">
                @foreach($dataPasien as $d)
               <button class="border-0 btn-peri" style="background: #51BFBA;"><a class=" text-white" href="/datapasien/print/{{$d->no_pasien}}" target="blank">Unduh</a></button>
               @endforeach($dataPasien as $d)
            </div>
        </div>
        <div class="container">
            <p class="text-white rounded-6 container pt-2" style="background: #51BFBA;">Data Pasien</p>
            <div class="container spacing">
                <table>
     
        <tbody>
            @foreach($dataPasien as $dP)
            <tr><td>ID</td><td>: {{$dP->no_pasien}}</td></tr>
            <tr><td>Nama</td><td>: {{$dP->nama_pasien}}</td></tr>
            <tr><td>Tanggal Lahir</td><td>: {{$dP->tgl_lhr_pasien}}</td></tr>
            <tr><td>Alamat</td><td>: {{$dP->almt_pasien}}</td></tr>
            <tr><td>No HP</td><td>: {{$dP->nohp_pasien}}</td></tr>
            <tr><td>Jenis Kelamin</td><td>: {{$dP->jk_pasien}}</td></tr>
            @endforeach($dataPasien as $dP)
        </tbody>
     </table><br>
    </div>
    <p class="text-white rounded-6 container pt-2" style="background: #51BFBA;">Data Medik</p>
            <div class="container spacing ">
            <table>  
                <tbody>
                @foreach($dataPasien as $dPs)
                <tr><td>Golongan Darah</td><td>: {{$dPs->gol_darah}}</td></tr>
                <tr><td>Tekanan Darah</td><td>: {{$dPs->tek_darah}}</td></tr>
                <tr><td>Penyakit Jantung</td><td>: {{$dPs->jantung}}</td></tr>
                <tr><td>Diabetes</td><td>: {{$dPs->diabetes}}</td></tr>
                <tr><td>Hepatitis</td><td>: {{$dPs->hepatitis}}</td></tr>
                <tr><td>Alergi Obat</td><td>: {{$dPs->alergi_obat}}</td></tr>
                <tr><td>Alergi Makanan</td><td>: {{$dPs->alergi_mkn}}</td></tr>
                @endforeach($dataPasien as $dPs)
                <tbody>
            </table><br>
            </div>

    <p class="text-white rounded-6 container pt-2" style="background: #51BFBA;">Riwayat Tindakan</p>
            <div class="container spacing ">
            <table class="table">
            <thead>
                <tr>
                <th>Tanggal</th>
                <th>Tindakan</th>
                <th>Dokter</th>
                <th>Spesialis</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                @foreach($dataTindakan as $dT)
                <td>{{$dT->tgl_tindakan}}</td>
                <td>{{$dT->tindakan}}</td>
                <td>{{$dT->nama_dokter}}</td>
                <td>{{$dT->nama_spesialis}}</td>
                </tr>
                @endforeach($dataTindakan as $dT)
            <tbody>
            </table>
            </div>

            <div class="pb-5">
            </div>
        </div>
    </form>
</body>
</html>







        
