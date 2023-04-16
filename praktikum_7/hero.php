<?php
class hero
{

  public $nama = "Alucard";
  public $health = 3200;
  public $damage = 2400;
  public $level  = 1;
  public $xp = 0;

  public function __construct($nama, $health, $damage)
  {
    $this->nama = $nama;
    $this->health = $health;
    $this->damage = $damage;
  }
  public function getInfo()
  {
    echo "<hr>Nama: " . $this->nama;
    echo "<br>HP: " . $this->health;
    echo "<br>Damage: " . $this->damage;
    echo "<br>XP:" . $this->xp;
    echo "<br>Level: " . $this->level;
  }



  // method untuk naik 1 level
  public function levelUp()
  {
    $this->level = $this->level + 1;
    $this->health = $this->health + 150;
    $this->damage = $this->damage + 45;

    // kurangi xp
    $this->xp = $this->xp - 100;
  }

  public function farming()
  {
    $this->xp = $this->xp + 55;
    echo "<br> ---- $this->nama Telah Melakukan Farming ----";

    if ($this->xp >= 100) {
      $this->levelUp();
    }
  }

  public function attack($target)
  {
    $target->health = $target->health - $this->damage;
  }
}

// membuat object / instansiasi
$hero1 = new Hero("Alucard", 3200, 250);
$hero2 = new Hero("Franco", 5000, 50);

// panggil method pada object
$hero1->getInfo();
$hero2->getInfo();

$hero2->farming();

$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();

$hero1->attack($hero2);

echo "<br>";
$hero1->getInfo();
$hero2->getInfo();
