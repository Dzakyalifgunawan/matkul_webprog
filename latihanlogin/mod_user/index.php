<div class="container">
   <h2>Data User</h2>
   <a href="?modul=mod_user&aksi=tambah">Tambah Data</a>
   <table border="1" cellpadding='10'>
      <tr>
         <th>No</th>
         <th>Username</th>
         <th>Nama</th>
         <th>action</th>
      </tr>
      <!-- ini untuk baris yang akan menampilkan data -->
      <?php
         $nomer = 1;
         $query_user = mysqli_query($koneksidb, "select * from mst_user");
         while($data = mysqli_fetch_array($query_user)){ 
         // var_dump($data);
      ?>
      <tr>
         <td><?php echo $nomer++;?></td>
         <td><?php  echo $data['username']; ?></td>
         <td><?php echo $data['nama']; ?></td>
         <td>
            <a href="">Ubah</a>
            <a href="">Hapus</a>
         </td>
      </tr>
      <?php

         };
      ?>
   </table>
</div>