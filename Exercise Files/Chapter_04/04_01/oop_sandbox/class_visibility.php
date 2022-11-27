<?php

class Student {

  public $first_name;
  public $last_name;
  public $country = 'None';

  protected $registration_id;
  private $tuition = 500.00;

  public function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

  public function hello_world() {
    return 'Hello world!';
  }

  protected function hello_family() {
    return 'Hello family!';
  }

  private function hello_me() {
    return 'Hello me!';
  }

  public function tuition_fmt(){
    return '$'. $this->tuition;
  }

}

class PartTimeStudent extends Student {
  public function hello_parent(){
    return $this->hello_family();
  }
}

$student1 = new PartTimeStudent;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

// $student1->registration_id;
// $student1->tuition;

echo $student1->full_name() . "<br />";

echo $student1->hello_world() . "<br />";
echo $student1->hello_parent(). "<br />";
// echo $student1->hello_family() . "<br />";
// echo $student1->hello_me() . "<br />";

$student1->tuition = 100;
echo $student1->tuition. "<br />";

echo $student1->tuition_fmt(). "<br />";
?>
