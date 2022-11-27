<?php

class User {

  var $status = false;
  var $first_name;
  var $last_name;
  var $username;

  function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

}

class Customer extends User {
  var $city;
  var $state;
  var $country;

  function location(){
    return $this->city. '. '. $this->state. ', ' . $this->country; 
  }
}

class Status extends User {
  var $status = true;
  function full_name() {
    return $this->first_name . " " . $this->last_name . ' (Admin)';
  }
}

$u = new User;
$u->first_name = 'Jay';
$u->last_name = 'Bayron';
$u->username = 'jbayron';

$c = new Customer;
$c->first_name = 'Seher';
$c->last_name = 'Soysal';
$c->username = 'sehersoy';

$a = new Status(); 

$c->city = 'Antipolo City';
$c->state = 'Rizal';
$c->country = 'Philippines';

echo $u->full_name(). '<br />';
echo $c->full_name(). '<br />';
echo $c->location(). '<br />';
echo $a->full_name(). '<br />';


echo get_parent_class($u). '<br />';
echo get_parent_class($c). '<br />';

if(is_subclass_of($c, 'User')){
  echo 'Instance is a subclass of User <br />';
}

$parent = class_parents($c);
echo implode(', ', $parent). '<br />';


?>
