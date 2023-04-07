<?php
require_once '../dbkoneksi.php';

$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
  // edit
  $sql = "SELECT * FROM pembelian WHERE id = ?";
  $st = $dbh->prepare($sql);
  $st->execute([$_idedit]);
  $row = $st->fetch();
} else {
  // new data
  $row = [];
}
?>

<form method="POST" action="proses_pembelian.php">
  <div class="form-group row">
    <label for="Tanggal" class="col-4 col-form-label">Tanggal</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div>
        <input id="tanggal" name="tanggal" type="text" class="form-control" value="<?= $row['tanggal'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $row['nomor'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">ID Produk</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div>
        <input id="produk_id" name="produk_id" value="<?= $row['produk_id'] ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="jumlah" name="jumlah" value="<?= $row['jumlah'] ?>" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="harga" name="harga" value="<?= $row['harga'] ?>" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="vendor_id" class="col-4 col-form-label">ID Vendor</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="vendor_id" name="vendor_id" value="<?= $row['vendor_id'] ?>" type="text" class="form-control">
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