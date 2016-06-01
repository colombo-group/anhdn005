<html>
<form action = "" method = "post">
<h1> Chuong trinh may tinh dien tu</h1>
<input type = "text" name = "sothu1">
<input type = "submit" name = "cong" value ="+">
<input type = "submit" name = "tru" value = "-">
<input type = "submit" name = "nhan" value = "X">
<input type = "submit" name = "chia" value = "/">
<input type = "submit" name = "somu" value = "^"> 
<input type = "text" name = "sothu2"> 
</form>
<?php
$ketqua = 0;

if (isset($_POST)){
 	$sothu1 = 0;
 	$sothu2 = 0;
 	if (isset($_POST['sothu1'])){
 		$sothu1 = $_POST['sothu1'];}
 		echo "So thu 1 nguoi dung nhap vao la: ". $sothu1;
 		echo "</br>";
 	
 	if (isset($_POST['sothu2'])){
 		$sothu2 = $_POST['sothu2'];}
 		echo "So thu 1 nguoi dung nhap vao la: ".$sothu2;

 		if (is_numeric($sothu1) && is_numeric($sothu2)){
 			if (isset($_POST['cong'])){
 				$ketqua = $sothu1 + $sothu2; 
 			}
 			elseif (isset($_POST['tru'])){
 				$ketqua = $sothu1 - $sothu2;
 			}
 			elseif (isset($_POST['nhan'])){
 				$ketqua = $sothu1 * $sothu2;
 			}
 			elseif (isset($_POST['chia'])){
 				$ketqua = $sothu1/ $sothu2;
 			}
 			elseif (isset($_POST['somu'])){
 				$ketqua = pow($sothu1, $sothu2);
 			}
 			echo '<h1>Result</h1>';
			echo '<input type = "text" readonly value = "'.$ketqua.'" placeholder="result">';
 }
 }
?>
</html>