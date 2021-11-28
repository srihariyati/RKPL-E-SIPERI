<!DOCTYPE html>
<html>
   <head>
   <a onclick="history.back()"> <-Kembali </a><br>
      Data Dokter Umum dan Spesialis gigi
   </head>

   <body>
      <table>
         <thead>
            <tr>
               <th> Bidang Spesialis</th>
               <th>   </th>
            </tr>
         </thead>

         <tbody>
            @foreach($dataspesialis as $dspes)
            <tr>
               <td>{{$dspes->spesialis}}</td>
               <td> 
                  <a href = "/lihat/dokter/{{$dspes->spesialis}}">Lihat</a>
                  &nbsp;
               </td>
            </tr>
            @endforeach
         <tbody>
      </table>
   </body>
</html>
