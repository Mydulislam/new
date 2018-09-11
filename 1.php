<form action="" method="">
	<input type="number" name="number1">
	<input type="submit" name="submit">
</form>
<?php
	if(isset($_GET['submit'])){
		$number=$_GET['number1'];
		for($i=1;$i<=10;$i++){
			$namota=$number*$i;
			echo "$number * $i = ".$namota."<br>";
		}
		
	}
?>
