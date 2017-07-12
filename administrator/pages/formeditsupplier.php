  <div id="rightmid" class="col-md-10">
  <h1>Edit Supplier</h1>
  <form class="form-horizontal" action="aksiubahsup.php?id=<?php echo $data['id_supplier']; ?>" method = "POST">
  <div class="form-group">
    <label for="inputnmsupplier" class="col-sm-2 control-label">Nama Supplier</label>
    <div class="col-sm-4">
      <input type="supplier" class="form-control" name="nama_supplier" id="inputnmsupplier" value="<?php echo $data['nama_supplier']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputalamat" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-4">
     <textarea class="form-control" name="alamat" rows="3"><?php echo $data['alamat']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputtelepon" class="col-sm-2 control-label">Telepon</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="telepon" id="inputtelepon" value="<?php echo $data['telepon']; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>