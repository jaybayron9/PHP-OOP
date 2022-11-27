<?php 
class Student {
    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello(){
        return "Hello World!";
    }

    function full_name(){
        return $this->first_name . " " . $this->last_name;
    }
}

$student1 = new Student();
$student1->first_name = 'Jay';
$student1->last_name = 'Bayron';

echo $student1->say_hello() . ' <br />';
echo $student1->full_name(). ' <br />';

if(method_exists('Student', 'say_hello')){
    echo "Method say_hello() exists in Student class. <br />";
}else{
    echo "Method say_hello() does not exists in Student class. <br />";
}
?>