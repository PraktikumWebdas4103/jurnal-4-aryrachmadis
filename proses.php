Apa hobi Anda?<br />
<form action="#" method="POST">
	<input type="checkbox" name="hobi[]" value="Main Bola">Main Bola<br />
	<input type="checkbox" name="hobi[]" value="Jajan">Jajan<br />
	<input type="checkbox" name="hobi[]" value="Main Game">Main Game<br />
	<input type="checkbox" name="hobi[]" value="Travelling">Travelling<br />
	<input type="submit" value="Kirim">
</form>

<?php
	if (isset($_POST['submit'])) {
		$gambar = $_FILES['gambar']['name'];
		$hobi = $_POST['hobi'];

		echo "<gmbr src='$gambar'>";
		
	}

?>
