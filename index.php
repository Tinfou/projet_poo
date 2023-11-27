<?php
class Personne
{
  public string $nom;
  private int $age;
  protected string $addresse;
  protected int $retraite = 60;

   public function getNom(): string{
        return $this->nom;
    }

    public function setNom(string $newNom){
      $this->nom = $newNom;
      return $this;
    }
    public function getAge(): int{
        return $this->age;
    }
    public function setAge(int $newAge){
      $this->age = $newAge;
      return $this;
    }
    public function getAnneeServiceRestante(int $age){
      return $this->retraite - $this->age;
    }
}

$pers = new Personne();
$age = $pers->setAge(20);
$serviceRestante = $pers->getAnneeServiceRestante($pers->getAge());
echo $serviceRestante;



?>
