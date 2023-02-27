<?php
	function coin_Formula($coin_Type, $coin_Price, $portion_Count)
	{
		$portion_Count = $_GET['points'];
		$a_portion_price = ($coin_Price / 48) * $portion_Count;
		$tax = (($coin_Price * 7) / 100) * $portion_Count;
		$worth = (($coin_Price * 9) / 100) * $portion_Count;
		$keep = (($coin_Price * 6) / 100) * $portion_Count;
		
		$final_price = (int)($tax + $worth + $keep + $a_portion_price) * $portion_Count;
		
		echo '<form action="" method="get">';
		echo '<th scope="row"></th>';
		echo '<td>' . $coin_Type . '</td>';
		echo '<td class="">' .$coin_Price. '<span>ریال</span>' . '</td>';

		echo '<td>' . $a_portion_price . '<span>ریال</span>' . '</td>';
		echo '<td>' . $tax . '<span>ریال</span>' . '</td>';
		echo '<td>' . $worth . '<span>ریال</span>' . '</td>';
		echo '<td>' . $keep . '<span>ریال</span>' . '</td>';
		
		echo '<td><input type="number" name="points" min="1" max="48" value="' . $portion_Count . '" step="1"></td>';
		echo '<td>' . $final_price . '<span>ریال</span>' . '</td>';
		
		echo '<td><button type="submit" class="btn btn-primary">خرید</button></td>';
		echo '</form>';
		
	}