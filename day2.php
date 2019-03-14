<?php
  $n=100;
  $m=999;

  for ($i=$n; $i <=$m ; $i++) { 
     $a =floor($i/100);
     $b=floor($i/10%10);
     $c = floor($i%100%10);
      if ($a*$a*$a+$b*$b*$b+$c*$c*$c==$i) {
        echo '<br>';
          echo $i;
      }
  }


   
     
 
?>