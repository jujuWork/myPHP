<?php

class Car 
{
    //Properties / Fields

    private $brand;
    private $color;
    public $vehicleType = "car";

    //Contructor

    public function __construct($brand, $color) //THIS IS NOT THE SAME AS THE PROPERTIES ABOVE( LIKE A PLACEHOLDER ONLY)
    {
      $this->brand = $brand; //brand(properties) ---- $brand(placeholder)
      $this->color = $color;  //color(properties) ---- $color(placeholder)
    }

    //Method (accessing private properties)

    public function getCarInfo()
    {
        return "Brand: " . $this->brand . ", Color: " . $this->color;   
    }
}