<div id="rightmid" class="col-md-10">
		<h3>Laporan Pendapatan Perhari</h3>
		<form class="form-inline">
  <div class="form-group">
    <label for="tgl">Tanggal</label>
    <select class="form-control">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	  <option>6</option>
	  <option>7</option>
	  <option>8</option>
	  <option>9</option>
	  <option>10</option>
	  <option>11</option>
	  <option>12</option>
	  <option>13</option>
	  <option>14</option>
	  <option>15</option>
	  <option>16</option>
	  <option>17</option>
	  <option>18</option>
	  <option>19</option>
	  <option>20</option>
	  <option>21</option>
	  <option>22</option>
	  <option>23</option>
	  <option>24</option>
	  <option>25</option>
	  <option>26</option>
	  <option>27</option>
	  <option>28</option>
	  <option>29</option>
	  <option>30</option>
	  <option>31</option>
</select>
  </div>
  <div class="form-group">
    <label for="bulan">Bulan</label>
    <select class="form-control">
	  <option>Januari</option>
	  <option>Februari</option>
	  <option>Maret</option>
	  <option>April</option>
	  <option>Mei</option>
	  <option>Juni</option>
	  <option>Juli</option>
	  <option>Agustus</option>
	  <option>September</option>
	  <option>Oktober</option>
	  <option>November</option>
	  <option>Desember</option>
</select>
  </div>
  <div class="form-group">
    <label for="tahun">Tahun</label>
   <select class="form-control">
	  <option>2012</option>
	  <option>2013</option>
	  <option>2014</option>
	  <option>2015</option>
	  <option>2016</option>
	  <option>2017</option>
</select>
  </div>
  <a href="aksi_laporan.php"><button type="button" class="btn btn-default">Tampilkan</button></a>
</form><br>
  <div class="form-group">
<table class="table table-bordered" width="100% cellspacing="0" cellpadding="10" border-color="white">


		<tr>
		<th align="center">No</th>
		<th>Id Pesanan</th>
		<th>Nama Member</th>
		<th>Total Bayar</th>
		</tr>
<?php 
$i = 1;
 foreach ($isi_lap as $il) { 
 	?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $il['id_pesanan'] ?></td>
			<td><?= $il['id_member']?></td>
			<td><?= $il['jumlah_harga']?></td>
		</tr>

		<?php 
		$i++;
		} ?>



		<tr>
		<td colspan="3">Total Pendapatan</td>
		<td>
			
		</td>
		
		</tr>

		</table>
	</div>

