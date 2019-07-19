	<table class="table table-bordered">
		<tr>
			<th>
				No 
			</th>
			<th>
				Nama 
			</th>
			<th>
				Jenis Kelamin
			</th>
			<th>
				Telepon
			</th>
			<th>
				Alamat
			</th>
			<th>
				Opsi
			</th>
		</tr>
		<?php
		include"koneksi.php";
		$no = 1;
		$data = mysqli_query ($koneksi, " select 
			id_mahasiswa,
			nama,
			jenis_kelamin,
			telepon,
			alamat
			from 
			mahasiswa 
			order by id_mahasiswa DESC");
		while ($row = mysqli_fetch_array ($data))
		{
			?>
			<tr>
				<td>
					<?php echo $no++; ?>
				</td>
				<td>
					<?php echo $row['nama']; ?>
				</td>
				<td>
					<?php echo $row['jenis_kelamin']; ?>
				</td>
				<td>
					<?php echo $row['telepon']; ?>
				</td>
				<td>
					<?php echo $row['alamat']; ?>
				</td>
				<td>
					<a href="#" class="btn btn-primary btn-sm" id="edit" data-id="<?= $row['id_mahasiswa']; ?>">Edit</a>
					<a href="#" class="btn btn-danger btn-sm" id="hapus" data-id="<?= $row['id_mahasiswa']; ?>">Hapus</a> 
				</td>
			</tr>
			<?php
		}
		?>
	</table>