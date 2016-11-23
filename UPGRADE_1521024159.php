<table border='1'>
	<tr>
	<th rowspan="2">INPUT</th>
	<th colspan="5">OUTPUT</th>
</tr>
</tr>
	<th>A</th>
	<th>E</th>
	<th>I</th>
	<th>U</th>
	<th>O</th>
</tr>
<tr>
  <td>
  	<?php
  	$n1="TIKA WIDYA OKTAVIANA" ;
  	echo $n1;
  	?>
  	</td>
  	<td>
  	<?php
  	$tA = substr_count($n1,"A") ;
  	echo $tA;
  	?>
  	</td>
  	  <td>
  	<?php
  	$tE = substr_count($n1,"E") ;
  	echo $tE
  	?>
  	</td>
  	  <td>
  	<?php
  	 $tI = substr_count($n1,"I") ;
  	 echo $tI
  	?>
  	</td>
  	  <td>
  	<?php
  	 $tU = substr_count($n1,"U") ;
  	 echo $tU
  	?>
  	</td>
  	  <td>
  	<?php
  	 $tO = substr_count($n1,"O") ;
  	 echo $tO
  	?>
  	</td>
  </tr>
  </table>