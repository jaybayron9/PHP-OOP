<?php

class Bicycle
{

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    protected $weight_kg = 0.0;
    protected static $wheels = 2;
    public static $instance_count;
    public static $categories = array('Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX');

    public function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public static function wheel_details()
    {
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . 'wheels';
        return "It has " . $wheel_string . ".";
    }

    public function weight_kg()
    {
        return $this->weight_kg . ' kg';
    }

    public function set_weight_kg($value)
    {
        $this->weight_kg = floatval($value);
    }

    public function weight_lbs()
    {
        $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
        return $weight_lbs . ' lbs';
    }

    public function set_weight_lbs($value)
    {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }

    public static function create()
    {
        $result = self::$instance_count++;
        return $result;
    }

}

class Unicycle extends Bicycle {
    // visibility must match property being overridden
    protected static $wheels = 1;

    public function bug_test()
    {
        return $this->weight_kg;
    }

    public static function set_kg()
    {
        parent::create();
    }
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

$uni = new Unicycle;

echo "Bicycle: " . $trek->wheel_details() . "<br />";
echo "Unicycle: " . $uni->wheel_details() . "<br />";
echo "<hr />";

echo "Set weight using kg<br />";
$trek->set_weight_kg(1);
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "<hr />";

echo "Set weight using lbs<br />";
$trek->set_weight_lbs(2);
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "<hr />";

// Will this work?
echo "Set weight for Unicycle<br />";
$uni->set_weight_kg(1);
echo $uni->weight_kg() . "<br />";
echo $uni->weight_lbs() . "<br />";

echo $uni->bug_test() . "<br />";
echo "<hr />";

echo "Set new weight for Unicycle<br />";
echo Bicycle::$instance_count . "<br />";
Bicycle::$categories[] = 'Highway';
echo implode(', ', Bicycle::$categories) . "<br />";

Bicycle::create();
Bicycle::create();
$new_count = Bicycle::create();
$trek->set_weight_kg($new_count);
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";