<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SiPERI - Data Pasien  </title>
    <a onclick="history.back()"> <-Kembali </a><br>
    <p1>Data dan Riwayat Pasien<br>
</head>
<body>
    @foreach($dataPasien as $d)
    <a href="/datapasien/print/{{$d->no_pasien}}" target="blank"> Unduh</a><br>
    @endforeach($dataPasien as $d)
    
    <table>
        <thead>
            <th>Data Pasien</th>
            <th></th>
        </thead>
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

     <table>  
        <thead>
            <th>Data Medik</th>
            <th></th>
        </thead>
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
    </table>

    <table>
        <p> Riwayat Tindakan
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
</body>
</html>







        
