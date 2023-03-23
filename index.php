<!-- This is the PHP practice file -->

<?php
    $x = 10;
    $y = 10;
    $z = 'Hello world!';
    $a = 'Hello';
    $b = 'world';
    $arr = ['0'=>'one','1'=>'two','2'=>'three'];
    echo "$x<br>";
    echo $x+$y."<br>";
    echo $x . $z . "<br>";
    echo $a , ":" , $b . "<br>";
    print $x . '<br>';
    print_r($arr);
?>

<?php 
    $x = 10;

    function func1(){
        global $x;
        echo '<br>This is for global demo:'.$x;
    }

    function func2(){
        echo '<br>This is for $GLOBLAS DEMO:' . $GLOBALS['x'];
    }

    func1();
    func2();
?>

<?php 
    function func(){
        static $x = 0;
        echo '<br>'.$x;
        $x++;
    }
    
    for($i=0;$i<5;$i++){
        func();
    }
    echo '<br>';
    
?>

<?php
    $floatnum = 10.0;
    $intnum = 10;
    $str = "Hello every one!";
    $boolvar = true;
    $booldemo = (0 == 'a');
    $arr = [1,2,3,4,5];
    $nullvar = NULL;
    $nullvar2 = null;
    var_dump($floatnum);
    echo '<br>';
    var_dump($intnum);
    echo '<br>';
    var_dump($str);
    echo '<br>';
    var_dump($boolvar);
    echo '<br>';
    var_dump($booldemo);
    echo '<br>';
    var_dump(0 == '0');
    echo '<br>';
    var_dump(0 === '0');
    echo '<br>';
    var_dump(0 == '0ij');
    echo '<br>';
    var_dump($arr);
    echo '<br>';
    var_dump($nullvar);
    echo '<br>';
    var_dump($nullvar2);
    echo '<br>';
    var_dump(0 == null);
    echo '<br>';
    var_dump(0 == false);
    echo '<br>';
    var_dump(null == false);
    echo '<br>';
    var_dump(++$nullvar);
    echo '<br>';
?>

<?php
    class Shape{
        public $l;
        public function __construct($l){
            $this->l = $l;
        }
    }
    $shape1 = new Shape(10);
    echo $shape1->l;
    echo '<br>';
    var_dump($shape1);
    echo '<br>';
?>

<?php 
    $str = "Hello world!";
    var_dump($str);
    echo '<br>';
    echo str_word_count($str);
    echo '<br>';
    echo strrev($str);
    echo '<br>';
    echo strpos($str,"o");
    echo '<br>';
    echo str_replace('world','Hello',$str);
    echo '<br>';
    echo ucwords($str);
    echo '<br>';
    echo strtoupper($str);
    echo '<br>';
    echo strtolower($str);
    echo '<br>';
?>


<?php 
    $cars=["volvo","bmw"];
    echo $cars[0] . ":" . $cars[1];
    echo '<br>';
    $cars = array("Audi","Benz");
    echo $cars[0] . ":" . $cars[1];
    echo '<br>';
?>

<?php 
    $arr = array("ind1"=>"Hello","1"=>"World!");
    echo $arr["ind1"] . ":" . $arr[1];
    echo '<br>';
    $arr = array("2"=>"Hello","1"=>"World!");
    echo $arr["2"] . ":" . $arr[1];
    echo '<br>';
    $arr = ["rohith"=>21,"Kumar"=>22];
    foreach($arr as $x){
        echo $x . "<br>";
    }
    foreach($arr as $x=>$arr_val){
        echo $x . ":" . $arr_val . "<br>";
    }
    $arr = ['0'=>"Hii","10"=>"Hello","k1"=>"Helllllooooo","World"];
    print_r($arr);
    echo '<br>';
    echo $arr[0];
    echo '<br>';
    echo $arr[10];
    echo '<br>';
    echo $arr[11];
    echo '<br>';
    echo $arr['k1'];
    echo '--------------';
    asort($arr);
    echo '<br>';
    print_r($arr);
    rsort($arr);
    echo '<br>';
    print_r($arr);
    asort($arr);
    echo '<br>';
    print_r($arr);
    ksort($arr);
    echo '<br>';
    print_r($arr);
    arsort($arr);
    echo '<br>';
    print_r($arr);
    krsort($arr);
    echo '<br>';
    print_r($arr);
?>


<?php 
    $arr = array(
        array(1,2,3),
        array(4,5,6)
    );
    echo '<br>';
    echo $arr[1][0];
    $arr = array(
        '10' => array(1,2,3),
        array(4,5,6)
    );
    echo '<br>';
    echo $arr[10][0];
    echo '<br>';
    echo $arr[11][0];
?>


<?php 
    echo "<br>";
    $x = 10;
    if($x < 10){
        echo "less than 10 : $x" . "<br>";
    }
    else if($x == 10){
        echo "equal to 10 : $x" . "<br>";
    }
    else{
        echo "greater than 10 : $x" . "<br>";
    }
?>


<?php 
    $x = 1;
    while($x<5){
        echo "($x) <br>";
        $x++;
    }
    do{
        echo "($x) <br>";
        $x++;
    }while($x<10);
    for($i=0;$i<10;$i++){
        echo "$i \t";
    }
    echo "<br>";
    $arr = [1,2,3,4,5];
    foreach($arr as $val){
        echo "$val \t";
    }
    echo "<br>";
    for($i=0;$i<10;$i++){
        if($i==5){
            break;
        }
        echo "$i \t";
    }
    echo "<br>";
    for($i=0;$i<10;$i++){
        if($i==5){
            continue;
        }
        echo "$i \t";
    }
    echo "<br>";
?>


<?php 
    function sum(int $x,int $y){
        echo $x+$y;
    }
    sum(1,2);
    echo '<br>';
?>

<?php 
    echo '<pre>';
    print_r($_SERVER);
?>


<?php 
    class Shape1{
        public $length;
        public $breadth;
        public function __construct($length,$breadth){
            echo "class";
            $this->length = $length;
            $this->breadth = $breadth;
        }
        public function getLengthbreadth(){
            return [$this->length,$this->breadth];
        }
        
    }

    class Square extends Shape1{
        public function area(){
            echo $this->length;
        }
    }

    $shape1 = new Shape1(10,20);
    echo $shape1->length;
    echo '<br>';
    print_r($shape1->getLengthbreadth());
    $square1 = new Square(10,20);
    print_r($square1.getLengthbreadth());
?>










