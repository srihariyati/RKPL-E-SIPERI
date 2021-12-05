<!DOCTYPE html>
<html>
   <head>
   <a onclick="history.back()"> <-Kembali </a><br>
   <title> SiPERI - Daftar Dokter </title>
     Data Dokter Umum dan Spesialis Gigi
   </head>

   <body>
      <table>
         <thead>
             
            <tr>
               <th>{{$spes}}</th>
               <th></th>
            </tr>
         </thead>

         <tbody>
            
            <tr>
                @foreach($dokterlist as $dl)
               <td>{{$dl -> nama_dokter}}</td>
               <td> 
                  <a href = "/lihat/pasien/{{$dl->nama_dokter}}">Pasien</a>
                  &nbsp;
               </td>
            </tr>
            @endforeach
         <tbody>
      </table>
   </body>
</html>
