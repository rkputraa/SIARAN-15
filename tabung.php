<?php
  class luas{
    private $phi=3.14;
    private $r;
    private $t;

    public function setphi($p){
      $this->phi=$p;
    }
    public function setjarijari($jr){
      $this->r=$jr;
    }
    public function settinggi($tg){
      $this->t=$tg;
    }
    public function getphi(){
      return $this->phi;
    }
    public function getjarijari(){
      return $this->r;
    }
    public function gettinggi(){
      return $this->t;
    }
    public function hitungluaspermukaan(){
      return 2 * $this->getphi() * $this->getjarijari() * ($this->getjarijari() + $this->gettinggi()) ;
    }
  }
  $tabung = new luas();
  $tabung->setjarijari(10);
  $tabung->settinggi(5);
  echo "Hitung lah luas pemukaan tabung !";
  echo '<br>';
  echo "diketahui :";
  echo '<br>';
  echo "Jari-jari = ";
  echo $tabung->getjarijari();
  echo '<br>';
  echo "tinggi = ";
  echo $tabung->gettinggi();
  echo '<br>';
  echo "jawab :";
  echo '<br>';
  echo "Luas Permukaan Tabung adalah : ";
  echo $tabung->hitungluaspermukaan();
 ?>
