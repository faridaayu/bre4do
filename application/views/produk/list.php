<div class="table-agile-info">
 <div class="panel panel-default">
  <a href="<?php echo base_url()?>Produk/Input_produk"><button type="button" class="waves-effect waves-light btn white m-b-xs">Tambah</button></a>
    <div class="panel-heading">
     Produk
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>stok</th>
            <th>Jenis Barang</th>
            <th data-breakpoints="xs">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($listproduk as $data){?>
          <tr>
          <!-- <tr data-expanded="true"> -->
            <td><?php echo $no ?></td>
            <td><?php echo $data->nama_produk?></td>
            <td>Rp. <?php echo number_format($data->harga_produk,0,",",".");?></td>
            <!-- <td><?php echo $data->gambar?></td> -->
            <td><img src="<?php echo $data->gambar ?>"></td>
            <td><?php echo $data->stok?></td>
            <td><?php echo $data->jenis_produk?></td>
            <td>
              <a href="<?php echo base_url()?>Produk/edit/<?php echo $data->id_produk?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              <a href="<?php echo base_url()?>Produk/Delete/<?php echo $data->id_produk?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
          </tr>
          <?php $no++;}?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>