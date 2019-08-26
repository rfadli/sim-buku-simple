<?php
include 'header.php';
$isbn =  $_GET['isbn'];
$buku = mysqli_query($konek, "SELECT * FROM buku WHERE isbn='$isbn'");
$row = mysqli_fetch_array($buku);
//print_r($row);
?>

    <div class="container">
    

    <h3>Edit Buku</h3>
    <form action="update_buku.php" method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ISBN</label>
        <div class="col-sm-10">
          <input readonly="" type="text" name="isbn" value="<?php echo $row['isbn'] ?>" placeholder="masukan isbn" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Judul Buku</label>
        <div class="col-sm-10">
          <input type="text" name="judul_buku" value="<?php echo $row['judul_buku'] ?>" placeholder="masukan judul buku" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Penulis</label>
        <div class="col-sm-10">
          <select name="penulis" class="form-control">
            <?php
            $penulis = mysqli_query($konek, "SELECT * FROM penulis");
            while ($p = mysqli_fetch_array($penulis)) {
              echo "<option value='".$p['id_penulis']."' ";

              if($row['id_penulis'] == $p['id_penulis']){
                echo "selected";
              }

              echo ">".$p['nama_penulis']."</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
          <select name="kategori" class="form-control">
            <?php
            $kategori = mysqli_query($konek, "SELECT * FROM kategori");
            while ($k = mysqli_fetch_array($kategori)) {
              echo "<option value='$k[id_kategori]' ";

              if($row['id_kategori'] == $k['id_kategori']){
                echo "selected";
              }

              echo ">".strtoupper($k['nama_kategori'])."</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input type="text" name="harga" value="<?php echo $row['harga'] ?>" placeholder="masukan harga" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
          <textarea name="deskripsi" class="form-control"><?php echo $row['deskripsi'] ?></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-info">Save Data!</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </div>

    </form>

    </div>

<?php
include 'footer.php';
?>