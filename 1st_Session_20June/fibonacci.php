<?php
    $num=6;
    $a=1;
    $b=1;
    echo "fibonacci series of $num is: ";
    echo $a."&nbsp";
    echo $b."&nbsp";
    for($i=1;$i<$num-1;$i++){
        $temp=$b;
        $b=$a+$b;
        $a=$temp;
        echo $b."&nbsp";
    }

?>