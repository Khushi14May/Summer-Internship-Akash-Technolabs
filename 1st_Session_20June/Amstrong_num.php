<?php
$num=371;
$sum=0;
$temp=$num;
while($num){
    $a=$num%10;
    // $b=1;
    // $b=$a*$b;
    // for($i=1;$i<strlen($temp);$i++){
    // $b*=$b;
    //  }
    $a=$a*$a*$a;
    $sum+=$a;
    $num=$num/10;
}
if($temp==$sum){
echo "$temp is Armstrong number";
}
else{
    echo "$temp is not an Armstrong number";
    }
?>