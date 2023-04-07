<?php
require_once '../dbkoneksi.php';

$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
  // edit
  $sql = "SELECT * FROM kartu WHERE id = ?";
  $st = $dbh->prepare($sql);
  $st->execute([$_idedit]);
  $row = $st->fetch();
} else {
  // new data
  $row = [];
}
?>

<form method="POST" action="proses.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div>
        <input id="kode" name="kode" type="text" class="form-control" value="<?= $row['kode'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="diskon" class="col-4 col-form-label">Diskon</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div>
        <input id="diskon" name="diskon" value="<?= $row['diskon'] ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="iuran" class="col-4 col-form-label">Iuran</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="iuran" name="iuran" value="<?= $row['iuran'] ?>" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php
      $button = (empty($_idedit)) ? "Simpan" : "Update";
      ?>
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
      <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
    </div>
  </div>
</form>