<?php

class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    private $weight_kg = 0.0;

    public function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public function set_weight_kg($value) {
        return $result = $value;
    }

    private function weight_lbs()
    {   $value = 5;
        return floatval($this->weight_kg = $this->set_weight_kg($value)) * 2.2046226218 . ' lbs <br />';
    }
    
    private function weight_kg() {
        $value = '2';
        return $this->set_weight_kg($value). ' kg <br />';
    }

    // private function set_weight_lbs($value)
    // {
    //     return $this->weight_kg = floatval($value) / 2.2046226218;
    // }

    public function get_weight_kg() {
        return $this->weight_kg();
    }

    public function get_weight_lbs(){
        return $this->weight_lbs();
    }

}

class Unicycle extends Bicycle {
    private $wheels = 2;

    private function wheel_detailes() {
        return (2 == $this->wheels ? 'It has 2 wheels': 'It has 1 wheel');
    }

    public function get_wheel_detailes(){
        return $this->wheel_detailes();
    }
}
$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

echo $trek->name() . "<br />";

$bicycle = new Bicycle();
$bicycle->set_weight_kg(2);
echo $bicycle->get_weight_lbs();
echo $bicycle->get_weight_kg();

$unicycle = new Unicycle;
echo $unicycle->get_wheel_detailes();


// $trek->weight_kg = 1.0;


// echo $trek->name() . "<br />";
// echo $trek->weight_kg . "<br />";
// echo $trek->weight_lbs() . "<br />";
// $trek->set_weight_lbs(2);
// echo $trek->weight_kg . "<br />";
// echo $trek->weight_lbs() . "<br />";

