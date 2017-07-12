<div id="rightmid" class="col-md-10">
		<h3>Data Menu WAR Resto</h3>
		<form class="form-horizontal" action="aksi_tambah_menu.php" method="POST">
		 <div class="form-group">
    <label for="inputjenis" class="col-sm-2 control-label">Nama Jenis</label>
    <div class="col-sm-4">
     <select name="id_jenis" id="jenismenu" class="form-control">
     <?php foreach ($daftar_jenismenu as $dj): ?>
            <option value="<?php echo $dj['id_jenis'] ?>"><?php echo $dj['jenis_menu'] ?></option>
          <?php endforeach ?>
</select>
    </div>
	</div>
  <div class="form-group">
    <label for="inputnamaitem" class="col-sm-2 control-label">Nama Item</label>
    <div class="col-sm-4">
      <input name="nama_item" class="form-control" id="inputnamaitem" placeholder="Masukkan Item Menu">
    </div>
  </div>
  <div class="form-group">
    <label for="inputharga" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-4">
      <input name="harga" class="form-control" id="inputharga" placeholder="Masukkan harga">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Submit</button></a>
    </div>
  </div>
</form>
	</div>

	</div>