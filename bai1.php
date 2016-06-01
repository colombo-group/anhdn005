<?php
	$ketqua = array();
	for ($i = 1; $i <= 10; $i++ ){
		$text = "";
		for ($j = 1; $j <= 10; $j++){
			$tich = $i* $j;
			$text .= '<table>
		                <tr>
						  <td>' .$i. "x" . $j."</td> 
						  
						  <td>  = </td>
						  
						  <td>" .$tich. '</td>

						</tr>

					</table>';
					
		}
		
		$ketqua[] = $text;
	}
	echo '<h1>Bang cuu chuong</h1>';
	echo '<table border = "2">';
	echo '<tr>';
	echo '<td>'. $ketqua[0] .'</td><td>' . $ketqua[1] . '</td><td>'. $ketqua[2]. '</td><td>'.$ketqua[3].'</td><td>'.$ketqua[4].'</td></tr>';
	echo '<td>'. $ketqua[5] .'</td><td>' . $ketqua[6] . '</td><td>'. $ketqua[7]. '</td><td>'.$ketqua[8].'</td><td>'.$ketqua[9].'</td></tr></table>';

?>