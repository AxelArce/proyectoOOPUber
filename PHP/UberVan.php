<?php

require_once("Car.php");

class UberVan extends Car {
  public $typeCar;
  public $seatsMaterial;

  public function __construct($license, $driver, $typeCar, $seatsMaterial) {
    parent::__construct($license, $driver);

    $this->typerCar = $typeCar;
    $this->seatsMaterial = $seatsMaterial;
  }
  
  public function setPassenger($passenger) {
    if ($passenger == 6) {
      $this->passenger = $passenger;
    }
    else {
      echo "Necesitas asignar 6 pasajeros"
    }
  }

}

?>