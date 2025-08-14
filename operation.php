<?php
//assignment operators
    $a=20;
    $b=10;

    $add=$a + $b;
    $sub=$a -$b;
    $mul=$a* $b;
    $divi=$a / $b;
    $modu= $a % $b;

    echo "ADD : " .$add;
    echo "<br>";
    echo "SUB : " .$sub;
    echo "<br>";
    echo "MUL : " .$mul;
    echo "<br>";
    echo "divi : " .$divi;
    echo "<br>";
    echo "MODU : " .$modu;
    echo "<br>";

    //comparison operators

    $p=10;
    $q=20;

    echo "comparison operators"."<br>";
    echo "Eqal to (p == q):".($p == $q)."<br>";
    echo " Not Eqal to (p != q):".($p != $q)."<br>";
    echo "Greater than (p > q):".($p > $q)."<br>";
    echo "Less than (p < q):".($p > $q)."<br>";
    echo "Greater than or eqal to (p >= q):".($p >= $q)."<br>";
    echo "Less than or eqal to (p <= q):".($p <= $q)."<br>";


    //logical operator
    $bool1= true;
    $bool2= false;
    echo "Logical operators"."<br>";
    echo "AND (bool1 && bool2): ".($bool1 && $bool2)."<br>";
    echo "OR (bool1 || bool2): ".($bool1 || $bool2)."<br>";
    echo "NOT (!bool1): ".(!$bool1)."<br>";

    //increment decrement operator
    echo "increment decrement operator"."<br>";
    $num=5;
    echo "initial value of num: ".$num."<br>";
    $num++;
    echo "after increment: ".$num."<br>"; 
    $num--;
    echo "after decrement: ".$num."<br>";
?>
