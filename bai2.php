<html>
<h1> ve tam giac </h1>
<form action = "" method = "post">
	<input type = "text" name = "nhapso">
	<input type = "submit" name = "ve" value = "Ve tam giac">
</form>
<?php
	if(isset($_POST['ve'])){
		$sodong = $_POST['nhapso'];
		for($i = 1; $i <= $sodong; $i++){
			for($j = $i; $j>0; $j--){
				$k = $j%10;
				echo $k.' ';
			}
			echo '</br>';
		}
	}
?>
</html>
