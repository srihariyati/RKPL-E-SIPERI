<!DOCTYPE html>
<html>
   <head>
   <a onclick="history.back()"> <-Kembali </a><br>
   <title> SiPERI - Daftar Pasien </title>
     Data Riwayat Pasien<br>
     Pasien Dokter {{$namaDokter}}
   </head>

   <body>
      <table>
         <thead>
            <tr>
               <th>ID</th>
               <th>Nama Pasien</th>
               <th>Tanggal Lahir</th>
               <th>Jenis Kelamin</th>
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
                  <a href = "/pasien/view/{{$dP->no_pasien}}">View</a>
                  &nbsp;
               </td>
               <td> 
                  <a href = "/pasien/edit/{{$dP->no_pasien}}">Edit</a>
                  &nbsp;
               </td>
            </tr>
            @endforeach
         <tbody>
      </table>
   </body>
</html>
