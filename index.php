<?php
include 'header.php';
include 'koneksi.php';
?>

    <div class="container">
    <h3>Data Buku</h3>
    <table class="table table-bordered">
      <tr>
        <th>ISBN</th>
        <th>JUDUL BUKU</th>
        <th>PENULIS</th>
        <th>HARGA</th>
      </tr>

      <?php
      $sql = "SELECT b.isbn,b.judul_buku,b.harga,p.nama_penulis,k.nama_kategori
              FROM buku as b,penulis as p,kategori as k
              WHERE b.id_penulis=p.id_penulis and k.id_kategori=b.id_kategori";
      $buku = mysqli_query($konek, $sql);
      while ($row = mysqli_fetch_array($buku)) 
      {
        echo "<tr>
          <td>$row[isbn]</td>
          <td>$row[judul_buku]</td>
          <td>$row[penulis]</td>
          <td>$row[harga]</td>
        </tr>";
      }
      ?>
       <tr><td>123456</td><td>Buku saya</td><td>Rian</td><td>90000</td></tr>
      <tr>
        <td>123456</td>
        <td>Buku Informatika</td>
        <td>Rian</td>
        <td>80000</td>
      </tr>
      <tr>
        <td>123456</td>
        <td>Buku SQL</td>
        <td>Rian</td>
        <td>145000</td>
      </tr>
    </table>
    
    <div class="float-right">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    </div>

    <a href="input_buku.php" class="btn btn-info">Input Buku</a>
    
    </div>

<?php
include 'footer.php';
?>