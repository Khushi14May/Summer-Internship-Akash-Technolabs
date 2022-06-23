<?php
    $txt=$_POST['name'];
    $txt2=$_POST['number'];

    echo"My name is $txt and  number is $txt2";
    echo "<table border='1'>";
    for($i=0;$i<$txt2;$i++){
        echo "<tr>";
        if($i%2==0){
            echo "<td style='color:blue;'>hello $i</td>";
        }
        else{
            echo "<td style='color:red;'>hello $i</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>