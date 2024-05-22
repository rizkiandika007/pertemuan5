<?php

class Kendaraan {
  // properti
  public $merek;
  public $pintu;
  public $ban;

  // konstruktor
  public function __construct($merek, $pintu, $ban) {
    $this->merek = $merek;
    $this->pintu = $pintu;
    $this->ban = $ban;
  }

  // method
  public function infoKendaraan() {
    echo "Kendaraan {$this->merek} ini memiliki {$this->pintu} pintu dan {$this->ban} ban.";
  }
}

// class baru yang mewarisi class Kendaraan
class FERARI extends Kendaraan {
  // properti baru
  public $mesin;

  // konstruktor
  public function __construct($merek, $pintu, $ban, $mesin) {
    // memanggil konstruktor dari class parent
    parent::__construct($merek, $pintu, $ban);

    $this->mesin = $mesin;
  }

  // method
  public function infoFERARI() {
    echo "Mobil FERARI ini memiliki {$this->pintu} pintu, {$this->ban} ban, dan mesin {$this->mesin}.";
  }
}

// membuat object berdasarkan class FERARI
$mobilFERARIku = new FERARI("FERARI", 2, 4, "turbo");

// menampilkan informasi mobil FERARI
echo $mobilFERARIku->infoFERARI();