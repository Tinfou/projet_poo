<?php
class Personne
{
  public string $nom;
  private int $age;
  protected string $addresse;
  private int $retraite = 60;

  public function __construct(string $nom, int $age, string $addresse, int $retraite){
    $this->nom = $nom;
    $this->age = $age; 
    $this->addresse = $addresse;  
    $this->retraite = $retraite; 
  }

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
      self :: verificationAge($newAge);
      $this->age = $newAge;
      return $this;
    }
    public function getAnneeServiceRestante(int $age){
      return $this->retraite - $this->age;
    }
    public function verificationAge($age):bool{
      if ($age>18){
        return true;
      }
      else{
        echo "age diso";
        return false;
        
      }
    }
}

$pers = new Personne('mahery',25,'test',50);
$serviceRestante = $pers->getAnneeServiceRestante($pers->getAge());
echo $serviceRestante;



?>
