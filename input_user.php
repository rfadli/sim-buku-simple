<?php
include 'header.php';
?>

    <div class="container">
    

    <h3>Form Input User</h3>
    <form action="simpan_user.php" method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" name="nama_lengkap" placeholder="masukan nama" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" name="email" placeholder="masukan Email" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password" placeholder="*******" class="form-control">
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