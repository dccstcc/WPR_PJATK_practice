<?php
     
echo '<table cellspacing="0"><tr>';
     
$x=8;
$y=8;
$xy=$x*$y;
     
$i=0;
$j=1;
    
while($j<$xy) 
{
      if($j%2==0) 
	  {
         $color='black';
      } 
	  else 
	  {
         $color='white';
      }
    
	  if($i==8) 
	  {
         echo '</tr><tr>';
         $i=0;
      }  
	  else 
	  {
         echo '<td style="background-color: '.$color.'; width: 50px; height: 50px;"></td>';
         $i++;
      }	
$j++;
}
     
echo '</table>';
     
?>