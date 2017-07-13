	<div id="rightmidtransaksi" class="col-md-10">
		<h2>Transaksi</h2>
		<form>
			<ul>
				<li>
					<label for="tanggal" class="col-md-2">Tanggal</label>
					<input type="date" name="tanggal"></li>
				</li>
			</ul>
			<ul>
				<li>
					<label for="idmember" class="col-md-2">ID Member</label>
					<input type="text" name="idmember" size="16">
				</li>
			</ul>
			<ul>
				<li>
				<label for="nomeja" class="col-md-2">Nomor Meja</label>
				<select name="nomeja" id="nomeja">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select></li>
			</ul>
		</form>
		<div class="button col-md-2 buttontambah">
			<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Tambah Item</button><br><br>
		</div>
		<div id="tabeltransaksi" class="col-md-12">
		<table border="3" cellspacing="0" cellpadding="10" border-color="white">
		<tr>
			<th width="50">No</th>
			<th width="200">Nama Item</th>
			<th width="100">Banyaknya Barang</th>
			<th width="100">Jumlah</th>
			<th width="100">Opsi</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Ayam Cabe ijo</td>
			<td>2</td>
			<td>Rp 25.000</td>
			<td><button type="button" class="btn btn-danger" onclick="tombol();">Hapus</button></td>
		</tr>
		<tr>
			<td colspan="2">Jumlah Total</td>
			<td>2</td>
			<td>Rp. 25.000</td>
		</tr>
		<tr>
			<td colspan="3">Jumlah Bayar</td>
			<td><input type="text" name="bayar"></td>
		</tr>
		<tr>
			<td colspan="3">Kembalian</td>
			<td></td>
		</tr>
		</table>
		</div>
		<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<label for="namaitem"><h4>Nama Item</h4></label><br>
					<select name="nama_item" id="namaitem">
							<?php foreach ($daftar_menu as $dm): ?>
 		<option value="<?php echo $dm['nama_item'] ?>" 
 		><?php echo $dm['nama_item']; ?></option>
 	<?php endforeach ?>



					</select><br>
					<label for="bitem"><h4>Banyaknya Item</h4></label><br>
					<input type="bitem" name="bitem" size="13"><br>
					<a href="transaksikasir2.html"><button type="button" class="btn btn-default">Tambah</button></a>
				</div>
			</div>
		</div>
		</div>
		<div class="col-md-12 buttontambah2">
			<a href="transaksikasir.html"><button type="button" class="btn btn-info btn-md">Konfirmasi</button></a>
		</div>
	</div>