<?php
function liga(){
	$db = mysqli_connect("localhost", "root", "", "ligi");
    $x = 'SELECT * FROM liga';

	$res = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_row($res)) {
		echo "<option value='$row[0], $row[1], $row[2]'>$row[0], $row[1],  liczba druzyn $row[2]</option>";
      

	}
	mysqli_close($conn);
}