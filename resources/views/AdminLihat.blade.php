<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <a onclick="history.back()"> <-Kembali </a><br>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>Jumlah Pasien   : {{$jpasien}}</button>
    <button>Jumlah Perawat  : {{$jperawat}}</button>
    <button>Jumlah Dokter   : {{$jdokter}}</button>
    <button>Jumlah Spesialis: {{$jspesialis}}</button>

    <!--tabel data pasien-->
    <p> Data Pasien
    <table>
    <thead>
        <tr>
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
    <p> Data Perawat
    <table>
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
    <p> Data Dokter
    <table>
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