<!DOCTYPE html>
<html>
<h1>VE DO THI</h1>
<form action = "" method = "post">
	Anh :<input type = "text" name = "Anh">
<br><br>
	Phap: <input type = "text" name = "Phap">
<br><br>
	Duc : <input type = "text" name = "Duc">
<br><br>
	Nga : <input type = "text" name = "Nga">
<br><br>
	Nhat : <input type = "text" name = "Nhat">
<br><br>
	<input type = "submit" name = "ve" value = "Ve do thi" > 
</form>

<?php
if(isset($_POST['Anh'])){
	$x1 = 10*intval($_POST['Anh']);
}
if(isset($_POST['ve'])){
	$x2 = 10*intval($_POST['Phap']);
}
if(isset($_POST['ve'])){	
	$x3 = 10*intval($_POST['Duc']);
}
if(isset($_POST['ve'])){
	$x4 = 10*intval($_POST['Nga']);
}
if(isset($_POST['ve'])){	
	$x5 = 10*intval($_POST['Nhat']);
} 
if(isset($_POST['ve']))
{
	echo 
	 '<table border = "2px">
	<tr>
		<td>Anh : </td>
		<td><div style="background-color: red; width: '.$x1.'px;">'. ($x1/10).'</div></td>
	</tr>
	<tr>
		<td>Phap: </td>
		<td><div style="background-color: red; width: '.$x2.'px;">'. ($x2/10).'</div></td>
	</tr>
	<tr>
		<td>Duc: </td>
		<td><div style="background-color: red; width: '.$x3.'px;">'. ($x3/10).'</div></td>
	</tr>
	<tr>
		<td>Nga : </td>
		<td><div style="background-color: red; width: '.$x4.'px;">'. ($x4/10).'</div></td>
	</tr>
	<tr>
		<td>Nhat : </td>
		<td><div style="background-color: red; width: '.$x5.'px;">'. ($x5/10).'</div></td>
	</tr>
</table>';
}
?>
</html>


















?>
</html>