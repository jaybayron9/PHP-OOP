<?php 
class Bicycle {
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name(){
        return 
        "Brand: ". $this->brand . "<br/> 
        Model: ". $this->model. "<br/>
        Year Release: ". $this->year. "<br/>
        Decription: ". $this->description. "<br/>";
    }

    function weight_lbs(){
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs(){
        return $this->weight_kg;
    }
}

$bicycle = new Bicycle();
$bicycle->brand = 'Canyon';
$bicycle->model = 'Neuron 5';
$bicycle->year = '2023';
$bicycle->description = 'Goodbye routine, hello adventure: The versatile Neuron 5 offers full-fledged trail riding capability at an entry-level price';
$bicycle->weight_kg = 15.32;

echo "<b>Bicycle</b> <br/>". $bicycle->name();
echo "Weight lbs: ". $bicycle->weight_lbs(). ' lbs <br />';
echo "Weight kg: ". $bicycle->set_weight_lbs() . ' kg <br />';
?>