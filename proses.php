<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a");
fputs($fp, "$nama|$nim|$email|$prodi\n");
fclose($fp);

header("Location: setelahProses.php");

?>



