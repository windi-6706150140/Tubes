 <?php
include "config/koneksi.php";
include "config/library.php";
	$id=mysql_real_escape_string($_POST['id']);
	$isbn=mysql_real_escape_string($_POST['Isbn']);
	$judul = mysql_real_escape_string($_POST['judul']);
	$tahun = mysql_real_escape_string($_POST['tahun']);
	$jumlah = mysql_real_escape_string($_POST['jumlah']) ;
	$pengarang=mysql_real_escape_string($_POST['pengarang']);
	$penerbit=mysql_real_escape_string($_POST['penerbit']);
	$deskripsi=mysql_real_escape_string($_POST['deskripsi']);
  		$sql_ubah="UPDATE yo_buku SET
		judul='$judul',
		isbn='$isbn',
		tahun_terbit='$tahun',
		jumlah='$jumlah',
		date='$date',
		kd_pengarang='$pengarang',
		kd_penerbit='$penerbit',
		deskripsi='$deskripsi'

		WHERE id_buku='$id'";
		mysql_query($sql_ubah,$konek)or die ("Perubahan data gagal".mysql_error());
?>
<script language="JavaScript">document.location=('./')</script>