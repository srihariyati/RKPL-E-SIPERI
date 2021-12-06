<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiPERI - Edit Tindakan</title>
    <a onclick="history.back()"> <-Kembali </a><br>
    <p1>Daftar Tindakan Pasien {{$nomorpasien}} <br><br>
</head>
<body>
        <table>
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

</body>
</html>


        