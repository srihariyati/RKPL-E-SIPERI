<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <img src=".\img\logo.png" alt="Simply Easy Learning">
    <style type="text/css">
        table tr td,
		table tr th{
			font-size: 10pt;
		}
	</style>

	<center>
		<h5>DATA REKAM MEDIK PASIEN</h4>
        <h5>DENTAL CLINIC</h4>
	</center>
    <h6> DATA PASIEN</h6>
	<table class="table table-sm">
		<thead>
			<tr></tr>
		</thead>
		<tbody>
            @foreach($dataPasien as $dP)
            <tr><td>ID</td><td>{{$dP->no_pasien}}</td>></tr>
            <tr><td>Nama</td><td>{{$dP->nama_pasien}}</td></tr>
            <tr><td>Tanggal Lahir</td><td>{{$dP->tgl_lhr_pasien}}</td></tr>
            <tr><td>Alamat</td><td>{{$dP->almt_pasien}}</td></tr>
            <tr><td>No HP</td><td>{{$dP->nohp_pasien}}</td></tr>
            <tr><td>Jenis Kelamin</td><td>{{$dP->jk_pasien}}</td></tr>
            @endforeach($dataPasien as $dP)
		</tbody>
	</table>

    <br><br>
    <h6>DATA MEDIK</h6>
    <table class="table table-sm">  
        <thead>
            <tr></tr>
        </thead>
        <tbody>
            @foreach($dataPasien as $dPs)
            <tr>
                <td>Golongan Darah</td><td>{{$dPs->gol_darah}}</td>
            </tr>
            <tr>
                <td>Tekanan Darah</td><td>{{$dPs->tek_darah}}</td>
            </tr>
            <tr>
                <td>Penyakit Jantung</td><td>{{$dPs->jantung}}</td>
            </tr>
            <tr>
                <td>Diabetes</td><td>{{$dPs->diabetes}}</td>
            </tr>
            <tr>
                <td>Hepatitis</td><td>{{$dPs->hepatitis}}</td>
            </tr>
            <tr>
                <td>Alergi Obat</td><td>{{$dPs->alergi_obat}}</td>
            </tr>
            <tr>
                <td>Alergi Makanan</td><td>{{$dPs->alergi_mkn}}</td>
            </tr>
            @endforeach($dataPasien as $dPs)
        <tbody>
    </table>

    <br><br>
    <h6>RIWAYAT TINDAKAN</h6>
    <table class="table table-sm">
		<thead>
			<tr>
                <th>Tanggal</th>
                <th>Tindakan</th>
                <th>Dokter</th>
                <th>Spesialis</th>
			</tr>
		</thead>
		<tbody>
			@foreach($dataTindakan as $dT)
			<tr>
                <td>{{$dT->tgl_tindakan}}</td>
               <td>{{$dT->tindakan}}</td>
               <td>{{$dT->nama_dokter}}</td>
               <td>{{$dT->nama_spesialis}}</td>
			</tr>
			@endforeach($dataTindakan as $dt)
		</tbody>
	</table>
 

</body>
</html>