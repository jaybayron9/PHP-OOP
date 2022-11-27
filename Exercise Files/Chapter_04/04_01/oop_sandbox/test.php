<?php

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    private $weight_kg = 0.0;
    private $wheels = 2;

    public function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public function set_weight_kg($value){
        return $this->weight_kg = $value;
    }

    private function get_weight_lbs(){
        return $this->set_weight_kg(floatval($this->weight_kg)) * 2.2046226218;
    }

    public function weight_kg() {
        return $this->get_weight_lbs(). " kg";
    }

    public function weight_lbs() {
        $result = $this->get_weight_lbs();
        return floatval($result) / 2.2046226218 . ' lbs';
    }

}

class Unicycle extends Bicycle {
    private $wheels = 1;

    private function wheel_detailes() {
        return (2 == $this->wheels ? 'It has 2 wheels': 'It has 1 wheel');
    }

    public function get_wheel_detailes(){
        return $this->wheel_detailes();
    }
}


$bicycle = new Bicycle();
$bicycle->set_weight_kg(10);
$bicycle->brand = 'Canon';
$bicycle->model = 'y16';
$bicycle->year = 2023;
$bicycle->description = 'Canon';

$unicycle = new Unicycle();

echo $bicycle->name(). '<br />';
echo $unicycle->get_wheel_detailes(). "<br />";
echo $bicycle->weight_kg(). "<br />";
echo $bicycle->weight_lbs();