
<div id="rightmid" class="col-md-10">
<h1>Data Menu WAR Resto</h1>
<br><br><br>
<h5><a href="tambah_menu.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Create Jenis Menu</a></h5>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Item</th>
			<th>Nama Item</th>
			<th>Harga</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
 <?php 
$i = 1;
 foreach ($isi_menu as $ib) { ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $ib['id_item'] ?></td>
			<td><?= $ib['nama_item']?></td>
			<td><?= $ib['harga']?></td>
			<td><a href="detailitemmenuadmin.html">
			<button type="button" class="btn btn-info">Lihat</button>
			<a href="ubah_berita.php?id=<?php echo $ib['id_item']?>">
			<button type="button" class="btn btn-warning">Edit</button></a>
		<a href="#">
			<button type="button" class="btn btn-danger" onclick="tombol();">Hapus</button></td>
		</tr>
		<?php 
		$i++;
		} ?>
	</tbody>
</table>
	
</div>