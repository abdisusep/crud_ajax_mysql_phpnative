
<?php

include"koneksi.php";
$no = 1;
$query = mysqli_query ($koneksi, "SELECT	id_mahasiswa, nama,	jenis_kelamin, telepon, alamat FROM	mahasiswa WHERE id_mahasiswa = $_POST[id]");

$result = mysqli_fetch_array ($query);

?>

<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<label>Nama</label>
		<input type="hidden" name="id_mahasiswa" value="<?php echo $result['id_mahasiswa'] ; ?>">
		<input class="form-control" name="nama" value="<?php echo $result['nama'] ; ?>">
		<p style="color:red" id="error_edit_nama"></p>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($result['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($result['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input class="form-control" name="telepon"  value="<?php echo $result['telepon'] ; ?>">
		<p style="color:red" id="error_edit_telepon"></p>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"><?php echo $result['alamat'] ; ?></textarea>
		<p style="color:red" id="error_edit_alamat"></p>
	</div>
	
</form>