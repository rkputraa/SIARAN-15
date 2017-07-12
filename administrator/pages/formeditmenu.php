<div id="rightmid" class="col-md-10">
		<h3>Edit Menu WAR Resto</h3>
		<form class="form-horizontal" action="aksi_edit_menu.php?id=<?php echo $data_menu['id_item']?>" method="POST">
		 <div class="form-group">
    <label for="inputjenis" class="col-sm-2 control-label">Nama Jenis</label>
    <div class="col-sm-4">
     <select class="form-control">
	  <?php foreach ($data_jenismenu as $jm): ?>
      
    <br>  <option value="<?php echo $jm['id_jenis'] ?>" 
    <?php
    if ($jm['id_jenis']==$data_menu['id_jenis']) {
      echo "selected"; 
      # code...
    }
    ?>
    ><?php echo $jm['nama_jenis'] ?></option>
    <?php endforeach ?>
</select>
    </div>
	</div>
  <div class="form-group">
    <label for="inputnamaitem" class="col-sm-2 control-label">Nama Item</label>
    <div class="col-sm-4">
      <input name="nama_item" class="form-control" id="inputnamaitem" value="<?php echo $data_menu['nama_item']?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputharga" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-4">
      <input name="harga" class="form-control" id="inputharga" value="<?php echo $data_menu['harga']?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <a href="olahitemmenuadmin.html"><button type="button" class="btn btn-default">Submit</button></a>
    </div>
  </div>
</form>
	</div>

	</div>