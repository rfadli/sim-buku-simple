<?php
include 'header.php';
include 'koneksi.php';
?>

    <div class="container">
    

    <h3>Form Input Buku</h3>
    <form action="simpan_buku.php" method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ISBN</label>
        <div class="col-sm-10">
          <input type="text" name="isbn" placeholder="masukan isbn" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Judul Buku</label>
        <div class="col-sm-10">
          <input type="text" name="judul_buku" placeholder="masukan judul buku" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Penulis</label>
        <div class="col-sm-10">
          <select name="penulis" class="form-control">
            <?php
            $penulis = mysqli_query($konek, "SELECT * FROM penulis");
            while ($p = mysqli_fetch_array($penulis)) {
              echo "<option value='".$p[id_penulis]."'>".strtoupper($p[nama_penulis])."</option>";
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
              echo "<option value='".$k[id_kategori]."'>".strtoupper($k[nama_kategori])."</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
          <textarea name="deskripsi" class="form-control"></textarea>
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