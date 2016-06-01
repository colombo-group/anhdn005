<html>
<h1> ve tam giac </h1>
<form action = "" method = "post">
	<input type = "text" name = "nhapso">
	<input type = "submit" name = "ve" value = "Ve tam giac">
</form>
<div style =  "text-align: center; float : left">
<?php
	if(isset($_POST['ve'])){
		$sodong = $_POST['nhapso'];
		for($i = 1; $i <= $sodong; $i++){
			for($j = $i; $j>$i/2; $j--){
				$k = $j%10;
				echo $k.' ';
			}
			for ($m = ceil($i/2) +1; $m<=$i; $m++){
				$n = $m%10;
				echo $n.' ';
			}
			echo '</br>';
		}
	}
?>
</div>
</html>
