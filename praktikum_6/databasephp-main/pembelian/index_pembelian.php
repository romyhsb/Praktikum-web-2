<?php
require_once '../dbkoneksi.php';


$sql = "SELECT * FROM pembelian";
$rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="create_pembelian.php" role="button">Tambah Pembelian</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
  <thead>
    <tr>
      <th>No</th>
      <th>Tanggal</th>
      <th>Nomor</th>
      <th>ID Produk</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>ID Vendor</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $nomor  = 1;
    foreach ($rs as $row) {
    ?>
      <tr>
        <td><?= $nomor ?></td>
        <td><?= $row['tanggal'] ?></td>
        <td><?= $row['nomor'] ?></td>
        <td><?= $row['produk_id'] ?></td>
        <td><?= $row['jumlah'] ?></td>
        <td><?= $row['harga'] ?></td>
        <td><?= $row['vendor_id'] ?></td>
        <td>

          <a class="btn btn-primary" href="update_pembelian.php?idedit=<?= $row['id'] ?>"> Update</a>
          <a class="btn btn-primary <?= $row['is_pelanggan'] ? 'disabled' : '' ?>" href="delete_pembelian.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama'] ?>?')) {return false}">Delete</a>
        </td>
      </tr>
    <?php
      $nomor++;
    }
    ?>
  </tbody>
</table>