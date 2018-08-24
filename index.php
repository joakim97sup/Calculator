<!doctype html>
<html>
        <head> 
        <meta charset="utf-8">
        <title>Lommeregneren</title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
		<div class="calculator">
        <h1>Lommeregner</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="val1" required><br>
            <button type="submit" name="operator" value="add">+</button>
            <button type="submit" name="operator" value="sub">-</button>
            <button type="submit" name="operator" value="mul">*</button>
            <button type="submit" name="operator" value="div">/</button>
			<button type="submit" name="operator" value="per">%</button>
			<button type="submit" name="operator" value="squ">x^y</button>
			<br>	
            <input type="number" name="val2" required>
                
            
        </form>
	<?php
	//$v1 = $_GET['val1'];
	//$v2 = $_GET['val2'];
	$op = $_GET['operator'];
	$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die('missing or illegal val1 parametre');	
	$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT) or die('missing or illegal val2 parametre');		  
		  
			  
			  switch($op){
				case'add':
				$res = $v1+$v2;
					  $opchar = '+';
					  break;
				case'sub':
				$res = $v1-$v2;
					  $opchar = '-';					  
					  break;
				case'mul':
				$res = $v1*$v2;
					  $opchar = '*';
					  break;
				case'div':
				$res = $v1/$v2;
					  $opchar = '/';					  
					  break;
				case'per':
				$res = ($v1/100)*$v2;
					  $opchar = '%';					  
					  break;
					  case'squ':
				$res = pow($v1, $v2);
					  $opchar = '^';
					  break;
				  default:
			  		$res = 'Unknown operator"'.$op.'"';
					  $opchar = $op; 
					  }
			  $res = number_format($res, 3, ',','');
			  echo '<div class="result">';
			  echo $v1.' '.$opchar.' '.$v2.' = '.$res;
			  echo '</div>';
	?>
		</div>
    </body>
    </html>