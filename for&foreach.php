<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    print ("using for loops<br>");
    for ($i = 5; $i <= 10; $i++) {
        print ("$i <br>");
    }

    print("using For Each loops<br>");
    $arr = array(5,6,7,8,9,10);
    foreach($arr as $i){
        print("$i <br>");
    }


    ?>
</body>

</html>