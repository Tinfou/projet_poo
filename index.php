<?php
interface statusCafetiere
{
}
class cafetiere implements statusCafetiere
{
  protected int $reservoirDeau = 10;
  protected int $reservoircafe = 2;


  public function allumer()
  {
    $quantiteDeau = 5;
    $quantiteCafe = 1;
    if ($this->reservoirDeau >= $quantiteDeau && $this->reservoircafe >= $quantiteCafe) {
      echo "<br> Eau: " . $this->reservoirDeau . " ml <br> cafe moulu: " . $this->reservoircafe;
      $resultReservoirDeau = $this->reservoirDeau - $quantiteDeau;
      $resultReservoirCafe = $this->reservoircafe - $quantiteCafe;
      $this->reservoirDeau = $resultReservoirDeau;
      $this->reservoircafe = $resultReservoirCafe;
      echo "<br>le café est près";
      echo "<br> Reste Eau: " . $resultReservoirDeau . " <br> reste café moulu: " . $resultReservoirCafe;
    } else {
      echo " <br> ingredient insuffisant -----------> veuillez remplir";
    }

  }
  public function eteindre()
  {
    echo "votre cafetiere est eteinte";
  }
  public function remplir(int $valEau, int $valCafe)
  {
    $maxEau = 10;
    $maxCafe = 2;

    $resteEau = $this->reservoirDeau;
    $resteCafe = $this->reservoircafe;

    $resultResteEau = $resteEau + $valEau;
    $resultResteCafe = $resteCafe + $valCafe;

    if($resultResteEau<=$maxEau && $resultResteCafe<=$maxCafe){
      $this->reservoirDeau = $resultResteEau; 
      $this->reservoircafe = $resultResteCafe ;
        echo " <br> Eau:".$this->reservoirDeau."<br> Cafe:".$this->reservoircafe;
    }
    else{
      echo "<br> votre reservoir est plein";
        
    }

    
    
  }
  
}

$cafe = new cafetiere();
$cafe->allumer();
$cafe->allumer();
$cafe->allumer();
$cafe->remplir(10,0);
$cafe->allumer();




 





















?>