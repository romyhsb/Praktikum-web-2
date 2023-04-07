<?php
require_once '../dbkoneksi.php';

$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
  // edit
  $sql = "SELECT * FROM vendor WHERE id = ?";
  $st = $dbh->prepare($sql);
  $st->execute([$_idedit]);
  $row = $st->fetch();
} else {
  // new data
  $row = [];
}
?>

<form method="POST" action="proses_vendor.php">
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div>
        <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $row['nomor'] ?>">
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
    <label for="Kota" class="col-4 col-form-label">Kota</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div>
        <input id="kota" name="kota" value="<?= $row['kota'] ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Kontak</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="kontak" name="kontak" value="<?= $row['kontak'] ?>" type="text" class="form-control">

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