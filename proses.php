<?php
	if (isset($_POST['submit'])) {
		$gambar = $_FILES['gambar']['name'];
		$hobi = $_POST['hobi'];

		echo "<gmbr src='$gambar'>";
		
	}

?>