<?php
    $num=4434;
    $temp=$num;
    $emptyArray = [];
    $sum=0;
   while($num>1)
    {
        $a=$num%10;
        echo $a;
        $sum = $sum * 10 + $a; 
        $emptyArray=$sum;
        $num=$num/10;
    }
    if( $temp==$emptyArray){
        echo"<br/>no. is palindrome";
    }
    else{
        echo"<br/>
        no. is not palindrome";
    }
?>