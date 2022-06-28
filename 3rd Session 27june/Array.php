<?php
//numerical Array
    $a[0]=50;
    $a[1]=10;
    $a[2]=205.4;
    $a[3]="c";
    $a[4]="python";

 //Dynamic array
 $a[]=10;   
 $a[]=10.4;   
 $a[]="c";   
 $a[]="PHP";
 
 //THIRD VALUE
 $a=array(10,"php",20.5,30);
 echo $a[0];

 for($i=0;$i<4;$i++){
    echo $a[$i];
 }
 //3 inbuit function
 echo"<pre>";
 print_r($a);
 var_dump($a);
 var_export($a);
?>