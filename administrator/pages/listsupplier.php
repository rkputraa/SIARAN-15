<div id="rightmid" class="col-md-10">
<h1>Supplier</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Id Supplier</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>id User</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
 <?php
 $i=1; 
 foreach ($isi_sup as $su) { ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $su['id_supplier'] ?></td>
			<td><?= $su['nama_supplier'] ?></td>
			<td><?= $su['alamat'] ?></td>
			<td><?= $su['telepon'] ?></td>
			<td><?= $su['id_user'] ?></td>
			<td><a href="editdatasupplier.php?id=<?= $su['id_supplier'] ?>"><button type="button" class="btn btn-warning">Edit</button></a>
			<button type="button" class="btn btn-danger" onclick="tombol();">Hapus</button></td>
		</tr>
		<?php 
		$i++;
		} ?>
	</tbody>
</table>
</div>