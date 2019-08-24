<?php
include 'header.php';
?>

    <div class="container">
    

    <h3>Form Input Buku</h3>
    <form action="" method="">
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
            <option value="rian">rian</option>
            <option value="fadli">fadli</option>
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