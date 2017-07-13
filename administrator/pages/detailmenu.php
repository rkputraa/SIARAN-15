<div id="rightmiddetail" class="col-md-10">
    <div class="col-md-6" id="profil">
            <div class="thumbnail">
<?php 

$i = 1;
 foreach ($isi_detailmenu as $ib) { ?>
          <h3><strong>Detail Data Menu</strong>
            </h3>
                <table width="100%">
            <tr><td>Kode Item</td>
              <td>:</td>
              <td><?= $ib['id_item'] ?></td>
            </tr>
            <tr><td>Nama Item</td>
              <td>:</td>
              <td><?= $ib['nama_item'] ?></td>
            </tr>
            <tr><td>Kode Jenis</td>
              <td>:</td>
              <td><?= $ib['id_jenis'] ?></td>
            </tr>
            <tr><td>Nama Jenis</td>
              <td>:</td>
              <td><?= $ib['jenis_menu'] ?></td>
            </tr>
            <tr><td>Harga</td>
              <td>:</td>
              <td><?= $ib['harga'] ?></td>
            </tr>
            </table>
            <?php 
    $i++;
    } ?>
    </div>
  </div>
  </div>