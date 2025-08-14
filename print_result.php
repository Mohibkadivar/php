<?php

    define("SUBJECT_1","MATH");
    define("SUBJECT_2","PHYSICS");
    define("SUBJECT_3","CHEMISTRY");

    $mark1 =80;
    $mark2 =50;
    $mark3 =60;

    $total = ($mark1 + $mark2 + $mark3);

    $percentage = ($total /300) * 100;
     
    echo  "SEMESTER RESULT";
    echo "<br>";
    echo SUBJECT_1." : " .$mark1;
    echo "<br>";
    echo SUBJECT_2 ." : ".$mark2;
    echo "<br>";
    echo SUBJECT_3 ." : " .$mark3;
    echo "<br>";

    echo "TOTAL MARK : " .$total;
    echo "<br>";
    echo  "PERCENTAGE : " . number_format($percentage,2). "%";
    echo "<br>";


?>