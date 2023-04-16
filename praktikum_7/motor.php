<?php
class Motor
{
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc)
  {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }

  public function getInfo()
  {
    echo "<hr>Merk: " . $this->merk;
    echo "<br>Bensin: " . $this->bensin;
    echo "<br>Topspedd: " . $this->topSpeed;
    echo "<br>CC:" . $this->cc;
  }

  public function jalan($jarak)
  {
    $bensinYangDibutuhkan = $jarak / 30; // 1 liter untuk 30 km
    if ($this->bensin >= $bensinYangDibutuhkan) {
      $this->bensin -= $bensinYangDibutuhkan;
      echo "</br>Motor $this->merk berhasil menempuh jarak $jarak km. Sisa bensin: $this->bensin liter.";
    } else {
      echo "Motor $this->merk tidak bisa menempuh jarak $jarak km karena bensin tidak cukup.";
    }
  }
}

$motor1 = new motor('yamaha', 10, 250, 50);
$motor1->getInfo();
$motor1->jalan(12);
