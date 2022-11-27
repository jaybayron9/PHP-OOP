<?php 
class testing {
    public $values = array('1', '2', '3', '4', '5', '6');
    public $first_name;
    public $middle_name;
    private $last_name;
    private $names = 'jay, joy, sheilah';

    function test1(){
        $array = array_push($this->values);
        echo '<br>Test 1 <br>';
        for($i = 0; $i < count($this->values); $i++){
            echo $this->values[$i]. ', ';
        }
    }

    function test2(){
        echo '<br>Test 2 <br>';
        print_r( implode(', ', $this->values));
    }

    function test3(){
        echo '<br>Test 3 <br>';
        print_r( explode(', ', $this->names));
    }

    function test4(){
        echo '<br>Test 4 <br>';
        $names = "$this->first_name, $this->middle_name, $this->last_name";
        print_r(explode(',', $names));
    }

    function test5(){
        echo '<br>Test 5 <br>';

        echo 'echo'. '<br />';
        print('print');
        echo '<br />';
        printf('prinf');
        echo '<br />';
        print_r('print_r');
        echo '<br />';
        return 'return';
    }
}

class test extends testing {
    private $last_name;

    public function test1(){
        echo $this->last_name = 'Bayron';
    }
}

$new = new testing();

?>

<pre>
    <?php 
    echo $new->test1(). "<br />";
    echo $new->test2(). "<br />"; 
    echo $new->test3(). "<br />";
    echo $new->test4();
    echo $new->test5();
    ?>
</pre>


<?php 

$values = array('asdf', 'asdf', 'asdf', 'asdf');
$values2 = array(1, 2, 3, 4);
echo count($values);

$sub1 = new test();
$sub1->test1();

?>