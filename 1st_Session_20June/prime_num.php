<?php
        $num=2;
        $flag=0;
        for($i=2;$i<$num;$i++)
        {
            if($num%$i==0){
                $flag=1;
                break;
            }
        }
      if($flag==1){
        echo "$num is not prime number";
      }
      else{
        echo "$num is prime number";
      }
?>