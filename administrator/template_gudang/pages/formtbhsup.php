	<div id="rightmid" class="col-md-10">
	<h1>Tambah Supplier</h1>
	<form class="form-horizontal" action="aksi_tambahsup.php" method="POST">
  <div class="form-group">
    <label for="inputnmsupplier" class="col-sm-2 control-label">Id Supplier</label>
    <div class="col-sm-4">
      <input type="supplier" class="form-control" id="inputnmsupplier" name="id_supplier" placeholder="Masukkan Id Supplier">
    </div>
  </div>
  <div class="form-group">
    <label for="inputnmsupplier" class="col-sm-2 control-label">Nama Supplier</label>
    <div class="col-sm-4">
      <input type="supplier" class="form-control" id="inputnmsupplier" name="nama_supplier" placeholder="Masukkan Nama Supplier">
    </div>
  </div>
  <div class="form-group">
    <label for="inputalamat" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-4">
     <textarea class="form-control" name="alamat" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputtelepon" class="col-sm-2 control-label">Telepon</label>
    <div class="col-sm-4">
      <input type="telepon" class="form-control" name="telepon" id="inputtelepon" placeholder="Masukkan No.Telp">
    </div>
  </div>
  <div class="form-group">
    <label for="inputtelepon" class="col-sm-2 control-label">id_user</label>
    <div class="col-sm-4">
      <input type="iduser" class="form-control" name="id_user" id="inputtelepon" placeholder="Masukkan Id User">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>